<?php

namespace FernleafSystems\ApiWrappers\GeoIP\Redirectli\Geo;

/**
 * @property string $request_ip
 */
class Lookup extends \FernleafSystems\ApiWrappers\GeoIP\Redirectli\Api {

	/**
	 * @return IpGeoVO|null
	 */
	public function me() {
		return $this->ip( '' );
	}

	/**
	 * @param string $ip
	 */
	public function ip( $ip ) :?IpGeoVO {
		$IP = null;
		if ( filter_var( $ip, FILTER_VALIDATE_IP ) !== false ) {
			$this->request_ip = $ip;
			if ( $this->req()->isLastRequestSuccess() ) {
				$IP = $this->getVO()->applyFromArray( $this->getDecodedResponseBody() );
			}
		}
		return $IP;
	}

	protected function getVO() :IpGeoVO {
		return new IpGeoVO();
	}

	protected function getUrlEndpoint() :string {
		$ip = $this->request_ip;
		return 'ip'.( empty( $ip ) ? '' : '/'.$ip );
	}
}
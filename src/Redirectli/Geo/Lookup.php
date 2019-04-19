<?php

namespace FernleafSystems\ApiWrappers\GeoIP\Redirectli\Geo;

/**
 * Class Lookup
 * @package FernleafSystems\ApiWrappers\GeoIP\GeoJS\Geo
 */
class Lookup extends \FernleafSystems\ApiWrappers\GeoIP\Redirectli\Api {

	/**
	 * @return IpGeoVO|null
	 */
	public function me() {
		return $this->ip( '' );
	}

	/**
	 * @param string $sIp
	 * @return IpGeoVO|null
	 */
	public function ip( $sIp ) {
		$oIp = null;
		if ( filter_var( $sIp, FILTER_VALIDATE_IP ) !== false ) {
			$this->setParam( 'request_ip', $sIp );
			if ( $this->req()->isLastRequestSuccess() ) {
				$oIp = $this->getVO()->applyFromArray( $this->getDecodedResponseBody() );
			}
		}
		return $oIp;
	}

	/**
	 * @return IpGeoVO
	 */
	protected function getVO() {
		return new IpGeoVO();
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		$sIp = $this->getParam( 'request_ip' );
		return 'ip'.( empty( $sIp ) ? '' : '/'.$sIp );
	}
}
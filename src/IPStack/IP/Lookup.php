<?php

namespace FernleafSystems\ApiWrappers\GeoIP\IPStack\IP;

use FernleafSystems\ApiWrappers\GeoIP\IPStack;

/**
 * @property string $lookup_ip
 */
class Lookup extends IPStack\Api {

	public function ip( string $ip ) :?GeoIpVO {
		$IP = null;
		$this->lookup_ip = $ip;
		$this->req();
		if ( $this->isLastRequestSuccess() ) {
			$IP = $this->getVO()->applyFromArray( $this->getDecodedResponseBody() );
		}
		return $IP;
	}

	protected function getVO() :GeoIpVO {
		return new GeoIpVO();
	}

	/**
	 * @throws \Exception
	 */
	protected function preSendVerification() {
		parent::preSendVerification();

		if ( filter_var( $this->lookup_ip, FILTER_VALIDATE_IP ) === false ) {
			throw new \Exception( sprintf( 'The IP provided was not valid "%s"', $this->lookup_ip ) );
		}
	}

	protected function getUrlEndpoint() :string {
		return $this->lookup_ip;
	}
}
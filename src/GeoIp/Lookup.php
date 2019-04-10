<?php

namespace FernleafSystems\ApiWrappers\IPStack\GeoIp;

use FernleafSystems\ApiWrappers\IPStack;

/**
 * Class Lookup
 * @package FernleafSystems\ApiWrappers\IPStack\GeoIp
 */
class Lookup extends IPStack\Api {

	/**
	 * @param string $sIP
	 * @return GeoIpVO|null
	 */
	public function ip( $sIP ) {
		$oIP = null;
		$this->setParam( 'lookup_ip', $sIP )
			 ->req();
		if ( $this->isLastRequestSuccess() ) {
			$oIP = $this->getVO()->applyFromArray( $this->getDecodedResponseBody() );
		}
		return $oIP;
	}

	/**
	 * @return GeoIpVO
	 */
	protected function getVO() {
		return new GeoIpVO();
	}

	/**
	 * @throws \Exception
	 */
	protected function preSendVerification() {
		parent::preSendVerification();

		$sIp = $this->getParam( 'lookup_ip' );
		if ( filter_var( $sIp, FILTER_VALIDATE_IP ) === false ) {
			throw new \Exception( sprintf( 'The IP provided was not valid "%s"', $sIp ) );
		}
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return $this->getParam( 'lookup_ip' );
	}
}
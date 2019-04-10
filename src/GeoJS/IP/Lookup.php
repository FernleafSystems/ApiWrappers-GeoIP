<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\IP;

use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

/**
 * Class Lookup
 * @package FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country
 */
class Lookup extends GeoJS\Api {

	/**
	 * @return string|null
	 */
	public function me() {
		$sIP = null;
		if ( $this->req()->isLastRequestSuccess() ) {
			$aResp = $this->getDecodedResponseBody();
			$sIP = isset( $aResp[ 'ip' ] ) ? $aResp[ 'ip' ] : null;
		}
		return $sIP;
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'ip.json';
	}
}
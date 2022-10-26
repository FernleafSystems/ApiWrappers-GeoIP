<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\IP;

use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

class Lookup extends GeoJS\Api {

	/**
	 * @return string|null
	 */
	public function me() {
		$ip = null;
		if ( $this->req()->isLastRequestSuccess() ) {
			$resp = $this->getDecodedResponseBody();
			$ip = $resp[ 'ip' ] ?? null;
		}
		return $ip;
	}

	protected function getUrlEndpoint() :string {
		return 'ip.json';
	}
}
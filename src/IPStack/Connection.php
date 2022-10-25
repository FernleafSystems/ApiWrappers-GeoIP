<?php

namespace FernleafSystems\ApiWrappers\GeoIP\IPStack;

/**
 * @property bool $is_secure
 */
class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {

	const API_URL = 'http%s://api.ipstack.com/';

	public function getBaseUrl() :string {
		return sprintf( static::API_URL, $this->is_secure ? 's' : '' );
	}
}

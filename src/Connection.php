<?php

namespace FernleafSystems\ApiWrappers\IPStack;

/**
 * Class Connection
 * @package FernleafSystems\ApiWrappers\Freeagent
 * @property bool $is_secure
 */
class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {

	const API_URL = 'http%s://api.ipstack.com/';

	/**
	 * @return string
	 */
	public function getBaseUrl() {
		return sprintf( static::API_URL, $this->is_secure ? 's' : '' );
	}
}

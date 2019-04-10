<?php

namespace FernleafSystems\ApiWrappers\IPStack;

/**
 * Class Api
 * @package FernleafSystems\ApiWrappers\FreeAgent
 */
class Api extends \FernleafSystems\ApiWrappers\Base\BaseApi {

	const REQUEST_METHOD = 'get';

	protected function preFlight() {
		$this->setRequestDataItem( 'access_key', $this->getConnection()->api_key );
	}
}
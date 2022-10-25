<?php

namespace FernleafSystems\ApiWrappers\GeoIP\IPStack;

class Api extends \FernleafSystems\ApiWrappers\Base\BaseApi {

	const REQUEST_METHOD = 'get';

	protected function preFlight() {
		$this->setRequestDataItem( 'access_key', $this->getConnection()->api_key );
	}
}
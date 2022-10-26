<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country;

use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

class Base extends GeoJS\Api {

	/**
	 * @return IpCountryVO
	 */
	protected function getVO() :IpCountryVO {
		return new IpCountryVO();
	}

	protected function getUrlEndpoint() :string {
		return 'ip/country.json';
	}
}
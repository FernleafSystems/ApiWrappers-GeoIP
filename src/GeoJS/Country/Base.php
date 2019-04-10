<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country;

use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

/**
 * Class Base
 * @package FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country
 */
class Base extends GeoJS\Api {

	/**
	 * @return IpCountryVO
	 */
	protected function getVO() {
		return new IpCountryVO();
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'ip/country.json';
	}
}
<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\IP;

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
}
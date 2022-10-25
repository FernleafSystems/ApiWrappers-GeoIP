<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\IP;

use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

class Base extends GeoJS\Api {

	protected function getVO() :GeoJS\Country\IpCountryVO {
		return new GeoJS\Country\IpCountryVO();
	}
}
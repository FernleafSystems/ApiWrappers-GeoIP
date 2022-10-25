<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Geo;

class Lookup extends \FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country\Lookup {

	protected function getVO() :IpGeoVO {
		return new IpGeoVO();
	}

	protected function getUrlEndpoint() :string {
		return 'ip/geo.json';
	}
}
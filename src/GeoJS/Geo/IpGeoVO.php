<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Geo;

use FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country\IpCountryVO;

/**
 * @see     https://www.geojs.io/docs/v1/endpoints/geo/
 * @property string ip
 * @property string country             - e.g. US
 * @property string country_3           - e.g. USA
 * @property string continent_code      - e.g. United States
 * @property string city
 * @property string region
 * @property string latitude
 * @property string longitude
 * @property string accuracy
 * @property string timezone
 * @property string organization
 * @property string asn
 * @property string organization_name
 */
class IpGeoVO extends IpCountryVO {

}
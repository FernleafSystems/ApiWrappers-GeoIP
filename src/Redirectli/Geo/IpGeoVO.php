<?php

namespace FernleafSystems\ApiWrappers\GeoIP\Redirectli\Geo;

use FernleafSystems\ApiWrappers\Base\BaseVO;

/**
 * @see     https://redirect.li/api/#api-Geo_IP
 * @property string ip
 * @property string ipType        - 4 or 6
 * @property string code          - unknown, private, Geoip
 * @property string countryCode   - e.g. GB
 * @property string countryName   - e.g. United Kingdom
 * @property string regionCode    - e.g. NIR (Northern Ireland)
 * @property string regionName    - e.g. Northern Ireland
 * @property string city          - e.g. Belfast
 * @property string postCode      - e.g. BT1
 * @property string timeZone      - e.g. Europe/London
 * @property string latitude
 * @property string longitude
 * @property string Radius
 */
class IpGeoVO extends BaseVO {

}
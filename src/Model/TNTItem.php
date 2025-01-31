<?php
/**
 * TNTItem
 *
 * PHP version 8.1
 *
 * @package  kruegge82\shipstage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shipstage API
 *
 * Wenn Sie die API verwenden möchten, wenden Sie sich bitte an den Support, um ein Authentifizierungstoken zu erhalten.
 *
 * The version of the OpenAPI document: 2.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\shipstage\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use kruegge82\shipstage\ObjectSerializer;

/**
 * TNTItem Class Doc Comment
 *
 * @package  kruegge82\shipstage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TNTItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TNTItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'goods_description' => 'string',
        'goods_amount' => 'int',
        'unit_weight' => 'float',
        'unit_value' => 'float',
        'hs_code' => 'string',
        'origin_country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'goods_description' => null,
        'goods_amount' => null,
        'unit_weight' => null,
        'unit_value' => null,
        'hs_code' => null,
        'origin_country' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'goods_description' => false,
        'goods_amount' => false,
        'unit_weight' => false,
        'unit_value' => false,
        'hs_code' => false,
        'origin_country' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'goods_description' => 'goods_description',
        'goods_amount' => 'goods_amount',
        'unit_weight' => 'unit_weight',
        'unit_value' => 'unit_value',
        'hs_code' => 'hs_code',
        'origin_country' => 'origin_country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'goods_description' => 'setGoodsDescription',
        'goods_amount' => 'setGoodsAmount',
        'unit_weight' => 'setUnitWeight',
        'unit_value' => 'setUnitValue',
        'hs_code' => 'setHsCode',
        'origin_country' => 'setOriginCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'goods_description' => 'getGoodsDescription',
        'goods_amount' => 'getGoodsAmount',
        'unit_weight' => 'getUnitWeight',
        'unit_value' => 'getUnitValue',
        'hs_code' => 'getHsCode',
        'origin_country' => 'getOriginCountry'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const ORIGIN_COUNTRY_AF = 'AF';
    public const ORIGIN_COUNTRY_AX = 'AX';
    public const ORIGIN_COUNTRY_AL = 'AL';
    public const ORIGIN_COUNTRY_DZ = 'DZ';
    public const ORIGIN_COUNTRY__AS = 'AS';
    public const ORIGIN_COUNTRY_AD = 'AD';
    public const ORIGIN_COUNTRY_AO = 'AO';
    public const ORIGIN_COUNTRY_AI = 'AI';
    public const ORIGIN_COUNTRY_AQ = 'AQ';
    public const ORIGIN_COUNTRY_AG = 'AG';
    public const ORIGIN_COUNTRY_AR = 'AR';
    public const ORIGIN_COUNTRY_AM = 'AM';
    public const ORIGIN_COUNTRY_AW = 'AW';
    public const ORIGIN_COUNTRY_AU = 'AU';
    public const ORIGIN_COUNTRY_AT = 'AT';
    public const ORIGIN_COUNTRY_AZ = 'AZ';
    public const ORIGIN_COUNTRY_BS = 'BS';
    public const ORIGIN_COUNTRY_BH = 'BH';
    public const ORIGIN_COUNTRY_BD = 'BD';
    public const ORIGIN_COUNTRY_BB = 'BB';
    public const ORIGIN_COUNTRY_AG2 = 'AG';
    public const ORIGIN_COUNTRY_BY = 'BY';
    public const ORIGIN_COUNTRY_BE = 'BE';
    public const ORIGIN_COUNTRY_BZ = 'BZ';
    public const ORIGIN_COUNTRY_BJ = 'BJ';
    public const ORIGIN_COUNTRY_BM = 'BM';
    public const ORIGIN_COUNTRY_BT = 'BT';
    public const ORIGIN_COUNTRY_BO = 'BO';
    public const ORIGIN_COUNTRY_BQ = 'BQ';
    public const ORIGIN_COUNTRY_BQ2 = 'BQ';
    public const ORIGIN_COUNTRY_BA = 'BA';
    public const ORIGIN_COUNTRY_BW = 'BW';
    public const ORIGIN_COUNTRY_BV = 'BV';
    public const ORIGIN_COUNTRY_BR = 'BR';
    public const ORIGIN_COUNTRY_IO = 'IO';
    public const ORIGIN_COUNTRY_BN = 'BN';
    public const ORIGIN_COUNTRY_BG = 'BG';
    public const ORIGIN_COUNTRY_BF = 'BF';
    public const ORIGIN_COUNTRY_BI = 'BI';
    public const ORIGIN_COUNTRY_CV = 'CV';
    public const ORIGIN_COUNTRY_KH = 'KH';
    public const ORIGIN_COUNTRY_CM = 'CM';
    public const ORIGIN_COUNTRY_CA = 'CA';
    public const ORIGIN_COUNTRY_KY = 'KY';
    public const ORIGIN_COUNTRY_CF = 'CF';
    public const ORIGIN_COUNTRY_TD = 'TD';
    public const ORIGIN_COUNTRY_CL = 'CL';
    public const ORIGIN_COUNTRY_CN = 'CN';
    public const ORIGIN_COUNTRY_CX = 'CX';
    public const ORIGIN_COUNTRY_FM = 'FM';
    public const ORIGIN_COUNTRY_CC = 'CC';
    public const ORIGIN_COUNTRY_CO = 'CO';
    public const ORIGIN_COUNTRY_KM = 'KM';
    public const ORIGIN_COUNTRY_CG = 'CG';
    public const ORIGIN_COUNTRY_CD = 'CD';
    public const ORIGIN_COUNTRY_CK = 'CK';
    public const ORIGIN_COUNTRY_CR = 'CR';
    public const ORIGIN_COUNTRY_CI = 'CI';
    public const ORIGIN_COUNTRY_HR = 'HR';
    public const ORIGIN_COUNTRY_CU = 'CU';
    public const ORIGIN_COUNTRY_CW = 'CW';
    public const ORIGIN_COUNTRY_CY = 'CY';
    public const ORIGIN_COUNTRY_CZ = 'CZ';
    public const ORIGIN_COUNTRY_DK = 'DK';
    public const ORIGIN_COUNTRY_DJ = 'DJ';
    public const ORIGIN_COUNTRY_DM = 'DM';
    public const ORIGIN_COUNTRY__DO = 'DO';
    public const ORIGIN_COUNTRY_EC = 'EC';
    public const ORIGIN_COUNTRY_EG = 'EG';
    public const ORIGIN_COUNTRY_SV = 'SV';
    public const ORIGIN_COUNTRY_GB = 'GB';
    public const ORIGIN_COUNTRY_GQ = 'GQ';
    public const ORIGIN_COUNTRY_ER = 'ER';
    public const ORIGIN_COUNTRY_EE = 'EE';
    public const ORIGIN_COUNTRY_ET = 'ET';
    public const ORIGIN_COUNTRY_FK = 'FK';
    public const ORIGIN_COUNTRY_FO = 'FO';
    public const ORIGIN_COUNTRY_FJ = 'FJ';
    public const ORIGIN_COUNTRY_FI = 'FI';
    public const ORIGIN_COUNTRY_FR = 'FR';
    public const ORIGIN_COUNTRY_GF = 'GF';
    public const ORIGIN_COUNTRY_PF = 'PF';
    public const ORIGIN_COUNTRY_TF = 'TF';
    public const ORIGIN_COUNTRY_GA = 'GA';
    public const ORIGIN_COUNTRY_GM = 'GM';
    public const ORIGIN_COUNTRY_GE = 'GE';
    public const ORIGIN_COUNTRY_DE = 'DE';
    public const ORIGIN_COUNTRY_GH = 'GH';
    public const ORIGIN_COUNTRY_GI = 'GI';
    public const ORIGIN_COUNTRY_GR = 'GR';
    public const ORIGIN_COUNTRY_GL = 'GL';
    public const ORIGIN_COUNTRY_GD = 'GD';
    public const ORIGIN_COUNTRY_GP = 'GP';
    public const ORIGIN_COUNTRY_GU = 'GU';
    public const ORIGIN_COUNTRY_GT = 'GT';
    public const ORIGIN_COUNTRY_GN = 'GN';
    public const ORIGIN_COUNTRY_GW = 'GW';
    public const ORIGIN_COUNTRY_GY = 'GY';
    public const ORIGIN_COUNTRY_HT = 'HT';
    public const ORIGIN_COUNTRY_HM = 'HM';
    public const ORIGIN_COUNTRY_HN = 'HN';
    public const ORIGIN_COUNTRY_HK = 'HK';
    public const ORIGIN_COUNTRY_HU = 'HU';
    public const ORIGIN_COUNTRY_IS = 'IS';
    public const ORIGIN_COUNTRY_IN = 'IN';
    public const ORIGIN_COUNTRY_ID = 'ID';
    public const ORIGIN_COUNTRY_IR = 'IR';
    public const ORIGIN_COUNTRY_IQ = 'IQ';
    public const ORIGIN_COUNTRY_IE = 'IE';
    public const ORIGIN_COUNTRY_IM = 'IM';
    public const ORIGIN_COUNTRY_IL = 'IL';
    public const ORIGIN_COUNTRY_IT = 'IT';
    public const ORIGIN_COUNTRY_JM = 'JM';
    public const ORIGIN_COUNTRY_JP = 'JP';
    public const ORIGIN_COUNTRY_JO = 'JO';
    public const ORIGIN_COUNTRY_KZ = 'KZ';
    public const ORIGIN_COUNTRY_KE = 'KE';
    public const ORIGIN_COUNTRY_KI = 'KI';
    public const ORIGIN_COUNTRY_KP = 'KP';
    public const ORIGIN_COUNTRY_KR = 'KR';
    public const ORIGIN_COUNTRY_RS = 'RS';
    public const ORIGIN_COUNTRY_FM2 = 'FM';
    public const ORIGIN_COUNTRY_KW = 'KW';
    public const ORIGIN_COUNTRY_KG = 'KG';
    public const ORIGIN_COUNTRY_LA = 'LA';
    public const ORIGIN_COUNTRY_LV = 'LV';
    public const ORIGIN_COUNTRY_LB = 'LB';
    public const ORIGIN_COUNTRY_LS = 'LS';
    public const ORIGIN_COUNTRY_LR = 'LR';
    public const ORIGIN_COUNTRY_LY = 'LY';
    public const ORIGIN_COUNTRY_LI = 'LI';
    public const ORIGIN_COUNTRY_LT = 'LT';
    public const ORIGIN_COUNTRY_LU = 'LU';
    public const ORIGIN_COUNTRY_MO = 'MO';
    public const ORIGIN_COUNTRY_MG = 'MG';
    public const ORIGIN_COUNTRY_MW = 'MW';
    public const ORIGIN_COUNTRY_MY = 'MY';
    public const ORIGIN_COUNTRY_MV = 'MV';
    public const ORIGIN_COUNTRY_ML = 'ML';
    public const ORIGIN_COUNTRY_MT = 'MT';
    public const ORIGIN_COUNTRY_MH = 'MH';
    public const ORIGIN_COUNTRY_MQ = 'MQ';
    public const ORIGIN_COUNTRY_MR = 'MR';
    public const ORIGIN_COUNTRY_MU = 'MU';
    public const ORIGIN_COUNTRY_YT = 'YT';
    public const ORIGIN_COUNTRY_MX = 'MX';
    public const ORIGIN_COUNTRY_FM3 = 'FM';
    public const ORIGIN_COUNTRY_MD = 'MD';
    public const ORIGIN_COUNTRY_MC = 'MC';
    public const ORIGIN_COUNTRY_MN = 'MN';
    public const ORIGIN_COUNTRY_ME = 'ME';
    public const ORIGIN_COUNTRY_MS = 'MS';
    public const ORIGIN_COUNTRY_MA = 'MA';
    public const ORIGIN_COUNTRY_MZ = 'MZ';
    public const ORIGIN_COUNTRY_MM = 'MM';
    public const ORIGIN_COUNTRY_NA = 'NA';
    public const ORIGIN_COUNTRY_NR = 'NR';
    public const ORIGIN_COUNTRY_NP = 'NP';
    public const ORIGIN_COUNTRY_NL = 'NL';
    public const ORIGIN_COUNTRY_KN = 'KN';
    public const ORIGIN_COUNTRY_NC = 'NC';
    public const ORIGIN_COUNTRY_NZ = 'NZ';
    public const ORIGIN_COUNTRY_NI = 'NI';
    public const ORIGIN_COUNTRY_NE = 'NE';
    public const ORIGIN_COUNTRY_NG = 'NG';
    public const ORIGIN_COUNTRY_NU = 'NU';
    public const ORIGIN_COUNTRY_MK = 'MK';
    public const ORIGIN_COUNTRY_NF = 'NF';
    public const ORIGIN_COUNTRY_MP = 'MP';
    public const ORIGIN_COUNTRY_NO = 'NO';
    public const ORIGIN_COUNTRY_OM = 'OM';
    public const ORIGIN_COUNTRY_PK = 'PK';
    public const ORIGIN_COUNTRY_PW = 'PW';
    public const ORIGIN_COUNTRY_PS = 'PS';
    public const ORIGIN_COUNTRY_PA = 'PA';
    public const ORIGIN_COUNTRY_PG = 'PG';
    public const ORIGIN_COUNTRY_PY = 'PY';
    public const ORIGIN_COUNTRY_PE = 'PE';
    public const ORIGIN_COUNTRY_PH = 'PH';
    public const ORIGIN_COUNTRY_PN = 'PN';
    public const ORIGIN_COUNTRY_FM4 = 'FM';
    public const ORIGIN_COUNTRY_PL = 'PL';
    public const ORIGIN_COUNTRY_PT = 'PT';
    public const ORIGIN_COUNTRY_PR = 'PR';
    public const ORIGIN_COUNTRY_QA = 'QA';
    public const ORIGIN_COUNTRY_RE = 'RE';
    public const ORIGIN_COUNTRY_RO = 'RO';
    public const ORIGIN_COUNTRY_RU = 'RU';
    public const ORIGIN_COUNTRY_RW = 'RW';
    public const ORIGIN_COUNTRY_BQ3 = 'BQ';
    public const ORIGIN_COUNTRY_BL = 'BL';
    public const ORIGIN_COUNTRY_BQ4 = 'BQ';
    public const ORIGIN_COUNTRY_SH = 'SH';
    public const ORIGIN_COUNTRY_KN2 = 'KN';
    public const ORIGIN_COUNTRY_KN3 = 'KN';
    public const ORIGIN_COUNTRY_LC = 'LC';
    public const ORIGIN_COUNTRY_SX = 'SX';
    public const ORIGIN_COUNTRY_MF = 'MF';
    public const ORIGIN_COUNTRY_PM = 'PM';
    public const ORIGIN_COUNTRY_VC = 'VC';
    public const ORIGIN_COUNTRY_WS = 'WS';
    public const ORIGIN_COUNTRY_SM = 'SM';
    public const ORIGIN_COUNTRY_ST = 'ST';
    public const ORIGIN_COUNTRY_SA = 'SA';
    public const ORIGIN_COUNTRY_GB2 = 'GB';
    public const ORIGIN_COUNTRY_SN = 'SN';
    public const ORIGIN_COUNTRY_RS2 = 'RS';
    public const ORIGIN_COUNTRY_SC = 'SC';
    public const ORIGIN_COUNTRY_SL = 'SL';
    public const ORIGIN_COUNTRY_SG = 'SG';
    public const ORIGIN_COUNTRY_SK = 'SK';
    public const ORIGIN_COUNTRY_SI = 'SI';
    public const ORIGIN_COUNTRY_SB = 'SB';
    public const ORIGIN_COUNTRY_SO = 'SO';
    public const ORIGIN_COUNTRY_ZA = 'ZA';
    public const ORIGIN_COUNTRY_GS = 'GS';
    public const ORIGIN_COUNTRY_SS = 'SS';
    public const ORIGIN_COUNTRY_ES = 'ES';
    public const ORIGIN_COUNTRY_LK = 'LK';
    public const ORIGIN_COUNTRY_SD = 'SD';
    public const ORIGIN_COUNTRY_SR = 'SR';
    public const ORIGIN_COUNTRY_SJ = 'SJ';
    public const ORIGIN_COUNTRY_SZ = 'SZ';
    public const ORIGIN_COUNTRY_SE = 'SE';
    public const ORIGIN_COUNTRY_CH = 'CH';
    public const ORIGIN_COUNTRY_SY = 'SY';
    public const ORIGIN_COUNTRY_TW = 'TW';
    public const ORIGIN_COUNTRY_TJ = 'TJ';
    public const ORIGIN_COUNTRY_TZ = 'TZ';
    public const ORIGIN_COUNTRY_TH = 'TH';
    public const ORIGIN_COUNTRY_TL = 'TL';
    public const ORIGIN_COUNTRY_TG = 'TG';
    public const ORIGIN_COUNTRY_TK = 'TK';
    public const ORIGIN_COUNTRY_TO = 'TO';
    public const ORIGIN_COUNTRY_TT = 'TT';
    public const ORIGIN_COUNTRY_TN = 'TN';
    public const ORIGIN_COUNTRY_TR = 'TR';
    public const ORIGIN_COUNTRY_TM = 'TM';
    public const ORIGIN_COUNTRY_TC = 'TC';
    public const ORIGIN_COUNTRY_TV = 'TV';
    public const ORIGIN_COUNTRY_UG = 'UG';
    public const ORIGIN_COUNTRY_UA = 'UA';
    public const ORIGIN_COUNTRY_AE = 'AE';
    public const ORIGIN_COUNTRY_US = 'US';
    public const ORIGIN_COUNTRY_UM = 'UM';
    public const ORIGIN_COUNTRY_UY = 'UY';
    public const ORIGIN_COUNTRY_UZ = 'UZ';
    public const ORIGIN_COUNTRY_VU = 'VU';
    public const ORIGIN_COUNTRY_VA = 'VA';
    public const ORIGIN_COUNTRY_VE = 'VE';
    public const ORIGIN_COUNTRY_VN = 'VN';
    public const ORIGIN_COUNTRY_VG = 'VG';
    public const ORIGIN_COUNTRY_VI = 'VI';
    public const ORIGIN_COUNTRY_GB3 = 'GB';
    public const ORIGIN_COUNTRY_WF = 'WF';
    public const ORIGIN_COUNTRY_EH = 'EH';
    public const ORIGIN_COUNTRY_FM5 = 'FM';
    public const ORIGIN_COUNTRY_YE = 'YE';
    public const ORIGIN_COUNTRY_ZM = 'ZM';
    public const ORIGIN_COUNTRY_ZW = 'ZW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginCountryAllowableValues()
    {
        return [
            self::ORIGIN_COUNTRY_AF,
            self::ORIGIN_COUNTRY_AX,
            self::ORIGIN_COUNTRY_AL,
            self::ORIGIN_COUNTRY_DZ,
            self::ORIGIN_COUNTRY__AS,
            self::ORIGIN_COUNTRY_AD,
            self::ORIGIN_COUNTRY_AO,
            self::ORIGIN_COUNTRY_AI,
            self::ORIGIN_COUNTRY_AQ,
            self::ORIGIN_COUNTRY_AG,
            self::ORIGIN_COUNTRY_AR,
            self::ORIGIN_COUNTRY_AM,
            self::ORIGIN_COUNTRY_AW,
            self::ORIGIN_COUNTRY_AU,
            self::ORIGIN_COUNTRY_AT,
            self::ORIGIN_COUNTRY_AZ,
            self::ORIGIN_COUNTRY_BS,
            self::ORIGIN_COUNTRY_BH,
            self::ORIGIN_COUNTRY_BD,
            self::ORIGIN_COUNTRY_BB,
            self::ORIGIN_COUNTRY_AG2,
            self::ORIGIN_COUNTRY_BY,
            self::ORIGIN_COUNTRY_BE,
            self::ORIGIN_COUNTRY_BZ,
            self::ORIGIN_COUNTRY_BJ,
            self::ORIGIN_COUNTRY_BM,
            self::ORIGIN_COUNTRY_BT,
            self::ORIGIN_COUNTRY_BO,
            self::ORIGIN_COUNTRY_BQ,
            self::ORIGIN_COUNTRY_BQ2,
            self::ORIGIN_COUNTRY_BA,
            self::ORIGIN_COUNTRY_BW,
            self::ORIGIN_COUNTRY_BV,
            self::ORIGIN_COUNTRY_BR,
            self::ORIGIN_COUNTRY_IO,
            self::ORIGIN_COUNTRY_BN,
            self::ORIGIN_COUNTRY_BG,
            self::ORIGIN_COUNTRY_BF,
            self::ORIGIN_COUNTRY_BI,
            self::ORIGIN_COUNTRY_CV,
            self::ORIGIN_COUNTRY_KH,
            self::ORIGIN_COUNTRY_CM,
            self::ORIGIN_COUNTRY_CA,
            self::ORIGIN_COUNTRY_KY,
            self::ORIGIN_COUNTRY_CF,
            self::ORIGIN_COUNTRY_TD,
            self::ORIGIN_COUNTRY_CL,
            self::ORIGIN_COUNTRY_CN,
            self::ORIGIN_COUNTRY_CX,
            self::ORIGIN_COUNTRY_FM,
            self::ORIGIN_COUNTRY_CC,
            self::ORIGIN_COUNTRY_CO,
            self::ORIGIN_COUNTRY_KM,
            self::ORIGIN_COUNTRY_CG,
            self::ORIGIN_COUNTRY_CD,
            self::ORIGIN_COUNTRY_CK,
            self::ORIGIN_COUNTRY_CR,
            self::ORIGIN_COUNTRY_CI,
            self::ORIGIN_COUNTRY_HR,
            self::ORIGIN_COUNTRY_CU,
            self::ORIGIN_COUNTRY_CW,
            self::ORIGIN_COUNTRY_CY,
            self::ORIGIN_COUNTRY_CZ,
            self::ORIGIN_COUNTRY_DK,
            self::ORIGIN_COUNTRY_DJ,
            self::ORIGIN_COUNTRY_DM,
            self::ORIGIN_COUNTRY__DO,
            self::ORIGIN_COUNTRY_EC,
            self::ORIGIN_COUNTRY_EG,
            self::ORIGIN_COUNTRY_SV,
            self::ORIGIN_COUNTRY_GB,
            self::ORIGIN_COUNTRY_GQ,
            self::ORIGIN_COUNTRY_ER,
            self::ORIGIN_COUNTRY_EE,
            self::ORIGIN_COUNTRY_ET,
            self::ORIGIN_COUNTRY_FK,
            self::ORIGIN_COUNTRY_FO,
            self::ORIGIN_COUNTRY_FJ,
            self::ORIGIN_COUNTRY_FI,
            self::ORIGIN_COUNTRY_FR,
            self::ORIGIN_COUNTRY_GF,
            self::ORIGIN_COUNTRY_PF,
            self::ORIGIN_COUNTRY_TF,
            self::ORIGIN_COUNTRY_GA,
            self::ORIGIN_COUNTRY_GM,
            self::ORIGIN_COUNTRY_GE,
            self::ORIGIN_COUNTRY_DE,
            self::ORIGIN_COUNTRY_GH,
            self::ORIGIN_COUNTRY_GI,
            self::ORIGIN_COUNTRY_GR,
            self::ORIGIN_COUNTRY_GL,
            self::ORIGIN_COUNTRY_GD,
            self::ORIGIN_COUNTRY_GP,
            self::ORIGIN_COUNTRY_GU,
            self::ORIGIN_COUNTRY_GT,
            self::ORIGIN_COUNTRY_GN,
            self::ORIGIN_COUNTRY_GW,
            self::ORIGIN_COUNTRY_GY,
            self::ORIGIN_COUNTRY_HT,
            self::ORIGIN_COUNTRY_HM,
            self::ORIGIN_COUNTRY_HN,
            self::ORIGIN_COUNTRY_HK,
            self::ORIGIN_COUNTRY_HU,
            self::ORIGIN_COUNTRY_IS,
            self::ORIGIN_COUNTRY_IN,
            self::ORIGIN_COUNTRY_ID,
            self::ORIGIN_COUNTRY_IR,
            self::ORIGIN_COUNTRY_IQ,
            self::ORIGIN_COUNTRY_IE,
            self::ORIGIN_COUNTRY_IM,
            self::ORIGIN_COUNTRY_IL,
            self::ORIGIN_COUNTRY_IT,
            self::ORIGIN_COUNTRY_JM,
            self::ORIGIN_COUNTRY_JP,
            self::ORIGIN_COUNTRY_JO,
            self::ORIGIN_COUNTRY_KZ,
            self::ORIGIN_COUNTRY_KE,
            self::ORIGIN_COUNTRY_KI,
            self::ORIGIN_COUNTRY_KP,
            self::ORIGIN_COUNTRY_KR,
            self::ORIGIN_COUNTRY_RS,
            self::ORIGIN_COUNTRY_FM2,
            self::ORIGIN_COUNTRY_KW,
            self::ORIGIN_COUNTRY_KG,
            self::ORIGIN_COUNTRY_LA,
            self::ORIGIN_COUNTRY_LV,
            self::ORIGIN_COUNTRY_LB,
            self::ORIGIN_COUNTRY_LS,
            self::ORIGIN_COUNTRY_LR,
            self::ORIGIN_COUNTRY_LY,
            self::ORIGIN_COUNTRY_LI,
            self::ORIGIN_COUNTRY_LT,
            self::ORIGIN_COUNTRY_LU,
            self::ORIGIN_COUNTRY_MO,
            self::ORIGIN_COUNTRY_MG,
            self::ORIGIN_COUNTRY_MW,
            self::ORIGIN_COUNTRY_MY,
            self::ORIGIN_COUNTRY_MV,
            self::ORIGIN_COUNTRY_ML,
            self::ORIGIN_COUNTRY_MT,
            self::ORIGIN_COUNTRY_MH,
            self::ORIGIN_COUNTRY_MQ,
            self::ORIGIN_COUNTRY_MR,
            self::ORIGIN_COUNTRY_MU,
            self::ORIGIN_COUNTRY_YT,
            self::ORIGIN_COUNTRY_MX,
            self::ORIGIN_COUNTRY_FM3,
            self::ORIGIN_COUNTRY_MD,
            self::ORIGIN_COUNTRY_MC,
            self::ORIGIN_COUNTRY_MN,
            self::ORIGIN_COUNTRY_ME,
            self::ORIGIN_COUNTRY_MS,
            self::ORIGIN_COUNTRY_MA,
            self::ORIGIN_COUNTRY_MZ,
            self::ORIGIN_COUNTRY_MM,
            self::ORIGIN_COUNTRY_NA,
            self::ORIGIN_COUNTRY_NR,
            self::ORIGIN_COUNTRY_NP,
            self::ORIGIN_COUNTRY_NL,
            self::ORIGIN_COUNTRY_KN,
            self::ORIGIN_COUNTRY_NC,
            self::ORIGIN_COUNTRY_NZ,
            self::ORIGIN_COUNTRY_NI,
            self::ORIGIN_COUNTRY_NE,
            self::ORIGIN_COUNTRY_NG,
            self::ORIGIN_COUNTRY_NU,
            self::ORIGIN_COUNTRY_MK,
            self::ORIGIN_COUNTRY_NF,
            self::ORIGIN_COUNTRY_MP,
            self::ORIGIN_COUNTRY_NO,
            self::ORIGIN_COUNTRY_OM,
            self::ORIGIN_COUNTRY_PK,
            self::ORIGIN_COUNTRY_PW,
            self::ORIGIN_COUNTRY_PS,
            self::ORIGIN_COUNTRY_PA,
            self::ORIGIN_COUNTRY_PG,
            self::ORIGIN_COUNTRY_PY,
            self::ORIGIN_COUNTRY_PE,
            self::ORIGIN_COUNTRY_PH,
            self::ORIGIN_COUNTRY_PN,
            self::ORIGIN_COUNTRY_FM4,
            self::ORIGIN_COUNTRY_PL,
            self::ORIGIN_COUNTRY_PT,
            self::ORIGIN_COUNTRY_PR,
            self::ORIGIN_COUNTRY_QA,
            self::ORIGIN_COUNTRY_RE,
            self::ORIGIN_COUNTRY_RO,
            self::ORIGIN_COUNTRY_RU,
            self::ORIGIN_COUNTRY_RW,
            self::ORIGIN_COUNTRY_BQ3,
            self::ORIGIN_COUNTRY_BL,
            self::ORIGIN_COUNTRY_BQ4,
            self::ORIGIN_COUNTRY_SH,
            self::ORIGIN_COUNTRY_KN2,
            self::ORIGIN_COUNTRY_KN3,
            self::ORIGIN_COUNTRY_LC,
            self::ORIGIN_COUNTRY_SX,
            self::ORIGIN_COUNTRY_MF,
            self::ORIGIN_COUNTRY_PM,
            self::ORIGIN_COUNTRY_VC,
            self::ORIGIN_COUNTRY_WS,
            self::ORIGIN_COUNTRY_SM,
            self::ORIGIN_COUNTRY_ST,
            self::ORIGIN_COUNTRY_SA,
            self::ORIGIN_COUNTRY_GB2,
            self::ORIGIN_COUNTRY_SN,
            self::ORIGIN_COUNTRY_RS2,
            self::ORIGIN_COUNTRY_SC,
            self::ORIGIN_COUNTRY_SL,
            self::ORIGIN_COUNTRY_SG,
            self::ORIGIN_COUNTRY_SK,
            self::ORIGIN_COUNTRY_SI,
            self::ORIGIN_COUNTRY_SB,
            self::ORIGIN_COUNTRY_SO,
            self::ORIGIN_COUNTRY_ZA,
            self::ORIGIN_COUNTRY_GS,
            self::ORIGIN_COUNTRY_SS,
            self::ORIGIN_COUNTRY_ES,
            self::ORIGIN_COUNTRY_LK,
            self::ORIGIN_COUNTRY_SD,
            self::ORIGIN_COUNTRY_SR,
            self::ORIGIN_COUNTRY_SJ,
            self::ORIGIN_COUNTRY_SZ,
            self::ORIGIN_COUNTRY_SE,
            self::ORIGIN_COUNTRY_CH,
            self::ORIGIN_COUNTRY_SY,
            self::ORIGIN_COUNTRY_TW,
            self::ORIGIN_COUNTRY_TJ,
            self::ORIGIN_COUNTRY_TZ,
            self::ORIGIN_COUNTRY_TH,
            self::ORIGIN_COUNTRY_TL,
            self::ORIGIN_COUNTRY_TG,
            self::ORIGIN_COUNTRY_TK,
            self::ORIGIN_COUNTRY_TO,
            self::ORIGIN_COUNTRY_TT,
            self::ORIGIN_COUNTRY_TN,
            self::ORIGIN_COUNTRY_TR,
            self::ORIGIN_COUNTRY_TM,
            self::ORIGIN_COUNTRY_TC,
            self::ORIGIN_COUNTRY_TV,
            self::ORIGIN_COUNTRY_UG,
            self::ORIGIN_COUNTRY_UA,
            self::ORIGIN_COUNTRY_AE,
            self::ORIGIN_COUNTRY_US,
            self::ORIGIN_COUNTRY_UM,
            self::ORIGIN_COUNTRY_UY,
            self::ORIGIN_COUNTRY_UZ,
            self::ORIGIN_COUNTRY_VU,
            self::ORIGIN_COUNTRY_VA,
            self::ORIGIN_COUNTRY_VE,
            self::ORIGIN_COUNTRY_VN,
            self::ORIGIN_COUNTRY_VG,
            self::ORIGIN_COUNTRY_VI,
            self::ORIGIN_COUNTRY_GB3,
            self::ORIGIN_COUNTRY_WF,
            self::ORIGIN_COUNTRY_EH,
            self::ORIGIN_COUNTRY_FM5,
            self::ORIGIN_COUNTRY_YE,
            self::ORIGIN_COUNTRY_ZM,
            self::ORIGIN_COUNTRY_ZW,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array|null $data = null)
    {
        $this->setIfExists('goods_description', $data ?? [], null);
        $this->setIfExists('goods_amount', $data ?? [], null);
        $this->setIfExists('unit_weight', $data ?? [], null);
        $this->setIfExists('unit_value', $data ?? [], null);
        $this->setIfExists('hs_code', $data ?? [], null);
        $this->setIfExists('origin_country', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['goods_description'] === null) {
            $invalidProperties[] = "'goods_description' can't be null";
        }
        if ((mb_strlen($this->container['goods_description']) > 40)) {
            $invalidProperties[] = "invalid value for 'goods_description', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['goods_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'goods_description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['goods_amount'] === null) {
            $invalidProperties[] = "'goods_amount' can't be null";
        }
        if ($this->container['unit_weight'] === null) {
            $invalidProperties[] = "'unit_weight' can't be null";
        }
        if ($this->container['unit_value'] === null) {
            $invalidProperties[] = "'unit_value' can't be null";
        }
        if ($this->container['hs_code'] === null) {
            $invalidProperties[] = "'hs_code' can't be null";
        }
        if ((mb_strlen($this->container['hs_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'hs_code', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['hs_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'hs_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['origin_country'] === null) {
            $invalidProperties[] = "'origin_country' can't be null";
        }
        $allowedValues = $this->getOriginCountryAllowableValues();
        if (!is_null($this->container['origin_country']) && !in_array($this->container['origin_country'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'origin_country', must be one of '%s'",
                $this->container['origin_country'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['origin_country']) > 2)) {
            $invalidProperties[] = "invalid value for 'origin_country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['origin_country']) < 2)) {
            $invalidProperties[] = "invalid value for 'origin_country', the character length must be bigger than or equal to 2.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets goods_description
     *
     * @return string
     */
    public function getGoodsDescription(): string
    {
        return $this->container['goods_description'];
    }

    /**
     * Sets goods_description
     *
     * @param string $goods_description goods_description
     *
     * @return $this
     */
    public function setGoodsDescription(string $goods_description): static
    {
        if (is_null($goods_description)) {
            throw new InvalidArgumentException('non-nullable goods_description cannot be null');
        }
        if ((mb_strlen($goods_description) > 40)) {
            throw new InvalidArgumentException('invalid length for $goods_description when calling TNTItem., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($goods_description) < 1)) {
            throw new InvalidArgumentException('invalid length for $goods_description when calling TNTItem., must be bigger than or equal to 1.');
        }

        $this->container['goods_description'] = $goods_description;

        return $this;
    }

    /**
     * Gets goods_amount
     *
     * @return int
     */
    public function getGoodsAmount(): int
    {
        return $this->container['goods_amount'];
    }

    /**
     * Sets goods_amount
     *
     * @param int $goods_amount goods_amount
     *
     * @return $this
     */
    public function setGoodsAmount(int $goods_amount): static
    {
        if (is_null($goods_amount)) {
            throw new InvalidArgumentException('non-nullable goods_amount cannot be null');
        }
        $this->container['goods_amount'] = $goods_amount;

        return $this;
    }

    /**
     * Gets unit_weight
     *
     * @return float
     */
    public function getUnitWeight(): float
    {
        return $this->container['unit_weight'];
    }

    /**
     * Sets unit_weight
     *
     * @param float $unit_weight unit_weight
     *
     * @return $this
     */
    public function setUnitWeight(float $unit_weight): static
    {
        if (is_null($unit_weight)) {
            throw new InvalidArgumentException('non-nullable unit_weight cannot be null');
        }
        $this->container['unit_weight'] = $unit_weight;

        return $this;
    }

    /**
     * Gets unit_value
     *
     * @return float
     */
    public function getUnitValue(): float
    {
        return $this->container['unit_value'];
    }

    /**
     * Sets unit_value
     *
     * @param float $unit_value unit_value
     *
     * @return $this
     */
    public function setUnitValue(float $unit_value): static
    {
        if (is_null($unit_value)) {
            throw new InvalidArgumentException('non-nullable unit_value cannot be null');
        }
        $this->container['unit_value'] = $unit_value;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode(): string
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code hs_code
     *
     * @return $this
     */
    public function setHsCode(string $hs_code): static
    {
        if (is_null($hs_code)) {
            throw new InvalidArgumentException('non-nullable hs_code cannot be null');
        }
        if ((mb_strlen($hs_code) > 10)) {
            throw new InvalidArgumentException('invalid length for $hs_code when calling TNTItem., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($hs_code) < 1)) {
            throw new InvalidArgumentException('invalid length for $hs_code when calling TNTItem., must be bigger than or equal to 1.');
        }

        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets origin_country
     *
     * @return string
     */
    public function getOriginCountry(): string
    {
        return $this->container['origin_country'];
    }

    /**
     * Sets origin_country
     *
     * @param string $origin_country origin_country
     *
     * @return $this
     */
    public function setOriginCountry(string $origin_country): static
    {
        if (is_null($origin_country)) {
            throw new InvalidArgumentException('non-nullable origin_country cannot be null');
        }
        $allowedValues = $this->getOriginCountryAllowableValues();
        if (!in_array($origin_country, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'origin_country', must be one of '%s'",
                    $origin_country,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($origin_country) > 2)) {
            throw new InvalidArgumentException('invalid length for $origin_country when calling TNTItem., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($origin_country) < 2)) {
            throw new InvalidArgumentException('invalid length for $origin_country when calling TNTItem., must be bigger than or equal to 2.');
        }

        $this->container['origin_country'] = $origin_country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



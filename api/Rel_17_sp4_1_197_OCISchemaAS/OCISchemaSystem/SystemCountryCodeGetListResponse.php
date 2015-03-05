<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a SystemCountryCodeGetListRequest. Contains the default country code
 *         and a table with one row per country code.  The table columns are
 *         "Country Code", "Country Name", "Off Hook Warning Seconds",
 *         "Ring Period Milliseconds", "National Prefix", "Use Prefix",
 *         "Maximum Call Waiting Tones" and "Time Between Call Waiting Tones Milliseconds".
 */
class SystemCountryCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultCountryCode,
             $countryCodeTable
    ) {
        $this->defaultCountryCode = new CountryCode($defaultCountryCode);
        $this->countryCodeTable   = $countryCodeTable;
        $this->args               = func_get_args();
    }

    public function setDefaultCountryCode($defaultCountryCode)
    {
        $defaultCountryCode and $this->defaultCountryCode = new CountryCode($defaultCountryCode);
    }

    public function getDefaultCountryCode()
    {
        return (!$this->defaultCountryCode) ?: $this->defaultCountryCode->value();
    }

    public function setCountryCodeTable($countryCodeTable)
    {
        $countryCodeTable and $this->countryCodeTable = new core:OCITable($countryCodeTable);
    }

    public function getCountryCodeTable()
    {
        return (!$this->countryCodeTable) ?: $this->countryCodeTable->value();
    }
}

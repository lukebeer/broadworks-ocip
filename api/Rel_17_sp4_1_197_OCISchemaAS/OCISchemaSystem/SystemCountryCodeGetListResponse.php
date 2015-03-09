<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCountryCodeGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemCountryCodeGetListRequest. Contains the default country code
 *         and a table with one row per country code.  The table columns are
 *         "Country Code", "Country Name", "Off Hook Warning Seconds",
 *         "Ring Period Milliseconds", "National Prefix", "Use Prefix",
 *         "Maximum Call Waiting Tones" and "Time Between Call Waiting Tones Milliseconds".
 */
class SystemCountryCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $defaultCountryCode = null;
    protected $countryCodeTable   = null;

    /**
     * @return SystemCountryCodeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Country dialing code.
     */
    public function setDefaultCountryCode($defaultCountryCode = null)
    {
        $this->defaultCountryCode = ($defaultCountryCode InstanceOf CountryCode)
             ? $defaultCountryCode
             : new CountryCode($defaultCountryCode);
    }

    /**
     * Country dialing code.
     */
    public function getDefaultCountryCode()
    {
        return (!$this->defaultCountryCode) ?: $this->defaultCountryCode->getValue();
    }

    /**
     * 
     */
    public function setCountryCodeTable(core:OCITable $countryCodeTable = null)
    {
        $this->countryCodeTable =  $countryCodeTable;
    }

    /**
     * 
     */
    public function getCountryCodeTable()
    {
        return (!$this->countryCodeTable) ?: $this->countryCodeTable->getValue();
    }
}

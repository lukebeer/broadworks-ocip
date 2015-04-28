<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a SystemCountryCodeGetListRequest. Contains the default country code
 *         and a table with one row per country code.  The table columns are
 *         "Country Code", "Country Name", "Off Hook Warning Seconds",
 *         "Ring Period Milliseconds", "National Prefix", "Use Prefix",
 *         "Maximum Call Waiting Tones" and "Time Between Call Waiting Tones Milliseconds".
 */
class SystemCountryCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCountryCodeGetListResponse';
    protected $defaultCountryCode;
    protected $countryCodeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCountryCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultCountryCode($defaultCountryCode = null)
    {
        $this->defaultCountryCode = ($defaultCountryCode InstanceOf CountryCode)
             ? $defaultCountryCode
             : new CountryCode($defaultCountryCode);
        $this->defaultCountryCode->setElementName('defaultCountryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $defaultCountryCode
     */
    public function getDefaultCountryCode()
    {
        return ($this->defaultCountryCode)
            ? $this->defaultCountryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountryCodeTable(TableType $countryCodeTable = null)
    {
        $this->countryCodeTable = $countryCodeTable;
        $this->countryCodeTable->setElementName('countryCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCountryCodeTable()
    {
        return $this->countryCodeTable;
    }
}

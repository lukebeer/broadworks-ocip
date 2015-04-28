<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTypeDigitMap;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a system call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallTypeDeleteMappingRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallTypeDeleteMappingRequest';
    protected $countryCode;
    protected $digitMap;

    public function __construct(
         $countryCode = '',
         $digitMap = ''
    ) {
        $this->setCountryCode($countryCode);
        $this->setDigitMap($digitMap);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigitMap($digitMap = null)
    {
        $this->digitMap = ($digitMap InstanceOf CallTypeDigitMap)
             ? $digitMap
             : new CallTypeDigitMap($digitMap);
        $this->digitMap->setElementName('digitMap');
        return $this;
    }

    /**
     * 
     * @return CallTypeDigitMap $digitMap
     */
    public function getDigitMap()
    {
        return ($this->digitMap)
            ? $this->digitMap->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTypeDigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a system call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallTypeDeleteMappingRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemCallTypeDeleteMappingRequest';
    protected $countryCode = null;
    protected $digitMap    = null;

    public function __construct(
         $countryCode,
         $digitMap
    ) {
        $this->setCountryCode($countryCode);
        $this->setDigitMap($digitMap);
    }

    /**
     * @return 
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
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setDigitMap($digitMap = null)
    {
        if (!$digitMap) return $this;
        $this->digitMap = ($digitMap InstanceOf CallTypeDigitMap)
             ? $digitMap
             : new CallTypeDigitMap($digitMap);
        $this->digitMap->setName('digitMap');
        return $this;
    }

    /**
     * 
     * @return CallTypeDigitMap
     */
    public function getDigitMap()
    {
        return $this->digitMap->getValue();
    }
}

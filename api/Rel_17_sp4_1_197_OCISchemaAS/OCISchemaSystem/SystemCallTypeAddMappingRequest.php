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
 * Add a system call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallTypeAddMappingRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallTypeAddMappingRequest';
    protected $countryCode;
    protected $digitMap;
    protected $callType;

    public function __construct(
         $countryCode = '',
         $digitMap = '',
         $callType = ''
    ) {
        $this->setCountryCode($countryCode);
        $this->setDigitMap($digitMap);
        $this->setCallType($callType);
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
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode) ? $this->countryCode->getValue() : null;
    }

    /**
     * 
     */
    public function setDigitMap($digitMap = null)
    {
        $this->digitMap = ($digitMap InstanceOf CallTypeDigitMap)
             ? $digitMap
             : new CallTypeDigitMap($digitMap);
        $this->digitMap->setName('digitMap');
        return $this;
    }

    /**
     * 
     * @return CallTypeDigitMap $digitMap
     */
    public function getDigitMap()
    {
        return ($this->digitMap) ? $this->digitMap->getValue() : null;
    }

    /**
     * 
     */
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf SystemCallType)
             ? $callType
             : new SystemCallType($callType);
        $this->callType->setName('callType');
        return $this;
    }

    /**
     * 
     * @return SystemCallType $callType
     */
    public function getCallType()
    {
        return ($this->callType) ? $this->callType->getValue() : null;
    }
}

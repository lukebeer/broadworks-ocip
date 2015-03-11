<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTypeDigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a system outgoing calling plan call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOutgoingCallingPlanCallTypeAddMappingRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemOutgoingCallingPlanCallTypeAddMappingRequest';
    protected $countryCode = null;
    protected $digitMap    = null;
    protected $callType    = null;

    public function __construct(
         $countryCode,
         $digitMap,
         $callType
    ) {
        $this->setCountryCode($countryCode);
        $this->setDigitMap($digitMap);
        $this->setCallType($callType);
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

    /**
     * 
     */
    public function setCallType($callType = null)
    {
        if (!$callType) return $this;
        $this->callType = ($callType InstanceOf OutgoingCallingPlanCallType)
             ? $callType
             : new OutgoingCallingPlanCallType($callType);
        $this->callType->setName('callType');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanCallType
     */
    public function getCallType()
    {
        return $this->callType->getValue();
    }
}

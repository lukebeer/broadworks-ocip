<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTypeDigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a system outgoing calling plan call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOutgoingCallingPlanCallTypeDeleteMappingRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
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
     * Country dialing code.
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    /**
     * Country dialing code.
     */
    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->getValue();
    }

    /**
     * Call Type Digit Map.
     */
    public function setDigitMap($digitMap = null)
    {
        $this->digitMap = ($digitMap InstanceOf CallTypeDigitMap)
             ? $digitMap
             : new CallTypeDigitMap($digitMap);
    }

    /**
     * Call Type Digit Map.
     */
    public function getDigitMap()
    {
        return (!$this->digitMap) ?: $this->digitMap->getValue();
    }
}

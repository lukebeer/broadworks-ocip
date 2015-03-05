<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupCallCenterAgentUnavailableCodeSettingsGetRequest.
 */
class GroupCallCenterAgentUnavailableCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableAgentUnavailableCodes,
             $defaultAgentUnavailableCodeOnDND=null,
             $defaultAgentUnavailableCodeOnPersonalCalls=null,
             $defaultAgentUnavailableCodeOnConsecutiveBounces=null,
             $forceUseOfAgentUnavailableCodes,
             $defaultAgentUnavailableCode=null
    ) {
        $this->enableAgentUnavailableCodes                     = $enableAgentUnavailableCodes;
        $this->defaultAgentUnavailableCodeOnDND                = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
        $this->defaultAgentUnavailableCodeOnPersonalCalls      = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->forceUseOfAgentUnavailableCodes                 = $forceUseOfAgentUnavailableCodes;
        $this->defaultAgentUnavailableCode                     = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->args                                            = func_get_args();
    }

    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes)
    {
        $enableAgentUnavailableCodes and $this->enableAgentUnavailableCodes = new xs:boolean($enableAgentUnavailableCodes);
    }

    public function getEnableAgentUnavailableCodes()
    {
        return (!$this->enableAgentUnavailableCodes) ?: $this->enableAgentUnavailableCodes->value();
    }

    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND)
    {
        $defaultAgentUnavailableCodeOnDND and $this->defaultAgentUnavailableCodeOnDND = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
    }

    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return (!$this->defaultAgentUnavailableCodeOnDND) ?: $this->defaultAgentUnavailableCodeOnDND->value();
    }

    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls)
    {
        $defaultAgentUnavailableCodeOnPersonalCalls and $this->defaultAgentUnavailableCodeOnPersonalCalls = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
    }

    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return (!$this->defaultAgentUnavailableCodeOnPersonalCalls) ?: $this->defaultAgentUnavailableCodeOnPersonalCalls->value();
    }

    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces)
    {
        $defaultAgentUnavailableCodeOnConsecutiveBounces and $this->defaultAgentUnavailableCodeOnConsecutiveBounces = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
    }

    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return (!$this->defaultAgentUnavailableCodeOnConsecutiveBounces) ?: $this->defaultAgentUnavailableCodeOnConsecutiveBounces->value();
    }

    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes)
    {
        $forceUseOfAgentUnavailableCodes and $this->forceUseOfAgentUnavailableCodes = new xs:boolean($forceUseOfAgentUnavailableCodes);
    }

    public function getForceUseOfAgentUnavailableCodes()
    {
        return (!$this->forceUseOfAgentUnavailableCodes) ?: $this->forceUseOfAgentUnavailableCodes->value();
    }

    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode)
    {
        $defaultAgentUnavailableCode and $this->defaultAgentUnavailableCode = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
    }

    public function getDefaultAgentUnavailableCode()
    {
        return (!$this->defaultAgentUnavailableCode) ?: $this->defaultAgentUnavailableCode->value();
    }
}

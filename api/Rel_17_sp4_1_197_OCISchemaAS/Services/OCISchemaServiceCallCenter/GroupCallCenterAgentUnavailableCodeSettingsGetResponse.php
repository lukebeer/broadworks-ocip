<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupCallCenterAgentUnavailableCodeSettingsGetRequest.
 */
class GroupCallCenterAgentUnavailableCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                             = __CLASS__;
    protected $enableAgentUnavailableCodes                      = null;
    protected $defaultAgentUnavailableCodeOnDND                 = null;
    protected $defaultAgentUnavailableCodeOnPersonalCalls       = null;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces  = null;
    protected $forceUseOfAgentUnavailableCodes                  = null;
    protected $defaultAgentUnavailableCode                      = null;


    public function setEnableAgentUnavailableCodes(xs:boolean $enableAgentUnavailableCodes = null)
    {
    }

    public function getEnableAgentUnavailableCodes()
    {
        return (!$this->enableAgentUnavailableCodes) ?: $this->enableAgentUnavailableCodes->value();
    }

    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
    }

    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return (!$this->defaultAgentUnavailableCodeOnDND) ?: $this->defaultAgentUnavailableCodeOnDND->value();
    }

    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
    }

    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return (!$this->defaultAgentUnavailableCodeOnPersonalCalls) ?: $this->defaultAgentUnavailableCodeOnPersonalCalls->value();
    }

    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
    }

    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return (!$this->defaultAgentUnavailableCodeOnConsecutiveBounces) ?: $this->defaultAgentUnavailableCodeOnConsecutiveBounces->value();
    }

    public function setForceUseOfAgentUnavailableCodes(xs:boolean $forceUseOfAgentUnavailableCodes = null)
    {
    }

    public function getForceUseOfAgentUnavailableCodes()
    {
        return (!$this->forceUseOfAgentUnavailableCodes) ?: $this->forceUseOfAgentUnavailableCodes->value();
    }

    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
    }

    public function getDefaultAgentUnavailableCode()
    {
        return (!$this->defaultAgentUnavailableCode) ?: $this->defaultAgentUnavailableCode->value();
    }
}

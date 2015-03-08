<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeStateModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the enterprise level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                            = __CLASS__;
    protected $serviceProviderId                               = null;
    protected $enableAgentUnavailableCodes                     = null;
    protected $defaultAgentUnavailableCodeOnDND                = null;
    protected $defaultAgentUnavailableCodeOnPersonalCalls      = null;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces = null;
    protected $forceUseOfAgentUnavailableCodes                 = null;
    protected $defaultAgentUnavailableCode                     = null;
    protected $codeStateList                                   = null;

    public function __construct(
         $serviceProviderId,
         $enableAgentUnavailableCodes = null,
         $defaultAgentUnavailableCodeOnDND = null,
         $defaultAgentUnavailableCodeOnPersonalCalls = null,
         $defaultAgentUnavailableCodeOnConsecutiveBounces = null,
         $forceUseOfAgentUnavailableCodes = null,
         $defaultAgentUnavailableCode = null,
         CallCenterAgentUnavailableCodeStateModify $codeStateList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEnableAgentUnavailableCodes($enableAgentUnavailableCodes);
        $this->setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND);
        $this->setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes);
        $this->setDefaultAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->setCodeStateList($codeStateList);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes = null)
    {
        $this->enableAgentUnavailableCodes = (boolean) $enableAgentUnavailableCodes;
    }

    /**
     * 
     */
    public function getEnableAgentUnavailableCodes()
    {
        return (!$this->enableAgentUnavailableCodes) ?: $this->enableAgentUnavailableCodes->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return (!$this->defaultAgentUnavailableCodeOnDND) ?: $this->defaultAgentUnavailableCodeOnDND->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return (!$this->defaultAgentUnavailableCodeOnPersonalCalls) ?: $this->defaultAgentUnavailableCodeOnPersonalCalls->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return (!$this->defaultAgentUnavailableCodeOnConsecutiveBounces) ?: $this->defaultAgentUnavailableCodeOnConsecutiveBounces->getValue();
    }

    /**
     * 
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes = null)
    {
        $this->forceUseOfAgentUnavailableCodes = (boolean) $forceUseOfAgentUnavailableCodes;
    }

    /**
     * 
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return (!$this->forceUseOfAgentUnavailableCodes) ?: $this->forceUseOfAgentUnavailableCodes->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCode()
    {
        return (!$this->defaultAgentUnavailableCode) ?: $this->defaultAgentUnavailableCode->getValue();
    }

    /**
     * Contains a Call Center Agent Unavailable Code and its active state
     */
    public function setCodeStateList(CallCenterAgentUnavailableCodeStateModify $codeStateList = null)
    {
        $this->codeStateList = CallCenterAgentUnavailableCodeStateModify $codeStateList;
    }

    /**
     * Contains a Call Center Agent Unavailable Code and its active state
     */
    public function getCodeStateList()
    {
        return (!$this->codeStateList) ?: $this->codeStateList->getValue();
    }
}

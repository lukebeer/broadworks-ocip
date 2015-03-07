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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterAgentUnavailableCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                             = __CLASS__;
    protected $serviceProviderId                                = null;
    protected $groupId                                          = null;
    protected $enableAgentUnavailableCodes                      = null;
    protected $defaultAgentUnavailableCodeOnDND                 = null;
    protected $defaultAgentUnavailableCodeOnPersonalCalls       = null;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces  = null;
    protected $forceUseOfAgentUnavailableCodes                  = null;
    protected $defaultAgentUnavailableCode                      = null;
    protected $codeStateList                                    = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $enableAgentUnavailableCodes = null,
         $defaultAgentUnavailableCodeOnDND = null,
         $defaultAgentUnavailableCodeOnPersonalCalls = null,
         $defaultAgentUnavailableCodeOnConsecutiveBounces = null,
         $forceUseOfAgentUnavailableCodes = null,
         $defaultAgentUnavailableCode = null,
         CallCenterAgentUnavailableCodeStateModify $codeStateList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setEnableAgentUnavailableCodes($enableAgentUnavailableCodes);
        $this->setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND);
        $this->setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes);
        $this->setDefaultAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->setCodeStateList($codeStateList);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

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

    public function setCodeStateList(CallCenterAgentUnavailableCodeStateModify $codeStateList = null)
    {
    }

    public function getCodeStateList()
    {
        return (!$this->codeStateList) ?: $this->codeStateList->value();
    }
}

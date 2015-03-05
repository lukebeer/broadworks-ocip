<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCodeStateModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterAgentUnavailableCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $enableAgentUnavailableCodes=null,
             $defaultAgentUnavailableCodeOnDND=null,
             $defaultAgentUnavailableCodeOnPersonalCalls=null,
             $defaultAgentUnavailableCodeOnConsecutiveBounces=null,
             $forceUseOfAgentUnavailableCodes=null,
             $defaultAgentUnavailableCode=null,
             $codeStateList=null
    ) {
        $this->serviceProviderId                               = new ServiceProviderId($serviceProviderId);
        $this->groupId                                         = new GroupId($groupId);
        $this->enableAgentUnavailableCodes                     = $enableAgentUnavailableCodes;
        $this->defaultAgentUnavailableCodeOnDND                = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
        $this->defaultAgentUnavailableCodeOnPersonalCalls      = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->forceUseOfAgentUnavailableCodes                 = $forceUseOfAgentUnavailableCodes;
        $this->defaultAgentUnavailableCode                     = new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->codeStateList                                   = $codeStateList;
        $this->args                                            = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
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

    public function setCodeStateList($codeStateList)
    {
        $codeStateList and $this->codeStateList = new CallCenterAgentUnavailableCodeStateModify($codeStateList);
    }

    public function getCodeStateList()
    {
        return (!$this->codeStateList) ?: $this->codeStateList->value();
    }
}

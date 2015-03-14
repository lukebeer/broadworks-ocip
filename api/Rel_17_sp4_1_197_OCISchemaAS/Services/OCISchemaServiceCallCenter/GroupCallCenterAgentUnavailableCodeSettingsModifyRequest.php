<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeStateModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterAgentUnavailableCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                            = 'GroupCallCenterAgentUnavailableCodeSettingsModifyRequest';
    protected $serviceProviderId                               = null;
    protected $groupId                                         = null;
    protected $enableAgentUnavailableCodes                     = null;
    protected $defaultAgentUnavailableCodeOnDND                = null;
    protected $defaultAgentUnavailableCodeOnPersonalCalls      = null;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces = null;
    protected $forceUseOfAgentUnavailableCodes                 = null;
    protected $defaultAgentUnavailableCode                     = null;
    protected $codeStateList                                   = null;

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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes = null)
    {
        if (!$enableAgentUnavailableCodes) return $this;
        $this->enableAgentUnavailableCodes = new PrimitiveType($enableAgentUnavailableCodes);
        $this->enableAgentUnavailableCodes->setName('enableAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAgentUnavailableCodes
     */
    public function getEnableAgentUnavailableCodes()
    {
        return $this->enableAgentUnavailableCodes->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        if (!$defaultAgentUnavailableCodeOnDND) return $this;
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
        $this->defaultAgentUnavailableCodeOnDND->setName('defaultAgentUnavailableCodeOnDND');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnDND
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return $this->defaultAgentUnavailableCodeOnDND->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        if (!$defaultAgentUnavailableCodeOnPersonalCalls) return $this;
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->defaultAgentUnavailableCodeOnPersonalCalls->setName('defaultAgentUnavailableCodeOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnPersonalCalls
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return $this->defaultAgentUnavailableCodeOnPersonalCalls->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        if (!$defaultAgentUnavailableCodeOnConsecutiveBounces) return $this;
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces->setName('defaultAgentUnavailableCodeOnConsecutiveBounces');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnConsecutiveBounces
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return $this->defaultAgentUnavailableCodeOnConsecutiveBounces->getValue();
    }

    /**
     * 
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes = null)
    {
        if (!$forceUseOfAgentUnavailableCodes) return $this;
        $this->forceUseOfAgentUnavailableCodes = new PrimitiveType($forceUseOfAgentUnavailableCodes);
        $this->forceUseOfAgentUnavailableCodes->setName('forceUseOfAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUseOfAgentUnavailableCodes
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return $this->forceUseOfAgentUnavailableCodes->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        if (!$defaultAgentUnavailableCode) return $this;
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->defaultAgentUnavailableCode->setName('defaultAgentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCode()
    {
        return $this->defaultAgentUnavailableCode->getValue();
    }

    /**
     * 
     */
    public function setCodeStateList(CallCenterAgentUnavailableCodeStateModify $codeStateList = null)
    {
        if (!$codeStateList) return $this;
        $this->codeStateList = $codeStateList;
        $this->codeStateList->setName('codeStateList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCodeStateModify $codeStateList
     */
    public function getCodeStateList()
    {
        return $this->codeStateList;
    }
}

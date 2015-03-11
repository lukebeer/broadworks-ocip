<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a BroadWorks Anywhere instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksAnywhereAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupBroadWorksAnywhereAddInstanceRequest';
    protected $serviceProviderId       = null;
    protected $groupId                 = null;
    protected $serviceUserId           = null;
    protected $serviceInstanceProfile  = null;
    protected $broadWorksAnywhereScope = null;
    protected $promptForCLID           = null;
    protected $silentPromptMode        = null;
    protected $promptForPasscode       = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfile $serviceInstanceProfile,
         $broadWorksAnywhereScope,
         $promptForCLID,
         $silentPromptMode,
         $promptForPasscode
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setBroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->setPromptForCLID($promptForCLID);
        $this->setSilentPromptMode($silentPromptMode);
        $this->setPromptForPasscode($promptForPasscode);
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
     * @return ServiceProviderId
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
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope = null)
    {
        if (!$broadWorksAnywhereScope) return $this;
        $this->broadWorksAnywhereScope = ($broadWorksAnywhereScope InstanceOf BroadWorksAnywhereScope)
             ? $broadWorksAnywhereScope
             : new BroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->broadWorksAnywhereScope->setName('broadWorksAnywhereScope');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereScope
     */
    public function getBroadWorksAnywhereScope()
    {
        return $this->broadWorksAnywhereScope->getValue();
    }

    /**
     * 
     */
    public function setPromptForCLID($promptForCLID = null)
    {
        if (!$promptForCLID) return $this;
        $this->promptForCLID = ($promptForCLID InstanceOf BroadWorksAnywhereCLIDPrompt)
             ? $promptForCLID
             : new BroadWorksAnywhereCLIDPrompt($promptForCLID);
        $this->promptForCLID->setName('promptForCLID');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereCLIDPrompt
     */
    public function getPromptForCLID()
    {
        return $this->promptForCLID->getValue();
    }

    /**
     * 
     */
    public function setSilentPromptMode($silentPromptMode = null)
    {
        if (!$silentPromptMode) return $this;
        $this->silentPromptMode = new PrimitiveType($silentPromptMode);
        $this->silentPromptMode->setName('silentPromptMode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSilentPromptMode()
    {
        return $this->silentPromptMode->getValue();
    }

    /**
     * 
     */
    public function setPromptForPasscode($promptForPasscode = null)
    {
        if (!$promptForPasscode) return $this;
        $this->promptForPasscode = new PrimitiveType($promptForPasscode);
        $this->promptForPasscode->setName('promptForPasscode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPromptForPasscode()
    {
        return $this->promptForPasscode->getValue();
    }
}

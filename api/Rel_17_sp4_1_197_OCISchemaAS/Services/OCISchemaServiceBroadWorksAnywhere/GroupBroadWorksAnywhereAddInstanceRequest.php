<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a BroadWorks Anywhere instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksAnywhereAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
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
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service.
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceAddProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Controls which users may use the BroadWorks Anywhere portal.
     */
    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope = null)
    {
        $this->broadWorksAnywhereScope = ($broadWorksAnywhereScope InstanceOf BroadWorksAnywhereScope)
             ? $broadWorksAnywhereScope
             : new BroadWorksAnywhereScope($broadWorksAnywhereScope);
    }

    /**
     * Controls which users may use the BroadWorks Anywhere portal.
     */
    public function getBroadWorksAnywhereScope()
    {
        return (!$this->broadWorksAnywhereScope) ?: $this->broadWorksAnywhereScope->getValue();
    }

    /**
     * BroadWorks Anywhere Prompt for CLID options.
     */
    public function setPromptForCLID($promptForCLID = null)
    {
        $this->promptForCLID = ($promptForCLID InstanceOf BroadWorksAnywhereCLIDPrompt)
             ? $promptForCLID
             : new BroadWorksAnywhereCLIDPrompt($promptForCLID);
    }

    /**
     * BroadWorks Anywhere Prompt for CLID options.
     */
    public function getPromptForCLID()
    {
        return (!$this->promptForCLID) ?: $this->promptForCLID->getValue();
    }

    /**
     * 
     */
    public function setSilentPromptMode($silentPromptMode = null)
    {
        $this->silentPromptMode = (boolean) $silentPromptMode;
    }

    /**
     * 
     */
    public function getSilentPromptMode()
    {
        return (!$this->silentPromptMode) ?: $this->silentPromptMode->getValue();
    }

    /**
     * 
     */
    public function setPromptForPasscode($promptForPasscode = null)
    {
        $this->promptForPasscode = (boolean) $promptForPasscode;
    }

    /**
     * 
     */
    public function getPromptForPasscode()
    {
        return (!$this->promptForPasscode) ?: $this->promptForPasscode->getValue();
    }
}

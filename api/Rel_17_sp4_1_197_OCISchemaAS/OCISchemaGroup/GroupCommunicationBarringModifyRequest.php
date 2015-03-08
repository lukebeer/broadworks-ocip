<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Gets Communication Barring setting for a group.  
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommunicationBarringModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $serviceProviderId                = null;
    protected $groupId                          = null;
    protected $useDefaultServiceProviderProfile = null;
    protected $profile                          = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useDefaultServiceProviderProfile = null,
         $profile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile);
        $this->setProfile($profile);
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
     * 
     */
    public function setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile = null)
    {
        $this->useDefaultServiceProviderProfile = (boolean) $useDefaultServiceProviderProfile;
    }

    /**
     * 
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return (!$this->useDefaultServiceProviderProfile) ?: $this->useDefaultServiceProviderProfile->getValue();
    }

    /**
     * Communication Barring Profile Name
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommunicationBarringProfileName)
             ? $profile
             : new CommunicationBarringProfileName($profile);
    }

    /**
     * Communication Barring Profile Name
     */
    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->getValue();
    }
}

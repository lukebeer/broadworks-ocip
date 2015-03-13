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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Gets Communication Barring setting for a group.  
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommunicationBarringModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = 'GroupCommunicationBarringModifyRequest';
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
    public function setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile = null)
    {
        if (!$useDefaultServiceProviderProfile) return $this;
        $this->useDefaultServiceProviderProfile = new PrimitiveType($useDefaultServiceProviderProfile);
        $this->useDefaultServiceProviderProfile->setName('useDefaultServiceProviderProfile');
        return $this;
    }

    /**
     * 
     * @return boolean $useDefaultServiceProviderProfile
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return $this->useDefaultServiceProviderProfile->getValue();
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        if (!$profile) return $this;
        $this->profile = ($profile InstanceOf CommunicationBarringProfileName)
             ? $profile
             : new CommunicationBarringProfileName($profile);
        $this->profile->setName('profile');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $profile
     */
    public function getProfile()
    {
        return $this->profile->getValue();
    }
}

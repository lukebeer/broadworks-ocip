<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Gets Communication Barring setting for a group.  
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommunicationBarringModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCommunicationBarringModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $useDefaultServiceProviderProfile;
    protected $profile;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile = null)
    {
        $this->useDefaultServiceProviderProfile = new PrimitiveType($useDefaultServiceProviderProfile);
        $this->useDefaultServiceProviderProfile->setElementName('useDefaultServiceProviderProfile');
        return $this;
    }

    /**
     * 
     * @return boolean $useDefaultServiceProviderProfile
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return ($this->useDefaultServiceProviderProfile)
            ? $this->useDefaultServiceProviderProfile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommunicationBarringProfileName)
             ? $profile
             : new CommunicationBarringProfileName($profile);
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $profile
     */
    public function getProfile()
    {
        return ($this->profile)
            ? $this->profile->getElementValue()
            : null;
    }
}

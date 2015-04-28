<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCommunicationBarringGetRequest.
 */
class GroupCommunicationBarringGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCommunicationBarringGetResponse';
    protected $useDefaultServiceProviderProfile;
    protected $profile;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommunicationBarringGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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

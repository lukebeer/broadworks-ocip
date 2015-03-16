<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCommunicationBarringGetRequest.
 */
class GroupCommunicationBarringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCommunicationBarringGetResponse';
    protected $useDefaultServiceProviderProfile;
    protected $profile;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommunicationBarringGetResponse $response
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
        $this->useDefaultServiceProviderProfile->setName('useDefaultServiceProviderProfile');
        return $this;
    }

    /**
     * 
     * @return boolean $useDefaultServiceProviderProfile
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return ($this->useDefaultServiceProviderProfile) ? $this->useDefaultServiceProviderProfile->getValue() : null;
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
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
        return ($this->profile) ? $this->profile->getValue() : null;
    }
}

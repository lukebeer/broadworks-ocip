<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalRequest.
 *         Replaced By: UserVoiceMessagingUserGetVoicePortalResponse16
 */
class UserVoiceMessagingUserGetVoicePortalResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserGetVoicePortalResponse';
    protected $usePersonalizedName;
    protected $voicePortalAutoLogin;
    protected $personalizedNameAudioFileDescription;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserVoiceMessagingUserGetVoicePortalResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUsePersonalizedName($usePersonalizedName = null)
    {
        $this->usePersonalizedName = new PrimitiveType($usePersonalizedName);
        $this->usePersonalizedName->setElementName('usePersonalizedName');
        return $this;
    }

    /**
     * 
     * @return boolean $usePersonalizedName
     */
    public function getUsePersonalizedName()
    {
        return ($this->usePersonalizedName)
            ? $this->usePersonalizedName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        $this->voicePortalAutoLogin = new PrimitiveType($voicePortalAutoLogin);
        $this->voicePortalAutoLogin->setElementName('voicePortalAutoLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $voicePortalAutoLogin
     */
    public function getVoicePortalAutoLogin()
    {
        return ($this->voicePortalAutoLogin)
            ? $this->voicePortalAutoLogin->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription = null)
    {
        $this->personalizedNameAudioFileDescription = ($personalizedNameAudioFileDescription InstanceOf FileDescription)
             ? $personalizedNameAudioFileDescription
             : new FileDescription($personalizedNameAudioFileDescription);
        $this->personalizedNameAudioFileDescription->setElementName('personalizedNameAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $personalizedNameAudioFileDescription
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return ($this->personalizedNameAudioFileDescription)
            ? $this->personalizedNameAudioFileDescription->getElementValue()
            : null;
    }
}

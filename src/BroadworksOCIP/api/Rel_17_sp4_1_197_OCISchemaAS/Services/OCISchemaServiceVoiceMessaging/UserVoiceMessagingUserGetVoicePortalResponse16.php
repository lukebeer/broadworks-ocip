<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalRequest16.
 */
class UserVoiceMessagingUserGetVoicePortalResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserGetVoicePortalResponse16';
    protected $usePersonalizedName;
    protected $voicePortalAutoLogin;
    protected $personalizedNameAudioFileDescription;
    protected $personalizedNameMediaType;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetVoicePortalResponse16 $response
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

    /**
     * 
     */
    public function setPersonalizedNameMediaType($personalizedNameMediaType = null)
    {
        $this->personalizedNameMediaType = ($personalizedNameMediaType InstanceOf MediaFileType)
             ? $personalizedNameMediaType
             : new MediaFileType($personalizedNameMediaType);
        $this->personalizedNameMediaType->setElementName('personalizedNameMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $personalizedNameMediaType
     */
    public function getPersonalizedNameMediaType()
    {
        return ($this->personalizedNameMediaType)
            ? $this->personalizedNameMediaType->getElementValue()
            : null;
    }
}

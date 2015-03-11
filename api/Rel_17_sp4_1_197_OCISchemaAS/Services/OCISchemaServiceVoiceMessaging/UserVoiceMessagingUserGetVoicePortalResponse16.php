<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalRequest16.
 */
class UserVoiceMessagingUserGetVoicePortalResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'UserVoiceMessagingUserGetVoicePortalResponse16';
    protected $usePersonalizedName                  = null;
    protected $voicePortalAutoLogin                 = null;
    protected $personalizedNameAudioFileDescription = null;
    protected $personalizedNameMediaType            = null;

    /**
     * @return UserVoiceMessagingUserGetVoicePortalResponse16
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
        if (!$usePersonalizedName) return $this;
        $this->usePersonalizedName = new PrimitiveType($usePersonalizedName);
        $this->usePersonalizedName->setName('usePersonalizedName');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        if (!$voicePortalAutoLogin) return $this;
        $this->voicePortalAutoLogin = new PrimitiveType($voicePortalAutoLogin);
        $this->voicePortalAutoLogin->setName('voicePortalAutoLogin');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getVoicePortalAutoLogin()
    {
        return $this->voicePortalAutoLogin->getValue();
    }

    /**
     * 
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription = null)
    {
        if (!$personalizedNameAudioFileDescription) return $this;
        $this->personalizedNameAudioFileDescription = ($personalizedNameAudioFileDescription InstanceOf FileDescription)
             ? $personalizedNameAudioFileDescription
             : new FileDescription($personalizedNameAudioFileDescription);
        $this->personalizedNameAudioFileDescription->setName('personalizedNameAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return $this->personalizedNameAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setPersonalizedNameMediaType($personalizedNameMediaType = null)
    {
        if (!$personalizedNameMediaType) return $this;
        $this->personalizedNameMediaType = ($personalizedNameMediaType InstanceOf MediaFileType)
             ? $personalizedNameMediaType
             : new MediaFileType($personalizedNameMediaType);
        $this->personalizedNameMediaType->setName('personalizedNameMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getPersonalizedNameMediaType()
    {
        return $this->personalizedNameMediaType->getValue();
    }
}

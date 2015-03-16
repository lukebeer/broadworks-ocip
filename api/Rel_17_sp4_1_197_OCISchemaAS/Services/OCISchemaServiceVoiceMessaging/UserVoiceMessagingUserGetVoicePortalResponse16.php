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
    public    $name = 'UserVoiceMessagingUserGetVoicePortalResponse16';
    protected $usePersonalizedName;
    protected $voicePortalAutoLogin;
    protected $personalizedNameAudioFileDescription;
    protected $personalizedNameMediaType;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetVoicePortalResponse16 $response
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
        $this->usePersonalizedName->setName('usePersonalizedName');
        return $this;
    }

    /**
     * 
     * @return boolean $usePersonalizedName
     */
    public function getUsePersonalizedName()
    {
        return ($this->usePersonalizedName) ? $this->usePersonalizedName->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        $this->voicePortalAutoLogin = new PrimitiveType($voicePortalAutoLogin);
        $this->voicePortalAutoLogin->setName('voicePortalAutoLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $voicePortalAutoLogin
     */
    public function getVoicePortalAutoLogin()
    {
        return ($this->voicePortalAutoLogin) ? $this->voicePortalAutoLogin->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription = null)
    {
        $this->personalizedNameAudioFileDescription = ($personalizedNameAudioFileDescription InstanceOf FileDescription)
             ? $personalizedNameAudioFileDescription
             : new FileDescription($personalizedNameAudioFileDescription);
        $this->personalizedNameAudioFileDescription->setName('personalizedNameAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $personalizedNameAudioFileDescription
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return ($this->personalizedNameAudioFileDescription) ? $this->personalizedNameAudioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalizedNameMediaType($personalizedNameMediaType = null)
    {
        $this->personalizedNameMediaType = ($personalizedNameMediaType InstanceOf MediaFileType)
             ? $personalizedNameMediaType
             : new MediaFileType($personalizedNameMediaType);
        $this->personalizedNameMediaType->setName('personalizedNameMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $personalizedNameMediaType
     */
    public function getPersonalizedNameMediaType()
    {
        return ($this->personalizedNameMediaType) ? $this->personalizedNameMediaType->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserVoiceMessagingUserGetVoicePortalRequest16.
 */
class UserVoiceMessagingUserGetVoicePortalResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetVoicePortalResponse16';
    public    $name                                 = __CLASS__;
    protected $usePersonalizedName                  = null;
    protected $voicePortalAutoLogin                 = null;
    protected $personalizedNameAudioFileDescription = null;
    protected $personalizedNameMediaType            = null;


    /**
     * 
     */
    public function setUsePersonalizedName($usePersonalizedName = null)
    {
        $this->usePersonalizedName = (boolean) $usePersonalizedName;
    }

    /**
     * 
     */
    public function getUsePersonalizedName()
    {
        return (!$this->usePersonalizedName) ?: $this->usePersonalizedName->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        $this->voicePortalAutoLogin = (boolean) $voicePortalAutoLogin;
    }

    /**
     * 
     */
    public function getVoicePortalAutoLogin()
    {
        return (!$this->voicePortalAutoLogin) ?: $this->voicePortalAutoLogin->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription = null)
    {
        $this->personalizedNameAudioFileDescription = ($personalizedNameAudioFileDescription InstanceOf FileDescription)
             ? $personalizedNameAudioFileDescription
             : new FileDescription($personalizedNameAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return (!$this->personalizedNameAudioFileDescription) ?: $this->personalizedNameAudioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setPersonalizedNameMediaType($personalizedNameMediaType = null)
    {
        $this->personalizedNameMediaType = ($personalizedNameMediaType InstanceOf MediaFileType)
             ? $personalizedNameMediaType
             : new MediaFileType($personalizedNameMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getPersonalizedNameMediaType()
    {
        return (!$this->personalizedNameMediaType) ?: $this->personalizedNameMediaType->getValue();
    }
}

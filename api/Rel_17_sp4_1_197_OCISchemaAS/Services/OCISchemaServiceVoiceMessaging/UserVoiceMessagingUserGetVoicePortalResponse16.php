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
    public    $name                                  = __CLASS__;
    protected $usePersonalizedName                   = null;
    protected $voicePortalAutoLogin                  = null;
    protected $personalizedNameAudioFileDescription  = null;
    protected $personalizedNameMediaType             = null;


    public function setUsePersonalizedName(xs:boolean $usePersonalizedName = null)
    {
    }

    public function getUsePersonalizedName()
    {
        return (!$this->usePersonalizedName) ?: $this->usePersonalizedName->value();
    }

    public function setVoicePortalAutoLogin(xs:boolean $voicePortalAutoLogin = null)
    {
    }

    public function getVoicePortalAutoLogin()
    {
        return (!$this->voicePortalAutoLogin) ?: $this->voicePortalAutoLogin->value();
    }

    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription = null)
    {
        $this->personalizedNameAudioFileDescription = ($personalizedNameAudioFileDescription InstanceOf FileDescription)
             ? $personalizedNameAudioFileDescription
             : new FileDescription($personalizedNameAudioFileDescription);
    }

    public function getPersonalizedNameAudioFileDescription()
    {
        return (!$this->personalizedNameAudioFileDescription) ?: $this->personalizedNameAudioFileDescription->value();
    }

    public function setPersonalizedNameMediaType($personalizedNameMediaType = null)
    {
        $this->personalizedNameMediaType = ($personalizedNameMediaType InstanceOf MediaFileType)
             ? $personalizedNameMediaType
             : new MediaFileType($personalizedNameMediaType);
    }

    public function getPersonalizedNameMediaType()
    {
        return (!$this->personalizedNameMediaType) ?: $this->personalizedNameMediaType->value();
    }
}

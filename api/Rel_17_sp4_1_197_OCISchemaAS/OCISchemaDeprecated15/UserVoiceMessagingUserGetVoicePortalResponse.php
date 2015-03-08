<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserVoiceMessagingUserGetVoicePortalRequest.
 *         Replaced By: UserVoiceMessagingUserGetVoicePortalResponse16
 */
class UserVoiceMessagingUserGetVoicePortalResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $usePersonalizedName                  = null;
    protected $voicePortalAutoLogin                 = null;
    protected $personalizedNameAudioFileDescription = null;


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
}

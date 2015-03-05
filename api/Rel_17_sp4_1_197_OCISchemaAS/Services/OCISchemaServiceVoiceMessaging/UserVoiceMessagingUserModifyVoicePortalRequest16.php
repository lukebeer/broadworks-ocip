<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's voice messaging voice portal settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserVoiceMessagingUserModifyVoicePortalRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $usePersonalizedName=null,
             $voicePortalAutoLogin=null,
             LabeledMediaFileResource $personalizedNameAudioFile=null
    ) {
        $this->userId                    = new UserId($userId);
        $this->usePersonalizedName       = $usePersonalizedName;
        $this->voicePortalAutoLogin      = $voicePortalAutoLogin;
        $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        $this->args                      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setUsePersonalizedName($usePersonalizedName)
    {
        $usePersonalizedName and $this->usePersonalizedName = new xs:boolean($usePersonalizedName);
    }

    public function getUsePersonalizedName()
    {
        return (!$this->usePersonalizedName) ?: $this->usePersonalizedName->value();
    }

    public function setVoicePortalAutoLogin($voicePortalAutoLogin)
    {
        $voicePortalAutoLogin and $this->voicePortalAutoLogin = new xs:boolean($voicePortalAutoLogin);
    }

    public function getVoicePortalAutoLogin()
    {
        return (!$this->voicePortalAutoLogin) ?: $this->voicePortalAutoLogin->value();
    }

    public function setPersonalizedNameAudioFile($personalizedNameAudioFile)
    {
        $personalizedNameAudioFile and $this->personalizedNameAudioFile = new LabeledMediaFileResource($personalizedNameAudioFile);
    }

    public function getPersonalizedNameAudioFile()
    {
        return (!$this->personalizedNameAudioFile) ?: $this->personalizedNameAudioFile->value();
    }
}

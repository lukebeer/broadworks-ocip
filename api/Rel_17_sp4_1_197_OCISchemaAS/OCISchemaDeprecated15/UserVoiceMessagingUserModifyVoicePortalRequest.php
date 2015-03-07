<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's voice messaging voice portal settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *         Replaced By: UserVoiceMessagingUserModifyVoicePortalRequest16
 */
class UserVoiceMessagingUserModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $userId                     = null;
    protected $usePersonalizedName        = null;
    protected $voicePortalAutoLogin       = null;
    protected $personalizedNameAudioFile  = null;

    public function __construct(
         $userId,
         $usePersonalizedName = null,
         $voicePortalAutoLogin = null,
         LabeledFileResource $personalizedNameAudioFile = null
    ) {
        $this->setUserId($userId);
        $this->setUsePersonalizedName($usePersonalizedName);
        $this->setVoicePortalAutoLogin($voicePortalAutoLogin);
        $this->setPersonalizedNameAudioFile($personalizedNameAudioFile);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

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

    public function setPersonalizedNameAudioFile(LabeledFileResource $personalizedNameAudioFile = null)
    {
    }

    public function getPersonalizedNameAudioFile()
    {
        return (!$this->personalizedNameAudioFile) ?: $this->personalizedNameAudioFile->value();
    }
}

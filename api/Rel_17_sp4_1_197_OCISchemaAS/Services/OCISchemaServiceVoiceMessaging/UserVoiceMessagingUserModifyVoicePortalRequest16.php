<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user's voice messaging voice portal settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserVoiceMessagingUserModifyVoicePortalRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $userId                    = null;
    protected $usePersonalizedName       = null;
    protected $voicePortalAutoLogin      = null;
    protected $personalizedNameAudioFile = null;

    public function __construct(
         $userId,
         $usePersonalizedName = null,
         $voicePortalAutoLogin = null,
         LabeledMediaFileResource $personalizedNameAudioFile = null
    ) {
        $this->setUserId($userId);
        $this->setUsePersonalizedName($usePersonalizedName);
        $this->setVoicePortalAutoLogin($voicePortalAutoLogin);
        $this->setPersonalizedNameAudioFile($personalizedNameAudioFile);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setPersonalizedNameAudioFile(LabeledMediaFileResource $personalizedNameAudioFile = null)
    {
        $this->personalizedNameAudioFile = LabeledMediaFileResource $personalizedNameAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getPersonalizedNameAudioFile()
    {
        return (!$this->personalizedNameAudioFile) ?: $this->personalizedNameAudioFile->getValue();
    }
}

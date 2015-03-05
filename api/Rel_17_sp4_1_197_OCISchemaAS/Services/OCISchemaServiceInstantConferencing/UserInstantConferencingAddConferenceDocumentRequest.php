<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddConferenceDocumentRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $conferenceKey,
             LabeledFileResource $documentFile,
             $encryptionPassword=null
    ) {
        $this->userId             = new UserId($userId);
        $this->conferenceKey      = $conferenceKey;
        $this->documentFile       = $documentFile;
        $this->encryptionPassword = new Password($encryptionPassword);
        $this->args               = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setConferenceKey($conferenceKey)
    {
        $conferenceKey and $this->conferenceKey = new InstantConferencingConferenceKey($conferenceKey);
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setDocumentFile($documentFile)
    {
        $documentFile and $this->documentFile = new LabeledFileResource($documentFile);
    }

    public function getDocumentFile()
    {
        return (!$this->documentFile) ?: $this->documentFile->value();
    }

    public function setEncryptionPassword($encryptionPassword)
    {
        $encryptionPassword and $this->encryptionPassword = new Password($encryptionPassword);
    }

    public function getEncryptionPassword()
    {
        return (!$this->encryptionPassword) ?: $this->encryptionPassword->value();
    }
}

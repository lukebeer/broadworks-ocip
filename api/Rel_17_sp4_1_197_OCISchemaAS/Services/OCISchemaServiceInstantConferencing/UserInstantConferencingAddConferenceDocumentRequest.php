<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddConferenceDocumentRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $userId              = null;
    protected $conferenceKey       = null;
    protected $documentFile        = null;
    protected $encryptionPassword  = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey,
         LabeledFileResource $documentFile,
         $encryptionPassword = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setDocumentFile($documentFile);
        $this->setEncryptionPassword($encryptionPassword);
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

    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setDocumentFile(LabeledFileResource $documentFile = null)
    {
    }

    public function getDocumentFile()
    {
        return (!$this->documentFile) ?: $this->documentFile->value();
    }

    public function setEncryptionPassword($encryptionPassword = null)
    {
        $this->encryptionPassword = ($encryptionPassword InstanceOf Password)
             ? $encryptionPassword
             : new Password($encryptionPassword);
    }

    public function getEncryptionPassword()
    {
        return (!$this->encryptionPassword) ?: $this->encryptionPassword->value();
    }
}

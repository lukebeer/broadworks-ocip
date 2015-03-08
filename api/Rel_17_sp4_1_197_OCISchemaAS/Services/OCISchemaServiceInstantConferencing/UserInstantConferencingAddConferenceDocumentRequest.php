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
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $conferenceKey      = null;
    protected $documentFile       = null;
    protected $encryptionPassword = null;

    public function __construct(
         $userId,
          $conferenceKey,
          $documentFile,
         $encryptionPassword = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setDocumentFile($documentFile);
        $this->setEncryptionPassword($encryptionPassword);
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
     * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey =  $conferenceKey;
    }

    /**
     * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
     */
    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setDocumentFile(LabeledFileResource $documentFile = null)
    {
        $this->documentFile =  $documentFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getDocumentFile()
    {
        return (!$this->documentFile) ?: $this->documentFile->getValue();
    }

    /**
     * 
     */
    public function setEncryptionPassword($encryptionPassword = null)
    {
        $this->encryptionPassword = ($encryptionPassword InstanceOf Password)
             ? $encryptionPassword
             : new Password($encryptionPassword);
    }

    /**
     * 
     */
    public function getEncryptionPassword()
    {
        return (!$this->encryptionPassword) ?: $this->encryptionPassword->getValue();
    }
}

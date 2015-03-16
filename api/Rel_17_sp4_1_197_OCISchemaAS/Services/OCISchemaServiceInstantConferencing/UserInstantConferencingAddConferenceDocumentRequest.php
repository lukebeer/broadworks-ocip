<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddConferenceDocumentRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInstantConferencingAddConferenceDocumentRequest';
    protected $userId;
    protected $conferenceKey;
    protected $documentFile;
    protected $encryptionPassword;

    public function __construct(
         $userId = '',
         $conferenceKey = '',
         $documentFile = '',
         $encryptionPassword = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setDocumentFile($documentFile);
        $this->setEncryptionPassword($encryptionPassword);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = ($conferenceKey InstanceOf InstantConferencingConferenceKey)
             ? $conferenceKey
             : new InstantConferencingConferenceKey($conferenceKey);
        $this->conferenceKey->setName('conferenceKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceKey $conferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }

    /**
     * 
     */
    public function setDocumentFile(LabeledFileResource $documentFile = null)
    {
        $this->documentFile = ($documentFile InstanceOf LabeledFileResource)
             ? $documentFile
             : new LabeledFileResource($documentFile);
        $this->documentFile->setName('documentFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $documentFile
     */
    public function getDocumentFile()
    {
        return $this->documentFile;
    }

    /**
     * 
     */
    public function setEncryptionPassword($encryptionPassword = null)
    {
        $this->encryptionPassword = ($encryptionPassword InstanceOf Password)
             ? $encryptionPassword
             : new Password($encryptionPassword);
        $this->encryptionPassword->setName('encryptionPassword');
        return $this;
    }

    /**
     * 
     * @return Password $encryptionPassword
     */
    public function getEncryptionPassword()
    {
        return ($this->encryptionPassword) ? $this->encryptionPassword->getValue() : null;
    }
}

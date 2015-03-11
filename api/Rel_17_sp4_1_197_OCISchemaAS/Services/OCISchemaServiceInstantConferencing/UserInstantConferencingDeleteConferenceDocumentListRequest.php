<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete one or more conference documents.
 *         The documentId is obtained from the UserInstantConferencingGetConferenceDocumentListResponse.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingDeleteConferenceDocumentListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'UserInstantConferencingDeleteConferenceDocumentListRequest';
    protected $userId           = null;
    protected $conferenceKey    = null;
    protected $conferenceCallId = null;
    protected $documentId       = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey,
         $conferenceCallId,
         $documentId = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
        $this->setDocumentId($documentId);
    }

    /**
     * @return 
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        if (!$conferenceKey) return $this;
        $this->conferenceKey = $conferenceKey;
        $this->conferenceKey->setName('conferenceKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }

    /**
     * 
     */
    public function setConferenceCallId($conferenceCallId = null)
    {
        if (!$conferenceCallId) return $this;
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId
     */
    public function getConferenceCallId()
    {
        return $this->conferenceCallId->getValue();
    }

    /**
     * 
     */
    public function setDocumentId($documentId = null)
    {
        if (!$documentId) return $this;
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId
     */
    public function getDocumentId()
    {
        return $this->documentId->getValue();
    }
}

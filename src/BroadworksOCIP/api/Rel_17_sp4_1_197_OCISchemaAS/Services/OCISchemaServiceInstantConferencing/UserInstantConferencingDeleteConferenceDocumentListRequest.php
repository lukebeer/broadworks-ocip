<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to delete one or more conference documents.
 *         The documentId is obtained from the UserInstantConferencingGetConferenceDocumentListResponse.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingDeleteConferenceDocumentListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingDeleteConferenceDocumentListRequest';
    protected $userId;
    protected $conferenceKey;
    protected $conferenceCallId;
    protected $documentId;

    public function __construct(
         $userId = '',
         $conferenceKey = '',
         $conferenceCallId = '',
         $documentId = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
        $this->setDocumentId($documentId);
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
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = ($conferenceKey InstanceOf InstantConferencingConferenceKey)
             ? $conferenceKey
             : new InstantConferencingConferenceKey($conferenceKey);
        $this->conferenceKey->setElementName('conferenceKey');
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
    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setElementName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId $conferenceCallId
     */
    public function getConferenceCallId()
    {
        return ($this->conferenceCallId)
            ? $this->conferenceCallId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setElementName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId $documentId
     */
    public function getDocumentId()
    {
        return ($this->documentId)
            ? $this->documentId->getElementValue()
            : null;
    }
}

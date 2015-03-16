<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceDocumentListRequest14.
 *         The documentTable has column headings:
 *         "File Description", "Status", "Error Message", "Slide Name", "Slide List".
 *         The "File Description" column is the description from the LabeledFileResource
 *         when the document was added.
 *         The "Slide List" column is a string with all the possible slide numbers, it looks
 *         like "1,2,3,4,5" if the slide show has 5 pages.
 */
class UserInstantConferencingGetStandAloneConferenceDocumentListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInstantConferencingGetStandAloneConferenceDocumentListResponse14';
    protected $conferenceCallId;
    protected $documentId;
    protected $isExpired;
    protected $participantAccessCode;
    protected $leaderAccessCode;
    protected $conferenceServerFQDN;
    protected $presentationPassword;
    protected $presentationPasswordHex;
    protected $documentTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceDocumentListResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId $conferenceCallId
     */
    public function getConferenceCallId()
    {
        return ($this->conferenceCallId) ? $this->conferenceCallId->getValue() : null;
    }

    /**
     * 
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId $documentId
     */
    public function getDocumentId()
    {
        return ($this->documentId) ? $this->documentId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = new PrimitiveType($isExpired);
        $this->isExpired->setName('isExpired');
        return $this;
    }

    /**
     * 
     * @return boolean $isExpired
     */
    public function getIsExpired()
    {
        return ($this->isExpired) ? $this->isExpired->getValue() : null;
    }

    /**
     * 
     */
    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
        $this->participantAccessCode->setName('participantAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $participantAccessCode
     */
    public function getParticipantAccessCode()
    {
        return ($this->participantAccessCode) ? $this->participantAccessCode->getValue() : null;
    }

    /**
     * 
     */
    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
        $this->leaderAccessCode->setName('leaderAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $leaderAccessCode
     */
    public function getLeaderAccessCode()
    {
        return ($this->leaderAccessCode) ? $this->leaderAccessCode->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
        $this->conferenceServerFQDN->setName('conferenceServerFQDN');
        return $this;
    }

    /**
     * 
     * @return DomainName $conferenceServerFQDN
     */
    public function getConferenceServerFQDN()
    {
        return ($this->conferenceServerFQDN) ? $this->conferenceServerFQDN->getValue() : null;
    }

    /**
     * 
     */
    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
        $this->presentationPassword->setName('presentationPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingPresentationPassword $presentationPassword
     */
    public function getPresentationPassword()
    {
        return ($this->presentationPassword) ? $this->presentationPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setPresentationPasswordHex($presentationPasswordHex = null)
    {
        $this->presentationPasswordHex = ($presentationPasswordHex InstanceOf InstantConferencingPresentationPasswordHex)
             ? $presentationPasswordHex
             : new InstantConferencingPresentationPasswordHex($presentationPasswordHex);
        $this->presentationPasswordHex->setName('presentationPasswordHex');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingPresentationPasswordHex $presentationPasswordHex
     */
    public function getPresentationPasswordHex()
    {
        return ($this->presentationPasswordHex) ? $this->presentationPasswordHex->getValue() : null;
    }

    /**
     * 
     */
    public function setDocumentTable(TableType $documentTable = null)
    {
        $this->documentTable = $documentTable;
        $this->documentTable->setName('documentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDocumentTable()
    {
        return $this->documentTable;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPasswordHex;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'UserInstantConferencingGetStandAloneConferenceDocumentListResponse14';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceDocumentListResponse14 $response
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

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = new PrimitiveType($isExpired);
        $this->isExpired->setElementName('isExpired');
        return $this;
    }

    /**
     * 
     * @return boolean $isExpired
     */
    public function getIsExpired()
    {
        return ($this->isExpired)
            ? $this->isExpired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
        $this->participantAccessCode->setElementName('participantAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $participantAccessCode
     */
    public function getParticipantAccessCode()
    {
        return ($this->participantAccessCode)
            ? $this->participantAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
        $this->leaderAccessCode->setElementName('leaderAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $leaderAccessCode
     */
    public function getLeaderAccessCode()
    {
        return ($this->leaderAccessCode)
            ? $this->leaderAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
        $this->conferenceServerFQDN->setElementName('conferenceServerFQDN');
        return $this;
    }

    /**
     * 
     * @return DomainName $conferenceServerFQDN
     */
    public function getConferenceServerFQDN()
    {
        return ($this->conferenceServerFQDN)
            ? $this->conferenceServerFQDN->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
        $this->presentationPassword->setElementName('presentationPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingPresentationPassword $presentationPassword
     */
    public function getPresentationPassword()
    {
        return ($this->presentationPassword)
            ? $this->presentationPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPresentationPasswordHex($presentationPasswordHex = null)
    {
        $this->presentationPasswordHex = ($presentationPasswordHex InstanceOf InstantConferencingPresentationPasswordHex)
             ? $presentationPasswordHex
             : new InstantConferencingPresentationPasswordHex($presentationPasswordHex);
        $this->presentationPasswordHex->setElementName('presentationPasswordHex');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingPresentationPasswordHex $presentationPasswordHex
     */
    public function getPresentationPasswordHex()
    {
        return ($this->presentationPasswordHex)
            ? $this->presentationPasswordHex->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDocumentTable(TableType $documentTable = null)
    {
        $this->documentTable = $documentTable;
        $this->documentTable->setElementName('documentTable');
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

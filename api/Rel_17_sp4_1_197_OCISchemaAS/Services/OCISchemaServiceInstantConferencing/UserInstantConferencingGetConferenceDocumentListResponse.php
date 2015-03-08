<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserInstantConferencingGetConferenceDocumentListRequest.
 *         The documentTable has column headings:
 *         "File Description", "Status", "Error Message", "Slide Name", "Slide List".
 *         The "File Description" column is the description from the LabeledFileResource
 *         when the document was added.
 *         The "Slide List" column is a string with all the possible slide numbers, it looks
 *         like "1,2,3,4,5" if the slide show has 5 pages.
 */
class UserInstantConferencingGetConferenceDocumentListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceDocumentListResponse';
    public    $name                    = __CLASS__;
    protected $conferenceCallId        = null;
    protected $documentId              = null;
    protected $isExpired               = null;
    protected $participantAccessCode   = null;
    protected $leaderAccessCode        = null;
    protected $conferenceServerFQDN    = null;
    protected $presentationPassword    = null;
    protected $presentationPasswordHex = null;
    protected $documentTable           = null;


    /**
     * Conference call Id.
     */
    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
    }

    /**
     * Conference call Id.
     */
    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->getValue();
    }

    /**
     * Uniquely identifies an instant conferencing document.
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
    }

    /**
     * Uniquely identifies an instant conferencing document.
     */
    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->getValue();
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = (boolean) $isExpired;
    }

    /**
     * 
     */
    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->getValue();
    }

    /**
     * Conference access code for a conference.
     */
    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
    }

    /**
     * Conference access code for a conference.
     */
    public function getParticipantAccessCode()
    {
        return (!$this->participantAccessCode) ?: $this->participantAccessCode->getValue();
    }

    /**
     * Conference access code for a conference.
     */
    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
    }

    /**
     * Conference access code for a conference.
     */
    public function getLeaderAccessCode()
    {
        return (!$this->leaderAccessCode) ?: $this->leaderAccessCode->getValue();
    }

    /**
     * Network domain name.
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
    }

    /**
     * Network domain name.
     */
    public function getConferenceServerFQDN()
    {
        return (!$this->conferenceServerFQDN) ?: $this->conferenceServerFQDN->getValue();
    }

    /**
     * Conference presentation password.
     */
    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
    }

    /**
     * Conference presentation password.
     */
    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->getValue();
    }

    /**
     * Conference presentation password in hexadecimal format.
     */
    public function setPresentationPasswordHex($presentationPasswordHex = null)
    {
        $this->presentationPasswordHex = ($presentationPasswordHex InstanceOf InstantConferencingPresentationPasswordHex)
             ? $presentationPasswordHex
             : new InstantConferencingPresentationPasswordHex($presentationPasswordHex);
    }

    /**
     * Conference presentation password in hexadecimal format.
     */
    public function getPresentationPasswordHex()
    {
        return (!$this->presentationPasswordHex) ?: $this->presentationPasswordHex->getValue();
    }

    /**
     * 
     */
    public function setDocumentTable(core:OCITable $documentTable = null)
    {
        $this->documentTable = core:OCITable $documentTable;
    }

    /**
     * 
     */
    public function getDocumentTable()
    {
        return (!$this->documentTable) ?: $this->documentTable->getValue();
    }
}

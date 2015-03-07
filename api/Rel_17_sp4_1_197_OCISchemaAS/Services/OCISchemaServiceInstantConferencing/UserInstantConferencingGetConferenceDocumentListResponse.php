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
    public    $name                     = __CLASS__;
    protected $conferenceCallId         = null;
    protected $documentId               = null;
    protected $isExpired                = null;
    protected $participantAccessCode    = null;
    protected $leaderAccessCode         = null;
    protected $conferenceServerFQDN     = null;
    protected $presentationPassword     = null;
    protected $presentationPasswordHex  = null;
    protected $documentTable            = null;


    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
    }

    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->value();
    }

    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
    }

    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->value();
    }

    public function setIsExpired(xs:boolean $isExpired = null)
    {
    }

    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->value();
    }

    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
    }

    public function getParticipantAccessCode()
    {
        return (!$this->participantAccessCode) ?: $this->participantAccessCode->value();
    }

    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
    }

    public function getLeaderAccessCode()
    {
        return (!$this->leaderAccessCode) ?: $this->leaderAccessCode->value();
    }

    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
    }

    public function getConferenceServerFQDN()
    {
        return (!$this->conferenceServerFQDN) ?: $this->conferenceServerFQDN->value();
    }

    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
    }

    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->value();
    }

    public function setPresentationPasswordHex($presentationPasswordHex = null)
    {
        $this->presentationPasswordHex = ($presentationPasswordHex InstanceOf InstantConferencingPresentationPasswordHex)
             ? $presentationPasswordHex
             : new InstantConferencingPresentationPasswordHex($presentationPasswordHex);
    }

    public function getPresentationPasswordHex()
    {
        return (!$this->presentationPasswordHex) ?: $this->presentationPasswordHex->value();
    }

    public function setDocumentTable(core:OCITable $documentTable = null)
    {
    }

    public function getDocumentTable()
    {
        return (!$this->documentTable) ?: $this->documentTable->value();
    }
}

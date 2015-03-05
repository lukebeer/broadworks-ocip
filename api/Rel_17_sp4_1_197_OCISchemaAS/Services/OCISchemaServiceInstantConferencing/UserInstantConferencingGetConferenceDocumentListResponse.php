<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingPresentationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingPresentationPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
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
    public    $name = __CLASS__;

    public function __construct(
             $conferenceCallId,
             $documentId,
             $isExpired,
             $participantAccessCode,
             $leaderAccessCode,
             $conferenceServerFQDN,
             $presentationPassword=null,
             $presentationPasswordHex=null,
             $documentTable
    ) {
        $this->conferenceCallId        = $conferenceCallId;
        $this->documentId              = $documentId;
        $this->isExpired               = $isExpired;
        $this->participantAccessCode   = $participantAccessCode;
        $this->leaderAccessCode        = $leaderAccessCode;
        $this->conferenceServerFQDN    = new DomainName($conferenceServerFQDN);
        $this->presentationPassword    = $presentationPassword;
        $this->presentationPasswordHex = $presentationPasswordHex;
        $this->documentTable           = $documentTable;
        $this->args                    = func_get_args();
    }

    public function setConferenceCallId($conferenceCallId)
    {
        $conferenceCallId and $this->conferenceCallId = new InstantConferencingCallId($conferenceCallId);
    }

    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->value();
    }

    public function setDocumentId($documentId)
    {
        $documentId and $this->documentId = new InstantConferencingDocumentId($documentId);
    }

    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->value();
    }

    public function setIsExpired($isExpired)
    {
        $isExpired and $this->isExpired = new xs:boolean($isExpired);
    }

    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->value();
    }

    public function setParticipantAccessCode($participantAccessCode)
    {
        $participantAccessCode and $this->participantAccessCode = new InstantConferencingAccessCode($participantAccessCode);
    }

    public function getParticipantAccessCode()
    {
        return (!$this->participantAccessCode) ?: $this->participantAccessCode->value();
    }

    public function setLeaderAccessCode($leaderAccessCode)
    {
        $leaderAccessCode and $this->leaderAccessCode = new InstantConferencingAccessCode($leaderAccessCode);
    }

    public function getLeaderAccessCode()
    {
        return (!$this->leaderAccessCode) ?: $this->leaderAccessCode->value();
    }

    public function setConferenceServerFQDN($conferenceServerFQDN)
    {
        $conferenceServerFQDN and $this->conferenceServerFQDN = new DomainName($conferenceServerFQDN);
    }

    public function getConferenceServerFQDN()
    {
        return (!$this->conferenceServerFQDN) ?: $this->conferenceServerFQDN->value();
    }

    public function setPresentationPassword($presentationPassword)
    {
        $presentationPassword and $this->presentationPassword = new InstantConferencingPresentationPassword($presentationPassword);
    }

    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->value();
    }

    public function setPresentationPasswordHex($presentationPasswordHex)
    {
        $presentationPasswordHex and $this->presentationPasswordHex = new InstantConferencingPresentationPasswordHex($presentationPasswordHex);
    }

    public function getPresentationPasswordHex()
    {
        return (!$this->presentationPasswordHex) ?: $this->presentationPasswordHex->value();
    }

    public function setDocumentTable($documentTable)
    {
        $documentTable and $this->documentTable = new core:OCITable($documentTable);
    }

    public function getDocumentTable()
    {
        return (!$this->documentTable) ?: $this->documentTable->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSlideShowPasswordHex;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get slide show content of a recorded conference.
 *         The response is either UserInstantConferencingGetStandAloneSlideShowContentResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneSlideShowContentRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $bridgeServiceUserId,
             $conferenceOwnerUserId,
             $documentId,
             $slideshowPasswordHex=null
    ) {
        $this->bridgeServiceUserId   = new UserId($bridgeServiceUserId);
        $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
        $this->documentId            = $documentId;
        $this->slideshowPasswordHex  = $slideshowPasswordHex;
        $this->args                  = func_get_args();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId)
    {
        $bridgeServiceUserId and $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId)
    {
        $conferenceOwnerUserId and $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }

    public function setDocumentId($documentId)
    {
        $documentId and $this->documentId = new InstantConferencingDocumentId($documentId);
    }

    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->value();
    }

    public function setSlideshowPasswordHex($slideshowPasswordHex)
    {
        $slideshowPasswordHex and $this->slideshowPasswordHex = new InstantConferencingSlideShowPasswordHex($slideshowPasswordHex);
    }

    public function getSlideshowPasswordHex()
    {
        return (!$this->slideshowPasswordHex) ?: $this->slideshowPasswordHex->value();
    }
}

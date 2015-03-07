<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get slide show content of a recorded conference.
 *         The response is either UserInstantConferencingGetStandAloneSlideShowContentResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneSlideShowContentRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $bridgeServiceUserId    = null;
    protected $conferenceOwnerUserId  = null;
    protected $documentId             = null;
    protected $slideshowPasswordHex   = null;

    public function __construct(
         $bridgeServiceUserId,
         $conferenceOwnerUserId,
         $documentId,
         $slideshowPasswordHex = null
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setDocumentId($documentId);
        $this->setSlideshowPasswordHex($slideshowPasswordHex);
    }

    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
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

    public function setSlideshowPasswordHex($slideshowPasswordHex = null)
    {
        $this->slideshowPasswordHex = ($slideshowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideshowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideshowPasswordHex);
    }

    public function getSlideshowPasswordHex()
    {
        return (!$this->slideshowPasswordHex) ?: $this->slideshowPasswordHex->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Set presentation slide number of a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingSetPresentationSlideNumberRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $bridgeServiceUserId  = null;
    protected $documentId           = null;
    protected $accessCode           = null;
    protected $slideName            = null;
    protected $slideNumber          = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         $documentId,
         $accessCode,
         $slideName,
         $slideNumber
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setDocumentId($documentId);
        $this->setAccessCode($accessCode);
        $this->setSlideName($slideName);
        $this->setSlideNumber($slideNumber);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
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

    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
    }

    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->value();
    }

    public function setSlideName($slideName = null)
    {
        $this->slideName = ($slideName InstanceOf InstantConferencingSlideName)
             ? $slideName
             : new InstantConferencingSlideName($slideName);
    }

    public function getSlideName()
    {
        return (!$this->slideName) ?: $this->slideName->value();
    }

    public function setSlideNumber($slideNumber = null)
    {
        $this->slideNumber = ($slideNumber InstanceOf InstantConferencingSlideNumber)
             ? $slideNumber
             : new InstantConferencingSlideNumber($slideNumber);
    }

    public function getSlideNumber()
    {
        return (!$this->slideNumber) ?: $this->slideNumber->value();
    }
}

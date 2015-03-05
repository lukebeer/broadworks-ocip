<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSlideName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Set presentation slide name of a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingSetPresentationSlideNameRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $bridgeServiceUserId,
             $documentId,
             $accessCode,
             $previousSlideName,
             $newSlideName
    ) {
        $this->userId              = new UserId($userId);
        $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
        $this->documentId          = $documentId;
        $this->accessCode          = $accessCode;
        $this->previousSlideName   = $previousSlideName;
        $this->newSlideName        = $newSlideName;
        $this->args                = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId)
    {
        $bridgeServiceUserId and $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setDocumentId($documentId)
    {
        $documentId and $this->documentId = new InstantConferencingDocumentId($documentId);
    }

    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->value();
    }

    public function setAccessCode($accessCode)
    {
        $accessCode and $this->accessCode = new InstantConferencingAccessCode($accessCode);
    }

    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->value();
    }

    public function setPreviousSlideName($previousSlideName)
    {
        $previousSlideName and $this->previousSlideName = new InstantConferencingSlideName($previousSlideName);
    }

    public function getPreviousSlideName()
    {
        return (!$this->previousSlideName) ?: $this->previousSlideName->value();
    }

    public function setNewSlideName($newSlideName)
    {
        $newSlideName and $this->newSlideName = new InstantConferencingSlideName($newSlideName);
    }

    public function getNewSlideName()
    {
        return (!$this->newSlideName) ?: $this->newSlideName->value();
    }
}

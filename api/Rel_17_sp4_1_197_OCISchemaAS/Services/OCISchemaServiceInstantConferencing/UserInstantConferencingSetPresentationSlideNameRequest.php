<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Set presentation slide name of a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingSetPresentationSlideNameRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'UserInstantConferencingSetPresentationSlideNameRequest';
    protected $userId              = null;
    protected $bridgeServiceUserId = null;
    protected $documentId          = null;
    protected $accessCode          = null;
    protected $previousSlideName   = null;
    protected $newSlideName        = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         $documentId,
         $accessCode,
         $previousSlideName,
         $newSlideName
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setDocumentId($documentId);
        $this->setAccessCode($accessCode);
        $this->setPreviousSlideName($previousSlideName);
        $this->setNewSlideName($newSlideName);
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        if (!$bridgeServiceUserId) return $this;
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setDocumentId($documentId = null)
    {
        if (!$documentId) return $this;
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
        return $this->documentId->getValue();
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        if (!$accessCode) return $this;
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
        $this->accessCode->setName('accessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $accessCode
     */
    public function getAccessCode()
    {
        return $this->accessCode->getValue();
    }

    /**
     * 
     */
    public function setPreviousSlideName($previousSlideName = null)
    {
        if (!$previousSlideName) return $this;
        $this->previousSlideName = ($previousSlideName InstanceOf InstantConferencingSlideName)
             ? $previousSlideName
             : new InstantConferencingSlideName($previousSlideName);
        $this->previousSlideName->setName('previousSlideName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideName $previousSlideName
     */
    public function getPreviousSlideName()
    {
        return $this->previousSlideName->getValue();
    }

    /**
     * 
     */
    public function setNewSlideName($newSlideName = null)
    {
        if (!$newSlideName) return $this;
        $this->newSlideName = ($newSlideName InstanceOf InstantConferencingSlideName)
             ? $newSlideName
             : new InstantConferencingSlideName($newSlideName);
        $this->newSlideName->setName('newSlideName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideName $newSlideName
     */
    public function getNewSlideName()
    {
        return $this->newSlideName->getValue();
    }
}

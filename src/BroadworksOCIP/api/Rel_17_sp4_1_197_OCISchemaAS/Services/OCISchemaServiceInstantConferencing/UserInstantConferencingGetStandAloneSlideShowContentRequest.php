<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPasswordHex;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get slide show content of a recorded conference.
 *         The response is either UserInstantConferencingGetStandAloneSlideShowContentResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneSlideShowContentRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneSlideShowContentResponse';
    public    $elementName = 'UserInstantConferencingGetStandAloneSlideShowContentRequest';
    protected $bridgeServiceUserId;
    protected $conferenceOwnerUserId;
    protected $documentId;
    protected $slideshowPasswordHex;

    public function __construct(
         $bridgeServiceUserId = '',
         $conferenceOwnerUserId = '',
         $documentId = '',
         $slideshowPasswordHex = null
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setDocumentId($documentId);
        $this->setSlideshowPasswordHex($slideshowPasswordHex);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneSlideShowContentResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setElementName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId)
            ? $this->bridgeServiceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setElementName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return ($this->conferenceOwnerUserId)
            ? $this->conferenceOwnerUserId->getElementValue()
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
    public function setSlideshowPasswordHex($slideshowPasswordHex = null)
    {
        $this->slideshowPasswordHex = ($slideshowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideshowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideshowPasswordHex);
        $this->slideshowPasswordHex->setElementName('slideshowPasswordHex');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPasswordHex $slideshowPasswordHex
     */
    public function getSlideshowPasswordHex()
    {
        return ($this->slideshowPasswordHex)
            ? $this->slideshowPasswordHex->getElementValue()
            : null;
    }
}

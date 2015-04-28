<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the list of conference documents.
 *         The response is either UserInstantConferencingGetStandAloneConferenceDocumentListResponse14
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceDocumentListRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceDocumentListResponse14';
    public    $elementName = 'UserInstantConferencingGetStandAloneConferenceDocumentListRequest14';
    protected $conferenceOwnerUserId;
    protected $conferenceKey;
    protected $isWebServerCollocated;

    public function __construct(
         $conferenceOwnerUserId = '',
         $conferenceKey = '',
         $isWebServerCollocated = ''
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setConferenceKey($conferenceKey);
        $this->setIsWebServerCollocated($isWebServerCollocated);
    }

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
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = ($conferenceKey InstanceOf InstantConferencingConferenceKey)
             ? $conferenceKey
             : new InstantConferencingConferenceKey($conferenceKey);
        $this->conferenceKey->setElementName('conferenceKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceKey $conferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }

    /**
     * 
     */
    public function setIsWebServerCollocated($isWebServerCollocated = null)
    {
        $this->isWebServerCollocated = new PrimitiveType($isWebServerCollocated);
        $this->isWebServerCollocated->setElementName('isWebServerCollocated');
        return $this;
    }

    /**
     * 
     * @return boolean $isWebServerCollocated
     */
    public function getIsWebServerCollocated()
    {
        return ($this->isWebServerCollocated)
            ? $this->isWebServerCollocated->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of conference documents.
 *         The response is either UserInstantConferencingGetStandAloneConferenceDocumentListResponse14
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceDocumentListRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceDocumentListResponse14';
    public    $name                  = 'UserInstantConferencingGetStandAloneConferenceDocumentListRequest14';
    protected $conferenceOwnerUserId = null;
    protected $conferenceKey         = null;
    protected $isWebServerCollocated = null;

    public function __construct(
         $conferenceOwnerUserId,
         InstantConferencingConferenceKey $conferenceKey,
         $isWebServerCollocated
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setConferenceKey($conferenceKey);
        $this->setIsWebServerCollocated($isWebServerCollocated);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceDocumentListResponse14 $response
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
        if (!$conferenceOwnerUserId) return $this;
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return $this->conferenceOwnerUserId->getValue();
    }

    /**
     * 
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        if (!$conferenceKey) return $this;
        $this->conferenceKey = $conferenceKey;
        $this->conferenceKey->setName('conferenceKey');
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
        if (!$isWebServerCollocated) return $this;
        $this->isWebServerCollocated = new PrimitiveType($isWebServerCollocated);
        $this->isWebServerCollocated->setName('isWebServerCollocated');
        return $this;
    }

    /**
     * 
     * @return boolean $isWebServerCollocated
     */
    public function getIsWebServerCollocated()
    {
        return $this->isWebServerCollocated->getValue();
    }
}

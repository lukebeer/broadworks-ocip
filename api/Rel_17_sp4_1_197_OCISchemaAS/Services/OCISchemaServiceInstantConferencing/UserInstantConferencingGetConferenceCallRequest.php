<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the information of a conference call owned or delegated by the user.
 *         The response is either UserInstantConferencingGetConferenceCallResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetConferenceCallRequest extends ComplexType implements ComplexInterface
{
    public    $responseType     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceCallResponse';
    public    $name             = 'UserInstantConferencingGetConferenceCallRequest';
    protected $userId           = null;
    protected $conferenceKey    = null;
    protected $conferenceCallId = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey,
         $conferenceCallId
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceCallResponse $response
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
    public function setConferenceCallId($conferenceCallId = null)
    {
        if (!$conferenceCallId) return $this;
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId $conferenceCallId
     */
    public function getConferenceCallId()
    {
        return $this->conferenceCallId->getValue();
    }
}

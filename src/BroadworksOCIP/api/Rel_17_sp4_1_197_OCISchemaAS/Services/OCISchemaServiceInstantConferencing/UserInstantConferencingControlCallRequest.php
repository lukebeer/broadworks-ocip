<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallControlAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingParticipantName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingLegId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Control a conference call.
 *         The legId is given in the UserInstantConferencingGetConferenceCallResponse.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingControlCallRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingControlCallRequest';
    protected $userId;
    protected $conferenceKey;
    protected $conferenceCallId;
    protected $action;
    protected $phoneNumber;
    protected $userName;
    protected $legId;

    public function __construct(
         $userId = '',
         $conferenceKey = '',
         $conferenceCallId = '',
         $action = '',
         $phoneNumber = null,
         $userName = null,
         $legId = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
        $this->setAction($action);
        $this->setPhoneNumber($phoneNumber);
        $this->setUserName($userName);
        $this->setLegId($legId);
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
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
    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setElementName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId $conferenceCallId
     */
    public function getConferenceCallId()
    {
        return ($this->conferenceCallId)
            ? $this->conferenceCallId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf InstantConferencingCallControlAction)
             ? $action
             : new InstantConferencingCallControlAction($action);
        $this->action->setElementName('action');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallControlAction $action
     */
    public function getAction()
    {
        return ($this->action)
            ? $this->action->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $phoneNumber
             : new OutgoingDNorSIPURI($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf InstantConferencingParticipantName)
             ? $userName
             : new InstantConferencingParticipantName($userName);
        $this->userName->setElementName('userName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingParticipantName $userName
     */
    public function getUserName()
    {
        return ($this->userName)
            ? $this->userName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLegId($legId = null)
    {
        $this->legId = ($legId InstanceOf InstantConferencingLegId)
             ? $legId
             : new InstantConferencingLegId($legId);
        $this->legId->setElementName('legId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingLegId $legId
     */
    public function getLegId()
    {
        return ($this->legId)
            ? $this->legId->getElementValue()
            : null;
    }
}

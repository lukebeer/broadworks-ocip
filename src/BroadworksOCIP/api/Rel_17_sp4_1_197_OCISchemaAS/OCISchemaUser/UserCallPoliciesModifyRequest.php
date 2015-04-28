<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConnectedLineIdentificationPrivacyOnRedirectedCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\CallBeingForwardedResponseCallType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Call Policies.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallPoliciesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallPoliciesModifyRequest';
    protected $userId;
    protected $redirectedCallsCOLPPrivacy;
    protected $callBeingForwardedResponseCallType;

    public function __construct(
         $userId = '',
         $redirectedCallsCOLPPrivacy = null,
         $callBeingForwardedResponseCallType = null
    ) {
        $this->setUserId($userId);
        $this->setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy);
        $this->setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
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
    public function setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy = null)
    {
        $this->redirectedCallsCOLPPrivacy = ($redirectedCallsCOLPPrivacy InstanceOf ConnectedLineIdentificationPrivacyOnRedirectedCalls)
             ? $redirectedCallsCOLPPrivacy
             : new ConnectedLineIdentificationPrivacyOnRedirectedCalls($redirectedCallsCOLPPrivacy);
        $this->redirectedCallsCOLPPrivacy->setElementName('redirectedCallsCOLPPrivacy');
        return $this;
    }

    /**
     * 
     * @return ConnectedLineIdentificationPrivacyOnRedirectedCalls $redirectedCallsCOLPPrivacy
     */
    public function getRedirectedCallsCOLPPrivacy()
    {
        return ($this->redirectedCallsCOLPPrivacy)
            ? $this->redirectedCallsCOLPPrivacy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType = null)
    {
        $this->callBeingForwardedResponseCallType = ($callBeingForwardedResponseCallType InstanceOf CallBeingForwardedResponseCallType)
             ? $callBeingForwardedResponseCallType
             : new CallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
        $this->callBeingForwardedResponseCallType->setElementName('callBeingForwardedResponseCallType');
        return $this;
    }

    /**
     * 
     * @return CallBeingForwardedResponseCallType $callBeingForwardedResponseCallType
     */
    public function getCallBeingForwardedResponseCallType()
    {
        return ($this->callBeingForwardedResponseCallType)
            ? $this->callBeingForwardedResponseCallType->getElementValue()
            : null;
    }
}

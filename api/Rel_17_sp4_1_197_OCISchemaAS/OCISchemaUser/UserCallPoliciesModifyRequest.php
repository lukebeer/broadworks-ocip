<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConnectedLineIdentificationPrivacyOnRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\CallBeingForwardedResponseCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Policies.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallPoliciesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                               = 'UserCallPoliciesModifyRequest';
    protected $userId                             = null;
    protected $redirectedCallsCOLPPrivacy         = null;
    protected $callBeingForwardedResponseCallType = null;

    public function __construct(
         $userId,
         $redirectedCallsCOLPPrivacy = null,
         $callBeingForwardedResponseCallType = null
    ) {
        $this->setUserId($userId);
        $this->setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy);
        $this->setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
    }

    /**
     * @return 
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
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy = null)
    {
        if (!$redirectedCallsCOLPPrivacy) return $this;
        $this->redirectedCallsCOLPPrivacy = ($redirectedCallsCOLPPrivacy InstanceOf ConnectedLineIdentificationPrivacyOnRedirectedCalls)
             ? $redirectedCallsCOLPPrivacy
             : new ConnectedLineIdentificationPrivacyOnRedirectedCalls($redirectedCallsCOLPPrivacy);
        $this->redirectedCallsCOLPPrivacy->setName('redirectedCallsCOLPPrivacy');
        return $this;
    }

    /**
     * 
     * @return ConnectedLineIdentificationPrivacyOnRedirectedCalls
     */
    public function getRedirectedCallsCOLPPrivacy()
    {
        return $this->redirectedCallsCOLPPrivacy->getValue();
    }

    /**
     * 
     */
    public function setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType = null)
    {
        if (!$callBeingForwardedResponseCallType) return $this;
        $this->callBeingForwardedResponseCallType = ($callBeingForwardedResponseCallType InstanceOf CallBeingForwardedResponseCallType)
             ? $callBeingForwardedResponseCallType
             : new CallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
        $this->callBeingForwardedResponseCallType->setName('callBeingForwardedResponseCallType');
        return $this;
    }

    /**
     * 
     * @return CallBeingForwardedResponseCallType
     */
    public function getCallBeingForwardedResponseCallType()
    {
        return $this->callBeingForwardedResponseCallType->getValue();
    }
}

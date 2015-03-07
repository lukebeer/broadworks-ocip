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


/**
 * Modify the user level data associated with Call Policies.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallPoliciesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $userId                              = null;
    protected $redirectedCallsCOLPPrivacy          = null;
    protected $callBeingForwardedResponseCallType  = null;

    public function __construct(
         $userId,
         $redirectedCallsCOLPPrivacy = null,
         $callBeingForwardedResponseCallType = null
    ) {
        $this->setUserId($userId);
        $this->setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy);
        $this->setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
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

    public function setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy = null)
    {
        $this->redirectedCallsCOLPPrivacy = ($redirectedCallsCOLPPrivacy InstanceOf ConnectedLineIdentificationPrivacyOnRedirectedCalls)
             ? $redirectedCallsCOLPPrivacy
             : new ConnectedLineIdentificationPrivacyOnRedirectedCalls($redirectedCallsCOLPPrivacy);
    }

    public function getRedirectedCallsCOLPPrivacy()
    {
        return (!$this->redirectedCallsCOLPPrivacy) ?: $this->redirectedCallsCOLPPrivacy->value();
    }

    public function setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType = null)
    {
        $this->callBeingForwardedResponseCallType = ($callBeingForwardedResponseCallType InstanceOf CallBeingForwardedResponseCallType)
             ? $callBeingForwardedResponseCallType
             : new CallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
    }

    public function getCallBeingForwardedResponseCallType()
    {
        return (!$this->callBeingForwardedResponseCallType) ?: $this->callBeingForwardedResponseCallType->value();
    }
}

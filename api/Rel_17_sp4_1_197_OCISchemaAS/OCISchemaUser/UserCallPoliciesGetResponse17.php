<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConnectedLineIdentificationPrivacyOnRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\CallBeingForwardedResponseCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallPoliciesGetRequest17.
 */
class UserCallPoliciesGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallPoliciesGetResponse17';
    protected $redirectedCallsCOLPPrivacy;
    protected $callBeingForwardedResponseCallType;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserCallPoliciesGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy = null)
    {
        $this->redirectedCallsCOLPPrivacy = ($redirectedCallsCOLPPrivacy InstanceOf ConnectedLineIdentificationPrivacyOnRedirectedCalls)
             ? $redirectedCallsCOLPPrivacy
             : new ConnectedLineIdentificationPrivacyOnRedirectedCalls($redirectedCallsCOLPPrivacy);
        $this->redirectedCallsCOLPPrivacy->setName('redirectedCallsCOLPPrivacy');
        return $this;
    }

    /**
     * 
     * @return ConnectedLineIdentificationPrivacyOnRedirectedCalls $redirectedCallsCOLPPrivacy
     */
    public function getRedirectedCallsCOLPPrivacy()
    {
        return ($this->redirectedCallsCOLPPrivacy) ? $this->redirectedCallsCOLPPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType = null)
    {
        $this->callBeingForwardedResponseCallType = ($callBeingForwardedResponseCallType InstanceOf CallBeingForwardedResponseCallType)
             ? $callBeingForwardedResponseCallType
             : new CallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
        $this->callBeingForwardedResponseCallType->setName('callBeingForwardedResponseCallType');
        return $this;
    }

    /**
     * 
     * @return CallBeingForwardedResponseCallType $callBeingForwardedResponseCallType
     */
    public function getCallBeingForwardedResponseCallType()
    {
        return ($this->callBeingForwardedResponseCallType) ? $this->callBeingForwardedResponseCallType->getValue() : null;
    }
}

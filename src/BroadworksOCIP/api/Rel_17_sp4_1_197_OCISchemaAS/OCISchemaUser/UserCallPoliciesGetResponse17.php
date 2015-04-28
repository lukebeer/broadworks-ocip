<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConnectedLineIdentificationPrivacyOnRedirectedCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\CallBeingForwardedResponseCallType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallPoliciesGetRequest17.
 */
class UserCallPoliciesGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallPoliciesGetResponse17';
    protected $redirectedCallsCOLPPrivacy;
    protected $callBeingForwardedResponseCallType;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserCallPoliciesGetResponse17 $response
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

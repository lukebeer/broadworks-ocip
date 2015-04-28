<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConnectedLineIdentificationPrivacyOnRedirectedCalls;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallPoliciesGetRequest.
 */
class UserCallPoliciesGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallPoliciesGetResponse';
    protected $redirectedCallsCOLPPrivacy;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserCallPoliciesGetResponse $response
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
}

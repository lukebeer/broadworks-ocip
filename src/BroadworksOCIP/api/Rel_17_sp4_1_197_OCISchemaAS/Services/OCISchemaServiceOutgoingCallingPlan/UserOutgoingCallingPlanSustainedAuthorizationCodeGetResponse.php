<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanAuthorizationCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse';
    protected $code;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf OutgoingCallingPlanAuthorizationCode)
             ? $code
             : new OutgoingCallingPlanAuthorizationCode($code);
        $this->code->setElementName('code');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCode $code
     */
    public function getCode()
    {
        return ($this->code)
            ? $this->code->getElementValue()
            : null;
    }
}

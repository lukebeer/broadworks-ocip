<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get a list of unlicensed users who are preventing the Call Center from upgrading to another type.
 *         The response is either GroupCallCenterGetUnlicensedAgentListRequest or ErrorResponse.
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetUnlicensedAgentListResponse';
    public    $elementName = 'GroupCallCenterGetUnlicensedAgentListRequest';
    protected $serviceUserId;
    protected $callCenterType;

    public function __construct(
         $serviceUserId = '',
         $callCenterType = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setCallCenterType($callCenterType);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetUnlicensedAgentListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallCenterType($callCenterType = null)
    {
        $this->callCenterType = ($callCenterType InstanceOf CallCenterType)
             ? $callCenterType
             : new CallCenterType($callCenterType);
        $this->callCenterType->setElementName('callCenterType');
        return $this;
    }

    /**
     * 
     * @return CallCenterType $callCenterType
     */
    public function getCallCenterType()
    {
        return ($this->callCenterType)
            ? $this->callCenterType->getElementValue()
            : null;
    }
}

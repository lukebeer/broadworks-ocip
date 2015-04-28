<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentAvailability;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request for an agent to login or logout of one or more Call Centers.
 *         Contains a list specifing the desired login status of one or more call centers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCallCenterModifyRequest
 */
class UserCallCenterModifyAvailabilityListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterModifyAvailabilityListRequest';
    protected $userId;
    protected $callCenterAvailability;

    public function __construct(
         $userId = '',
         $callCenterAvailability = null
    ) {
        $this->setUserId($userId);
        $this->setCallCenterAvailability($callCenterAvailability);
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
    public function setCallCenterAvailability(CallCenterAgentAvailability $callCenterAvailability = null)
    {
        $this->callCenterAvailability = ($callCenterAvailability InstanceOf CallCenterAgentAvailability)
             ? $callCenterAvailability
             : new CallCenterAgentAvailability($callCenterAvailability);
        $this->callCenterAvailability->setElementName('callCenterAvailability');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentAvailability $callCenterAvailability
     */
    public function getCallCenterAvailability()
    {
        return $this->callCenterAvailability;
    }
}

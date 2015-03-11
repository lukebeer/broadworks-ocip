<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentAvailability;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request for an agent to login or logout of one or more Call Centers.
 *         Contains a list specifing the desired login status of one or more call centers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCallCenterModifyRequest
 */
class UserCallCenterModifyAvailabilityListRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'UserCallCenterModifyAvailabilityListRequest';
    protected $userId                 = null;
    protected $callCenterAvailability = null;

    public function __construct(
         $userId,
         CallCenterAgentAvailability $callCenterAvailability = null
    ) {
        $this->setUserId($userId);
        $this->setCallCenterAvailability($callCenterAvailability);
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
    public function setCallCenterAvailability(CallCenterAgentAvailability $callCenterAvailability = null)
    {
        if (!$callCenterAvailability) return $this;
        $this->callCenterAvailability = $callCenterAvailability;
        $this->callCenterAvailability->setName('callCenterAvailability');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentAvailability
     */
    public function getCallCenterAvailability()
    {
        return $this->callCenterAvailability;
    }
}

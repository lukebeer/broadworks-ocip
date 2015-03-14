<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of unlicensed users who are preventing the Call Center from upgrading to another type.
 *         The response is either GroupCallCenterGetUnlicensedAgentListRequest or ErrorResponse.
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetUnlicensedAgentListResponse';
    public    $name           = 'GroupCallCenterGetUnlicensedAgentListRequest';
    protected $serviceUserId  = null;
    protected $callCenterType = null;

    public function __construct(
         $serviceUserId,
         $callCenterType
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setCallCenterType($callCenterType);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetUnlicensedAgentListResponse $response
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
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setCallCenterType($callCenterType = null)
    {
        if (!$callCenterType) return $this;
        $this->callCenterType = ($callCenterType InstanceOf CallCenterType)
             ? $callCenterType
             : new CallCenterType($callCenterType);
        $this->callCenterType->setName('callCenterType');
        return $this;
    }

    /**
     * 
     * @return CallCenterType $callCenterType
     */
    public function getCallCenterType()
    {
        return $this->callCenterType->getValue();
    }
}

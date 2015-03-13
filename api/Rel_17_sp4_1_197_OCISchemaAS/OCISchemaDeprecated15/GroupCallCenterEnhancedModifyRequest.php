<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the Call Center Enhanced configuration data for a Call
 *         Center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyInstanceRequest16
 */
class GroupCallCenterEnhancedModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupCallCenterEnhancedModifyRequest';
    protected $serviceUserId           = null;
    protected $overrideAgentWrapUpTime = null;
    protected $wrapUpSeconds           = null;

    public function __construct(
         $serviceUserId,
         $overrideAgentWrapUpTime = null,
         $wrapUpSeconds = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setOverrideAgentWrapUpTime($overrideAgentWrapUpTime);
        $this->setWrapUpSeconds($wrapUpSeconds);
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
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime = null)
    {
        if (!$overrideAgentWrapUpTime) return $this;
        $this->overrideAgentWrapUpTime = new PrimitiveType($overrideAgentWrapUpTime);
        $this->overrideAgentWrapUpTime->setName('overrideAgentWrapUpTime');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideAgentWrapUpTime
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime->getValue();
    }

    /**
     * 
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        if (!$wrapUpSeconds) return $this;
        $this->wrapUpSeconds = ($wrapUpSeconds InstanceOf CallCenterWrapUpSeconds)
             ? $wrapUpSeconds
             : new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->wrapUpSeconds->setName('wrapUpSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterWrapUpSeconds $wrapUpSeconds
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds->getValue();
    }
}

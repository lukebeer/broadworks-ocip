<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingPlanDigitPatternName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a calling plan Pinhole digit string. The name is a key; it cannot be changed.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $name              = null;
    protected $digitPattern      = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $digitPattern = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setDigitPattern($digitPattern);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CallingPlanDigitPatternName)
             ? $name
             : new CallingPlanDigitPatternName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallingPlanDigitPatternName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setDigitPattern($digitPattern = null)
    {
        if (!$digitPattern) return $this;
        $this->digitPattern = ($digitPattern InstanceOf CallingPlanDigitPattern)
             ? $digitPattern
             : new CallingPlanDigitPattern($digitPattern);
        $this->digitPattern->setName('digitPattern');
        return $this;
    }

    /**
     * 
     * @return CallingPlanDigitPattern $digitPattern
     */
    public function getDigitPattern()
    {
        return $this->digitPattern->getValue();
    }
}

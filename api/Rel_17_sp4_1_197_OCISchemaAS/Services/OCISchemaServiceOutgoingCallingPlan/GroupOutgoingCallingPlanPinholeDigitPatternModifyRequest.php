<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPlan\CallingPlanDigitPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingPlanDigitPatternName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a calling plan Pinhole digit string. The name is a key; it cannot be changed.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Name of a calling plan digit pattern.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallingPlanDigitPatternName)
             ? $name
             : new CallingPlanDigitPatternName($name);
    }

    /**
     * Name of a calling plan digit pattern.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Digit patterns that are used to restrict calls in the Incoming Calling Plan and Outgoing Calling Plan.
     *         The digit pattern may contain digits 0-9,+,?, and trailing * digit.
     *         Starting in Rel.14.sp4 digit patterns can also contain '#', and '*' digits anywhere in the string. To distinguish between a '*' as a digit from '*' as a wildcard character, a back-slash character shall be used as an escape in front of '*' being a digit. Note that '*' as a wildcard is still only allowed at the end of string.
     *         Starting in Rel.17.sp3, the range syntax [n1-n2] is also supported, where n1 and n2 denotes a digit in the range 0 to 9. Also the maximum length is increased to 160.
     */
    public function setDigitPattern($digitPattern = null)
    {
        $this->digitPattern = ($digitPattern InstanceOf CallingPlanDigitPattern)
             ? $digitPattern
             : new CallingPlanDigitPattern($digitPattern);
    }

    /**
     * Digit patterns that are used to restrict calls in the Incoming Calling Plan and Outgoing Calling Plan.
     *         The digit pattern may contain digits 0-9,+,?, and trailing * digit.
     *         Starting in Rel.14.sp4 digit patterns can also contain '#', and '*' digits anywhere in the string. To distinguish between a '*' as a digit from '*' as a wildcard character, a back-slash character shall be used as an escape in front of '*' being a digit. Note that '*' as a wildcard is still only allowed at the end of string.
     *         Starting in Rel.17.sp3, the range syntax [n1-n2] is also supported, where n1 and n2 denotes a digit in the range 0 to 9. Also the maximum length is increased to 160.
     */
    public function getDigitPattern()
    {
        return (!$this->digitPattern) ?: $this->digitPattern->getValue();
    }
}

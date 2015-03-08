<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a service provider schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderScheduleAddRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $scheduleName      = null;
    protected $scheduleType      = null;

    public function __construct(
         $serviceProviderId,
         $scheduleName,
         $scheduleType
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setScheduleName($scheduleName);
        $this->setScheduleType($scheduleType);
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
     * Schedule name.
     */
    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = ($scheduleName InstanceOf ScheduleName)
             ? $scheduleName
             : new ScheduleName($scheduleName);
    }

    /**
     * Schedule name.
     */
    public function getScheduleName()
    {
        return (!$this->scheduleName) ?: $this->scheduleName->getValue();
    }

    /**
     * Schedule type.
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
    }

    /**
     * Schedule type.
     */
    public function getScheduleType()
    {
        return (!$this->scheduleType) ?: $this->scheduleType->getValue();
    }
}

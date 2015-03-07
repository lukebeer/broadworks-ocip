<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportSearchIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterDaysAfterScheduledReportCompletion;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterMaximumScheduledReportsPerInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system settings for the call center enhanced reporting scheduling tasks.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $scheduledReportSearchIntervalMinutes      = null;
    protected $maximumScheduledReportsPerInterval        = null;
    protected $deleteScheduledReportDaysAfterCompletion  = null;

    public function __construct(
         $scheduledReportSearchIntervalMinutes = null,
         $maximumScheduledReportsPerInterval = null,
         $deleteScheduledReportDaysAfterCompletion = null
    ) {
        $this->setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
        $this->setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
        $this->setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion);
    }

    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes = null)
    {
        $this->scheduledReportSearchIntervalMinutes = ($scheduledReportSearchIntervalMinutes InstanceOf CallCenterScheduledReportSearchIntervalMinutes)
             ? $scheduledReportSearchIntervalMinutes
             : new CallCenterScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
    }

    public function getScheduledReportSearchIntervalMinutes()
    {
        return (!$this->scheduledReportSearchIntervalMinutes) ?: $this->scheduledReportSearchIntervalMinutes->value();
    }

    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval = null)
    {
        $this->maximumScheduledReportsPerInterval = ($maximumScheduledReportsPerInterval InstanceOf CallCenterMaximumScheduledReportsPerInterval)
             ? $maximumScheduledReportsPerInterval
             : new CallCenterMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
    }

    public function getMaximumScheduledReportsPerInterval()
    {
        return (!$this->maximumScheduledReportsPerInterval) ?: $this->maximumScheduledReportsPerInterval->value();
    }

    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion = null)
    {
        $this->deleteScheduledReportDaysAfterCompletion = ($deleteScheduledReportDaysAfterCompletion InstanceOf CallCenterDaysAfterScheduledReportCompletion)
             ? $deleteScheduledReportDaysAfterCompletion
             : new CallCenterDaysAfterScheduledReportCompletion($deleteScheduledReportDaysAfterCompletion);
    }

    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return (!$this->deleteScheduledReportDaysAfterCompletion) ?: $this->deleteScheduledReportDaysAfterCompletion->value();
    }
}

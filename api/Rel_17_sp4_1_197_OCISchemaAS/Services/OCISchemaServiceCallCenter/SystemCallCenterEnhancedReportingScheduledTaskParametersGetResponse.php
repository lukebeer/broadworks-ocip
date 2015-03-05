<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportSearchIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMaximumScheduledReportsPerInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterDaysAfterScheduledReportCompletion;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $scheduledReportSearchIntervalMinutes,
             $maximumScheduledReportsPerInterval,
             $deleteScheduledReportDaysAfterCompletion
    ) {
        $this->scheduledReportSearchIntervalMinutes     = $scheduledReportSearchIntervalMinutes;
        $this->maximumScheduledReportsPerInterval       = $maximumScheduledReportsPerInterval;
        $this->deleteScheduledReportDaysAfterCompletion = $deleteScheduledReportDaysAfterCompletion;
        $this->args                                     = func_get_args();
    }

    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes)
    {
        $scheduledReportSearchIntervalMinutes and $this->scheduledReportSearchIntervalMinutes = new CallCenterScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
    }

    public function getScheduledReportSearchIntervalMinutes()
    {
        return (!$this->scheduledReportSearchIntervalMinutes) ?: $this->scheduledReportSearchIntervalMinutes->value();
    }

    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval)
    {
        $maximumScheduledReportsPerInterval and $this->maximumScheduledReportsPerInterval = new CallCenterMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
    }

    public function getMaximumScheduledReportsPerInterval()
    {
        return (!$this->maximumScheduledReportsPerInterval) ?: $this->maximumScheduledReportsPerInterval->value();
    }

    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion)
    {
        $deleteScheduledReportDaysAfterCompletion and $this->deleteScheduledReportDaysAfterCompletion = new CallCenterDaysAfterScheduledReportCompletion($deleteScheduledReportDaysAfterCompletion);
    }

    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return (!$this->deleteScheduledReportDaysAfterCompletion) ?: $this->deleteScheduledReportDaysAfterCompletion->value();
    }
}

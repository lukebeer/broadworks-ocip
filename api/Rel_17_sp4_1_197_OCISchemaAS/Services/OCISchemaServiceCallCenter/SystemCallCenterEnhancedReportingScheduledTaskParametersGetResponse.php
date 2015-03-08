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
     * Response to SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $scheduledReportSearchIntervalMinutes     = null;
    protected $maximumScheduledReportsPerInterval       = null;
    protected $deleteScheduledReportDaysAfterCompletion = null;


    /**
     * Indicates how often we search for a scheduled report to process.
     */
    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes = null)
    {
        $this->scheduledReportSearchIntervalMinutes = ($scheduledReportSearchIntervalMinutes InstanceOf CallCenterScheduledReportSearchIntervalMinutes)
             ? $scheduledReportSearchIntervalMinutes
             : new CallCenterScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
    }

    /**
     * Indicates how often we search for a scheduled report to process.
     */
    public function getScheduledReportSearchIntervalMinutes()
    {
        return (!$this->scheduledReportSearchIntervalMinutes) ?: $this->scheduledReportSearchIntervalMinutes->getValue();
    }

    /**
     * Maximum number of call center scheduled report can be processed per report search interval.
     */
    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval = null)
    {
        $this->maximumScheduledReportsPerInterval = ($maximumScheduledReportsPerInterval InstanceOf CallCenterMaximumScheduledReportsPerInterval)
             ? $maximumScheduledReportsPerInterval
             : new CallCenterMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
    }

    /**
     * Maximum number of call center scheduled report can be processed per report search interval.
     */
    public function getMaximumScheduledReportsPerInterval()
    {
        return (!$this->maximumScheduledReportsPerInterval) ?: $this->maximumScheduledReportsPerInterval->getValue();
    }

    /**
     * The number of days after a scheduled report is completed.
     */
    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion = null)
    {
        $this->deleteScheduledReportDaysAfterCompletion = ($deleteScheduledReportDaysAfterCompletion InstanceOf CallCenterDaysAfterScheduledReportCompletion)
             ? $deleteScheduledReportDaysAfterCompletion
             : new CallCenterDaysAfterScheduledReportCompletion($deleteScheduledReportDaysAfterCompletion);
    }

    /**
     * The number of days after a scheduled report is completed.
     */
    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return (!$this->deleteScheduledReportDaysAfterCompletion) ?: $this->deleteScheduledReportDaysAfterCompletion->getValue();
    }
}

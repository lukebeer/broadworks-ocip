<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CallCenterQueueStatistics13mp8;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CallCenterAgentStatistics13mp8;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Contains Call Center statistics.
 *         Replaced By: GroupCallCenterGetInstanceStatisticsResponse14sp9
 */
class GroupCallCenterGetInstanceStatisticsResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $numberOfCallsQueuedNow   = null;
    protected $generateDailyReport      = null;
    protected $collectionPeriodMinutes  = null;
    protected $reportingEmailAddress1   = null;
    protected $reportingEmailAddress2   = null;
    protected $queueStatisticsYesterday = null;
    protected $queueStatisticsToday     = null;
    protected $agentStatistics          = null;


    /**
     * 
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow = null)
    {
        $this->numberOfCallsQueuedNow = (int) $numberOfCallsQueuedNow;
    }

    /**
     * 
     */
    public function getNumberOfCallsQueuedNow()
    {
        return (!$this->numberOfCallsQueuedNow) ?: $this->numberOfCallsQueuedNow->getValue();
    }

    /**
     * 
     */
    public function setGenerateDailyReport($generateDailyReport = null)
    {
        $this->generateDailyReport = (boolean) $generateDailyReport;
    }

    /**
     * 
     */
    public function getGenerateDailyReport()
    {
        return (!$this->generateDailyReport) ?: $this->generateDailyReport->getValue();
    }

    /**
     * Statistics reporting interval in minutes.
     */
    public function setCollectionPeriodMinutes($collectionPeriodMinutes = null)
    {
        $this->collectionPeriodMinutes = ($collectionPeriodMinutes InstanceOf CallCenterStatisticsCollectionPeriodMinutes)
             ? $collectionPeriodMinutes
             : new CallCenterStatisticsCollectionPeriodMinutes($collectionPeriodMinutes);
    }

    /**
     * Statistics reporting interval in minutes.
     */
    public function getCollectionPeriodMinutes()
    {
        return (!$this->collectionPeriodMinutes) ?: $this->collectionPeriodMinutes->getValue();
    }

    /**
     * Email Address
     */
    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        $this->reportingEmailAddress1 = ($reportingEmailAddress1 InstanceOf EmailAddress)
             ? $reportingEmailAddress1
             : new EmailAddress($reportingEmailAddress1);
    }

    /**
     * Email Address
     */
    public function getReportingEmailAddress1()
    {
        return (!$this->reportingEmailAddress1) ?: $this->reportingEmailAddress1->getValue();
    }

    /**
     * Email Address
     */
    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        $this->reportingEmailAddress2 = ($reportingEmailAddress2 InstanceOf EmailAddress)
             ? $reportingEmailAddress2
             : new EmailAddress($reportingEmailAddress2);
    }

    /**
     * Email Address
     */
    public function getReportingEmailAddress2()
    {
        return (!$this->reportingEmailAddress2) ?: $this->reportingEmailAddress2->getValue();
    }

    /**
     * Contains Call Center Queue statistics.
     */
    public function setQueueStatisticsYesterday(CallCenterQueueStatistics13mp8 $queueStatisticsYesterday = null)
    {
        $this->queueStatisticsYesterday =  $queueStatisticsYesterday;
    }

    /**
     * Contains Call Center Queue statistics.
     */
    public function getQueueStatisticsYesterday()
    {
        return (!$this->queueStatisticsYesterday) ?: $this->queueStatisticsYesterday->getValue();
    }

    /**
     * Contains Call Center Queue statistics.
     */
    public function setQueueStatisticsToday(CallCenterQueueStatistics13mp8 $queueStatisticsToday = null)
    {
        $this->queueStatisticsToday =  $queueStatisticsToday;
    }

    /**
     * Contains Call Center Queue statistics.
     */
    public function getQueueStatisticsToday()
    {
        return (!$this->queueStatisticsToday) ?: $this->queueStatisticsToday->getValue();
    }

    /**
     * Contains Call Center statistics for a specified agent.
     */
    public function setAgentStatistics(CallCenterAgentStatistics13mp8 $agentStatistics = null)
    {
        $this->agentStatistics =  $agentStatistics;
    }

    /**
     * Contains Call Center statistics for a specified agent.
     */
    public function getAgentStatistics()
    {
        return (!$this->agentStatistics) ?: $this->agentStatistics->getValue();
    }
}

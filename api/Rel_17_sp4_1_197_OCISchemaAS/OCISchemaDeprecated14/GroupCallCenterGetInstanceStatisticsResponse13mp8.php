<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueStatistics13mp8;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentStatistics13mp8;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains Call Center statistics.
 *         Replaced By: GroupCallCenterGetInstanceStatisticsResponse14sp9
 */
class GroupCallCenterGetInstanceStatisticsResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $numberOfCallsQueuedNow,
             $generateDailyReport,
             $collectionPeriodMinutes,
             $reportingEmailAddress1=null,
             $reportingEmailAddress2=null,
             $queueStatisticsYesterday,
             $queueStatisticsToday,
             $agentStatistics=null
    ) {
        $this->numberOfCallsQueuedNow   = $numberOfCallsQueuedNow;
        $this->generateDailyReport      = $generateDailyReport;
        $this->collectionPeriodMinutes  = $collectionPeriodMinutes;
        $this->reportingEmailAddress1   = new EmailAddress($reportingEmailAddress1);
        $this->reportingEmailAddress2   = new EmailAddress($reportingEmailAddress2);
        $this->queueStatisticsYesterday = $queueStatisticsYesterday;
        $this->queueStatisticsToday     = $queueStatisticsToday;
        $this->agentStatistics          = $agentStatistics;
        $this->args                     = func_get_args();
    }

    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow)
    {
        $numberOfCallsQueuedNow and $this->numberOfCallsQueuedNow = new xs:int($numberOfCallsQueuedNow);
    }

    public function getNumberOfCallsQueuedNow()
    {
        return (!$this->numberOfCallsQueuedNow) ?: $this->numberOfCallsQueuedNow->value();
    }

    public function setGenerateDailyReport($generateDailyReport)
    {
        $generateDailyReport and $this->generateDailyReport = new xs:boolean($generateDailyReport);
    }

    public function getGenerateDailyReport()
    {
        return (!$this->generateDailyReport) ?: $this->generateDailyReport->value();
    }

    public function setCollectionPeriodMinutes($collectionPeriodMinutes)
    {
        $collectionPeriodMinutes and $this->collectionPeriodMinutes = new CallCenterStatisticsCollectionPeriodMinutes($collectionPeriodMinutes);
    }

    public function getCollectionPeriodMinutes()
    {
        return (!$this->collectionPeriodMinutes) ?: $this->collectionPeriodMinutes->value();
    }

    public function setReportingEmailAddress1($reportingEmailAddress1)
    {
        $reportingEmailAddress1 and $this->reportingEmailAddress1 = new EmailAddress($reportingEmailAddress1);
    }

    public function getReportingEmailAddress1()
    {
        return (!$this->reportingEmailAddress1) ?: $this->reportingEmailAddress1->value();
    }

    public function setReportingEmailAddress2($reportingEmailAddress2)
    {
        $reportingEmailAddress2 and $this->reportingEmailAddress2 = new EmailAddress($reportingEmailAddress2);
    }

    public function getReportingEmailAddress2()
    {
        return (!$this->reportingEmailAddress2) ?: $this->reportingEmailAddress2->value();
    }

    public function setQueueStatisticsYesterday($queueStatisticsYesterday)
    {
        $queueStatisticsYesterday and $this->queueStatisticsYesterday = new CallCenterQueueStatistics13mp8($queueStatisticsYesterday);
    }

    public function getQueueStatisticsYesterday()
    {
        return (!$this->queueStatisticsYesterday) ?: $this->queueStatisticsYesterday->value();
    }

    public function setQueueStatisticsToday($queueStatisticsToday)
    {
        $queueStatisticsToday and $this->queueStatisticsToday = new CallCenterQueueStatistics13mp8($queueStatisticsToday);
    }

    public function getQueueStatisticsToday()
    {
        return (!$this->queueStatisticsToday) ?: $this->queueStatisticsToday->value();
    }

    public function setAgentStatistics($agentStatistics)
    {
        $agentStatistics and $this->agentStatistics = new CallCenterAgentStatistics13mp8($agentStatistics);
    }

    public function getAgentStatistics()
    {
        return (!$this->agentStatistics) ?: $this->agentStatistics->value();
    }
}

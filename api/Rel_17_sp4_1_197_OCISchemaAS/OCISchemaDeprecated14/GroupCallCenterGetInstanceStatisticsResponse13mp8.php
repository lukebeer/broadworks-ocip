<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CallCenterAgentStatistics13mp8;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CallCenterQueueStatistics13mp8;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center statistics.
 *         Replaced By: GroupCallCenterGetInstanceStatisticsResponse14sp9
 */
class GroupCallCenterGetInstanceStatisticsResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterGetInstanceStatisticsResponse13mp8';
    protected $numberOfCallsQueuedNow;
    protected $generateDailyReport;
    protected $collectionPeriodMinutes;
    protected $reportingEmailAddress1;
    protected $reportingEmailAddress2;
    protected $queueStatisticsYesterday;
    protected $queueStatisticsToday;
    protected $agentStatistics;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetInstanceStatisticsResponse13mp8 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow = null)
    {
        $this->numberOfCallsQueuedNow = new PrimitiveType($numberOfCallsQueuedNow);
        $this->numberOfCallsQueuedNow->setName('numberOfCallsQueuedNow');
        return $this;
    }

    /**
     * 
     * @return int $numberOfCallsQueuedNow
     */
    public function getNumberOfCallsQueuedNow()
    {
        return ($this->numberOfCallsQueuedNow) ? $this->numberOfCallsQueuedNow->getValue() : null;
    }

    /**
     * 
     */
    public function setGenerateDailyReport($generateDailyReport = null)
    {
        $this->generateDailyReport = new PrimitiveType($generateDailyReport);
        $this->generateDailyReport->setName('generateDailyReport');
        return $this;
    }

    /**
     * 
     * @return boolean $generateDailyReport
     */
    public function getGenerateDailyReport()
    {
        return ($this->generateDailyReport) ? $this->generateDailyReport->getValue() : null;
    }

    /**
     * 
     */
    public function setCollectionPeriodMinutes($collectionPeriodMinutes = null)
    {
        $this->collectionPeriodMinutes = ($collectionPeriodMinutes InstanceOf CallCenterStatisticsCollectionPeriodMinutes)
             ? $collectionPeriodMinutes
             : new CallCenterStatisticsCollectionPeriodMinutes($collectionPeriodMinutes);
        $this->collectionPeriodMinutes->setName('collectionPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsCollectionPeriodMinutes $collectionPeriodMinutes
     */
    public function getCollectionPeriodMinutes()
    {
        return ($this->collectionPeriodMinutes) ? $this->collectionPeriodMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        $this->reportingEmailAddress1 = ($reportingEmailAddress1 InstanceOf EmailAddress)
             ? $reportingEmailAddress1
             : new EmailAddress($reportingEmailAddress1);
        $this->reportingEmailAddress1->setName('reportingEmailAddress1');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportingEmailAddress1
     */
    public function getReportingEmailAddress1()
    {
        return ($this->reportingEmailAddress1) ? $this->reportingEmailAddress1->getValue() : null;
    }

    /**
     * 
     */
    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        $this->reportingEmailAddress2 = ($reportingEmailAddress2 InstanceOf EmailAddress)
             ? $reportingEmailAddress2
             : new EmailAddress($reportingEmailAddress2);
        $this->reportingEmailAddress2->setName('reportingEmailAddress2');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportingEmailAddress2
     */
    public function getReportingEmailAddress2()
    {
        return ($this->reportingEmailAddress2) ? $this->reportingEmailAddress2->getValue() : null;
    }

    /**
     * 
     */
    public function setQueueStatisticsYesterday(CallCenterQueueStatistics13mp8 $queueStatisticsYesterday = null)
    {
        $this->queueStatisticsYesterday = ($queueStatisticsYesterday InstanceOf CallCenterQueueStatistics13mp8)
             ? $queueStatisticsYesterday
             : new CallCenterQueueStatistics13mp8($queueStatisticsYesterday);
        $this->queueStatisticsYesterday->setName('queueStatisticsYesterday');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueStatistics13mp8 $queueStatisticsYesterday
     */
    public function getQueueStatisticsYesterday()
    {
        return $this->queueStatisticsYesterday;
    }

    /**
     * 
     */
    public function setQueueStatisticsToday(CallCenterQueueStatistics13mp8 $queueStatisticsToday = null)
    {
        $this->queueStatisticsToday = ($queueStatisticsToday InstanceOf CallCenterQueueStatistics13mp8)
             ? $queueStatisticsToday
             : new CallCenterQueueStatistics13mp8($queueStatisticsToday);
        $this->queueStatisticsToday->setName('queueStatisticsToday');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueStatistics13mp8 $queueStatisticsToday
     */
    public function getQueueStatisticsToday()
    {
        return $this->queueStatisticsToday;
    }

    /**
     * 
     */
    public function setAgentStatistics(CallCenterAgentStatistics13mp8 $agentStatistics = null)
    {
        $this->agentStatistics = ($agentStatistics InstanceOf CallCenterAgentStatistics13mp8)
             ? $agentStatistics
             : new CallCenterAgentStatistics13mp8($agentStatistics);
        $this->agentStatistics->setName('agentStatistics');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentStatistics13mp8 $agentStatistics
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics;
    }
}

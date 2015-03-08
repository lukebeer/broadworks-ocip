<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Contains Call Center statistics reporting settings.
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupCallCenterGetInstanceStatisticsReportingResponse16';
    public    $name                    = __CLASS__;
    protected $generateDailyReport     = null;
    protected $collectionPeriodMinutes = null;
    protected $reportingEmailAddress1  = null;
    protected $reportingEmailAddress2  = null;
    protected $statisticsSource        = null;


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
     * The call center statistics source.
     */
    public function setStatisticsSource($statisticsSource = null)
    {
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource)
             ? $statisticsSource
             : new CallCenterStatisticsSource($statisticsSource);
    }

    /**
     * The call center statistics source.
     */
    public function getStatisticsSource()
    {
        return (!$this->statisticsSource) ?: $this->statisticsSource->getValue();
    }
}

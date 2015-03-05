<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains Call Center statistics reporting settings.
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $generateDailyReport,
             $collectionPeriodMinutes,
             $reportingEmailAddress1=null,
             $reportingEmailAddress2=null,
             $statisticsSource
    ) {
        $this->generateDailyReport     = $generateDailyReport;
        $this->collectionPeriodMinutes = $collectionPeriodMinutes;
        $this->reportingEmailAddress1  = new EmailAddress($reportingEmailAddress1);
        $this->reportingEmailAddress2  = new EmailAddress($reportingEmailAddress2);
        $this->statisticsSource        = new CallCenterStatisticsSource($statisticsSource);
        $this->args                    = func_get_args();
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

    public function setStatisticsSource($statisticsSource)
    {
        $statisticsSource and $this->statisticsSource = new CallCenterStatisticsSource($statisticsSource);
    }

    public function getStatisticsSource()
    {
        return (!$this->statisticsSource) ?: $this->statisticsSource->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the Call Center statistics reporting frequency and destination.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupCallCenterModifyInstanceStatisticsReportingRequest14sp9
 */
class GroupCallCenterModifyInstanceStatisticsReportingRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceUserId            = null;
    protected $clearTodayStatistics     = null;
    protected $generateDailyReport      = null;
    protected $collectionPeriodMinutes  = null;
    protected $reportingEmailAddress1   = null;
    protected $reportingEmailAddress2   = null;

    public function __construct(
         $serviceUserId,
         $clearTodayStatistics = null,
         $generateDailyReport = null,
         $collectionPeriodMinutes = null,
         $reportingEmailAddress1 = null,
         $reportingEmailAddress2 = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setClearTodayStatistics($clearTodayStatistics);
        $this->setGenerateDailyReport($generateDailyReport);
        $this->setCollectionPeriodMinutes($collectionPeriodMinutes);
        $this->setReportingEmailAddress1($reportingEmailAddress1);
        $this->setReportingEmailAddress2($reportingEmailAddress2);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setClearTodayStatistics(xs:boolean $clearTodayStatistics = null)
    {
    }

    public function getClearTodayStatistics()
    {
        return (!$this->clearTodayStatistics) ?: $this->clearTodayStatistics->value();
    }

    public function setGenerateDailyReport(xs:boolean $generateDailyReport = null)
    {
    }

    public function getGenerateDailyReport()
    {
        return (!$this->generateDailyReport) ?: $this->generateDailyReport->value();
    }

    public function setCollectionPeriodMinutes($collectionPeriodMinutes = null)
    {
        $this->collectionPeriodMinutes = ($collectionPeriodMinutes InstanceOf CallCenterStatisticsCollectionPeriodMinutes)
             ? $collectionPeriodMinutes
             : new CallCenterStatisticsCollectionPeriodMinutes($collectionPeriodMinutes);
    }

    public function getCollectionPeriodMinutes()
    {
        return (!$this->collectionPeriodMinutes) ?: $this->collectionPeriodMinutes->value();
    }

    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        $this->reportingEmailAddress1 = ($reportingEmailAddress1 InstanceOf EmailAddress)
             ? $reportingEmailAddress1
             : new EmailAddress($reportingEmailAddress1);
    }

    public function getReportingEmailAddress1()
    {
        return (!$this->reportingEmailAddress1) ?: $this->reportingEmailAddress1->value();
    }

    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        $this->reportingEmailAddress2 = ($reportingEmailAddress2 InstanceOf EmailAddress)
             ? $reportingEmailAddress2
             : new EmailAddress($reportingEmailAddress2);
    }

    public function getReportingEmailAddress2()
    {
        return (!$this->reportingEmailAddress2) ?: $this->reportingEmailAddress2->value();
    }
}

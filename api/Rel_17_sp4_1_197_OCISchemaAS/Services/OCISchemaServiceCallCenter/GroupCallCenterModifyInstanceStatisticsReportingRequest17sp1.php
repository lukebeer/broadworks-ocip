<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSource17sp1;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the Call Center statistics reporting frequency and destination.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $serviceUserId           = null;
    protected $generateDailyReport     = null;
    protected $collectionPeriodMinutes = null;
    protected $reportingEmailAddress1  = null;
    protected $reportingEmailAddress2  = null;
    protected $statisticsSource        = null;

    public function __construct(
         $serviceUserId,
         $generateDailyReport = null,
         $collectionPeriodMinutes = null,
         $reportingEmailAddress1 = null,
         $reportingEmailAddress2 = null,
         $statisticsSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setGenerateDailyReport($generateDailyReport);
        $this->setCollectionPeriodMinutes($collectionPeriodMinutes);
        $this->setReportingEmailAddress1($reportingEmailAddress1);
        $this->setReportingEmailAddress2($reportingEmailAddress2);
        $this->setStatisticsSource($statisticsSource);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
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
     * The call center statistics source.
     */
    public function setStatisticsSource($statisticsSource = null)
    {
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource17sp1)
             ? $statisticsSource
             : new CallCenterStatisticsSource17sp1($statisticsSource);
    }

    /**
     * The call center statistics source.
     */
    public function getStatisticsSource()
    {
        return (!$this->statisticsSource) ?: $this->statisticsSource->getValue();
    }
}

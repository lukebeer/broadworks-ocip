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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the Call Center statistics reporting frequency and destination.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupCallCenterModifyInstanceStatisticsReportingRequest14sp9
 */
class GroupCallCenterModifyInstanceStatisticsReportingRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupCallCenterModifyInstanceStatisticsReportingRequest';
    protected $serviceUserId           = null;
    protected $clearTodayStatistics    = null;
    protected $generateDailyReport     = null;
    protected $collectionPeriodMinutes = null;
    protected $reportingEmailAddress1  = null;
    protected $reportingEmailAddress2  = null;

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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setClearTodayStatistics($clearTodayStatistics = null)
    {
        if (!$clearTodayStatistics) return $this;
        $this->clearTodayStatistics = new PrimitiveType($clearTodayStatistics);
        $this->clearTodayStatistics->setName('clearTodayStatistics');
        return $this;
    }

    /**
     * 
     * @return boolean $clearTodayStatistics
     */
    public function getClearTodayStatistics()
    {
        return $this->clearTodayStatistics->getValue();
    }

    /**
     * 
     */
    public function setGenerateDailyReport($generateDailyReport = null)
    {
        if (!$generateDailyReport) return $this;
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
        return $this->generateDailyReport->getValue();
    }

    /**
     * 
     */
    public function setCollectionPeriodMinutes($collectionPeriodMinutes = null)
    {
        if (!$collectionPeriodMinutes) return $this;
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
        return $this->collectionPeriodMinutes->getValue();
    }

    /**
     * 
     */
    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        if (!$reportingEmailAddress1) return $this;
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
        return $this->reportingEmailAddress1->getValue();
    }

    /**
     * 
     */
    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        if (!$reportingEmailAddress2) return $this;
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
        return $this->reportingEmailAddress2->getValue();
    }
}

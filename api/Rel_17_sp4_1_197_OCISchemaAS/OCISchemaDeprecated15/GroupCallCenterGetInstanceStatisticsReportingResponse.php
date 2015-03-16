<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center statistics reporting settings.
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterGetInstanceStatisticsReportingResponse';
    protected $generateDailyReport;
    protected $collectionPeriodMinutes;
    protected $reportingEmailAddress1;
    protected $reportingEmailAddress2;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupCallCenterGetInstanceStatisticsReportingResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
}

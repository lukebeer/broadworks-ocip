<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportAgentSelectionAdminRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportServiceLevelInclusions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelObjective;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSamplingPeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTimeFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDateFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallCenterEnhancedReportingScheduledReportGetRequest.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $description                     = null;
    protected $reportTemplate                  = null;
    protected $schedule                        = null;
    protected $samplingPeriod                  = null;
    protected $startDayOfWeek                  = null;
    protected $reportTimeZone                  = null;
    protected $reportDateFormat                = null;
    protected $reportTimeFormat                = null;
    protected $reportInterval                  = null;
    protected $reportFormat                    = null;
    protected $agent                           = null;
    protected $callCompletionThresholdSeconds  = null;
    protected $shortDurationThresholdSeconds   = null;
    protected $serviceLevelThresholdSeconds    = null;
    protected $serviceLevelInclusions          = null;
    protected $serviceLevelObjectivePercentage = null;
    protected $abandonedCallThresholdSeconds   = null;
    protected $emailAddress                    = null;

    /**
     * @return GroupCallCenterEnhancedReportingScheduledReportGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * The call center enhanced reporting scheduled report description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterScheduledReportDescription)
             ? $description
             : new CallCenterScheduledReportDescription($description);
    }

    /**
     * The call center enhanced reporting scheduled report description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Uniquely identifies a call center report template created in the system.
     */
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        $this->reportTemplate =  $reportTemplate;
    }

    /**
     * Uniquely identifies a call center report template created in the system.
     */
    public function getReportTemplate()
    {
        return (!$this->reportTemplate) ?: $this->reportTemplate->getValue();
    }

    /**
     * A schedule for call center enhanced reporting scheduled report. It can either be a fixed time schedule
     *         or recurring schedule
     */
    public function setSchedule(CallCenterReportSchedule $schedule = null)
    {
        $this->schedule =  $schedule;
    }

    /**
     * A schedule for call center enhanced reporting scheduled report. It can either be a fixed time schedule
     *         or recurring schedule
     */
    public function getSchedule()
    {
        return (!$this->schedule) ?: $this->schedule->getValue();
    }

    /**
     * The call center enhanced reporting sampling period.
     */
    public function setSamplingPeriod($samplingPeriod = null)
    {
        $this->samplingPeriod = ($samplingPeriod InstanceOf CallCenterReportSamplingPeriod)
             ? $samplingPeriod
             : new CallCenterReportSamplingPeriod($samplingPeriod);
    }

    /**
     * The call center enhanced reporting sampling period.
     */
    public function getSamplingPeriod()
    {
        return (!$this->samplingPeriod) ?: $this->samplingPeriod->getValue();
    }

    /**
     * Days of the week (Sunday-Saturday).
     */
    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        $this->startDayOfWeek = ($startDayOfWeek InstanceOf DayOfWeek)
             ? $startDayOfWeek
             : new DayOfWeek($startDayOfWeek);
    }

    /**
     * Days of the week (Sunday-Saturday).
     */
    public function getStartDayOfWeek()
    {
        return (!$this->startDayOfWeek) ?: $this->startDayOfWeek->getValue();
    }

    /**
     * Time zone key.
     */
    public function setReportTimeZone($reportTimeZone = null)
    {
        $this->reportTimeZone = ($reportTimeZone InstanceOf TimeZone)
             ? $reportTimeZone
             : new TimeZone($reportTimeZone);
    }

    /**
     * Time zone key.
     */
    public function getReportTimeZone()
    {
        return (!$this->reportTimeZone) ?: $this->reportTimeZone->getValue();
    }

    /**
     * Date format for a call center enhanced reporting report.
     */
    public function setReportDateFormat($reportDateFormat = null)
    {
        $this->reportDateFormat = ($reportDateFormat InstanceOf CallCenterReportDateFormat)
             ? $reportDateFormat
             : new CallCenterReportDateFormat($reportDateFormat);
    }

    /**
     * Date format for a call center enhanced reporting report.
     */
    public function getReportDateFormat()
    {
        return (!$this->reportDateFormat) ?: $this->reportDateFormat->getValue();
    }

    /**
     * Time format for a call center enhanced reporting report.
     */
    public function setReportTimeFormat($reportTimeFormat = null)
    {
        $this->reportTimeFormat = ($reportTimeFormat InstanceOf CallCenterReportTimeFormat)
             ? $reportTimeFormat
             : new CallCenterReportTimeFormat($reportTimeFormat);
    }

    /**
     * Time format for a call center enhanced reporting report.
     */
    public function getReportTimeFormat()
    {
        return (!$this->reportTimeFormat) ?: $this->reportTimeFormat->getValue();
    }

    /**
     * Report interval for call center enhanced reporting scheduled reports.
     */
    public function setReportInterval(CallCenterReportInterval $reportInterval = null)
    {
        $this->reportInterval =  $reportInterval;
    }

    /**
     * Report interval for call center enhanced reporting scheduled reports.
     */
    public function getReportInterval()
    {
        return (!$this->reportInterval) ?: $this->reportInterval->getValue();
    }

    /**
     * Call center enhanced reporting report file format.
     */
    public function setReportFormat($reportFormat = null)
    {
        $this->reportFormat = ($reportFormat InstanceOf CallCenterReportFileFormat)
             ? $reportFormat
             : new CallCenterReportFileFormat($reportFormat);
    }

    /**
     * Call center enhanced reporting report file format.
     */
    public function getReportFormat()
    {
        return (!$this->reportFormat) ?: $this->reportFormat->getValue();
    }

    /**
     * Either all agents or 2 list of agents: one for current and one for past (deleted) agents. 
     *          This is used when an admin reads a Scheduled Report.
     *          Each agent table has the following column headings:
     *          "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
     */
    public function setAgent(CallCenterScheduledReportAgentSelectionAdminRead $agent = null)
    {
        $this->agent =  $agent;
    }

    /**
     * Either all agents or 2 list of agents: one for current and one for past (deleted) agents. 
     *          This is used when an admin reads a Scheduled Report.
     *          Each agent table has the following column headings:
     *          "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
     */
    public function getAgent()
    {
        return (!$this->agent) ?: $this->agent->getValue();
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function setCallCompletionThresholdSeconds($callCompletionThresholdSeconds = null)
    {
        $this->callCompletionThresholdSeconds = ($callCompletionThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $callCompletionThresholdSeconds
             : new CallCenterReportThresholdSeconds($callCompletionThresholdSeconds);
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function getCallCompletionThresholdSeconds()
    {
        return (!$this->callCompletionThresholdSeconds) ?: $this->callCompletionThresholdSeconds->getValue();
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds = null)
    {
        $this->shortDurationThresholdSeconds = ($shortDurationThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $shortDurationThresholdSeconds
             : new CallCenterReportThresholdSeconds($shortDurationThresholdSeconds);
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function getShortDurationThresholdSeconds()
    {
        return (!$this->shortDurationThresholdSeconds) ?: $this->shortDurationThresholdSeconds->getValue();
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds = ($serviceLevelThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $serviceLevelThresholdSeconds
             : new CallCenterReportThresholdSeconds($serviceLevelThresholdSeconds);
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function getServiceLevelThresholdSeconds()
    {
        return (!$this->serviceLevelThresholdSeconds) ?: $this->serviceLevelThresholdSeconds->getValue();
    }

    /**
     * The call center enhanced reporting scheduled report inclusions related to the Service Level thresholds
     */
    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions = null)
    {
        $this->serviceLevelInclusions =  $serviceLevelInclusions;
    }

    /**
     * The call center enhanced reporting scheduled report inclusions related to the Service Level thresholds
     */
    public function getServiceLevelInclusions()
    {
        return (!$this->serviceLevelInclusions) ?: $this->serviceLevelInclusions->getValue();
    }

    /**
     * The call center enhanced reporting report service level objective percentage.
     */
    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage = null)
    {
        $this->serviceLevelObjectivePercentage = ($serviceLevelObjectivePercentage InstanceOf CallCenterReportServiceLevelObjective)
             ? $serviceLevelObjectivePercentage
             : new CallCenterReportServiceLevelObjective($serviceLevelObjectivePercentage);
    }

    /**
     * The call center enhanced reporting report service level objective percentage.
     */
    public function getServiceLevelObjectivePercentage()
    {
        return (!$this->serviceLevelObjectivePercentage) ?: $this->serviceLevelObjectivePercentage->getValue();
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds = ($abandonedCallThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $abandonedCallThresholdSeconds
             : new CallCenterReportThresholdSeconds($abandonedCallThresholdSeconds);
    }

    /**
     * The call center enhanced reporting report threshold.
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return (!$this->abandonedCallThresholdSeconds) ?: $this->abandonedCallThresholdSeconds->getValue();
    }

    /**
     * Email Address
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
    }

    /**
     * Email Address
     */
    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportSamplingPeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDateFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTimeFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportAgentSelectionAdminRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportServiceLevelInclusions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelObjective;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest.
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             CallCenterReportTemplateKey $reportTemplate,
             $schedule,
             $samplingPeriod=null,
             $startDayOfWeek=null,
             $reportTimeZone,
             $reportDateFormat,
             $reportTimeFormat,
             $reportInterval,
             $reportFormat,
             $agent=null,
             $callCompletionThresholdSeconds=null,
             $shortDurationThresholdSeconds=null,
             $serviceLevelThresholdSeconds=null,
             $serviceLevelInclusions=null,
             $serviceLevelObjectivePercentage=null,
             $abandonedCallThresholdSeconds=null,
             $emailAddress=null
    ) {
        $this->description                     = $description;
        $this->reportTemplate                  = $reportTemplate;
        $this->schedule                        = $schedule;
        $this->samplingPeriod                  = $samplingPeriod;
        $this->startDayOfWeek                  = new DayOfWeek($startDayOfWeek);
        $this->reportTimeZone                  = new TimeZone($reportTimeZone);
        $this->reportDateFormat                = $reportDateFormat;
        $this->reportTimeFormat                = $reportTimeFormat;
        $this->reportInterval                  = $reportInterval;
        $this->reportFormat                    = $reportFormat;
        $this->agent                           = $agent;
        $this->callCompletionThresholdSeconds  = $callCompletionThresholdSeconds;
        $this->shortDurationThresholdSeconds   = $shortDurationThresholdSeconds;
        $this->serviceLevelThresholdSeconds    = $serviceLevelThresholdSeconds;
        $this->serviceLevelInclusions          = $serviceLevelInclusions;
        $this->serviceLevelObjectivePercentage = $serviceLevelObjectivePercentage;
        $this->abandonedCallThresholdSeconds   = $abandonedCallThresholdSeconds;
        $this->emailAddress                    = new EmailAddress($emailAddress);
        $this->args                            = func_get_args();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CallCenterScheduledReportDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setReportTemplate($reportTemplate)
    {
        $reportTemplate and $this->reportTemplate = new CallCenterReportTemplateKey($reportTemplate);
    }

    public function getReportTemplate()
    {
        return (!$this->reportTemplate) ?: $this->reportTemplate->value();
    }

    public function setSchedule($schedule)
    {
        $schedule and $this->schedule = new CallCenterReportSchedule($schedule);
    }

    public function getSchedule()
    {
        return (!$this->schedule) ?: $this->schedule->value();
    }

    public function setSamplingPeriod($samplingPeriod)
    {
        $samplingPeriod and $this->samplingPeriod = new CallCenterReportSamplingPeriod($samplingPeriod);
    }

    public function getSamplingPeriod()
    {
        return (!$this->samplingPeriod) ?: $this->samplingPeriod->value();
    }

    public function setStartDayOfWeek($startDayOfWeek)
    {
        $startDayOfWeek and $this->startDayOfWeek = new DayOfWeek($startDayOfWeek);
    }

    public function getStartDayOfWeek()
    {
        return (!$this->startDayOfWeek) ?: $this->startDayOfWeek->value();
    }

    public function setReportTimeZone($reportTimeZone)
    {
        $reportTimeZone and $this->reportTimeZone = new TimeZone($reportTimeZone);
    }

    public function getReportTimeZone()
    {
        return (!$this->reportTimeZone) ?: $this->reportTimeZone->value();
    }

    public function setReportDateFormat($reportDateFormat)
    {
        $reportDateFormat and $this->reportDateFormat = new CallCenterReportDateFormat($reportDateFormat);
    }

    public function getReportDateFormat()
    {
        return (!$this->reportDateFormat) ?: $this->reportDateFormat->value();
    }

    public function setReportTimeFormat($reportTimeFormat)
    {
        $reportTimeFormat and $this->reportTimeFormat = new CallCenterReportTimeFormat($reportTimeFormat);
    }

    public function getReportTimeFormat()
    {
        return (!$this->reportTimeFormat) ?: $this->reportTimeFormat->value();
    }

    public function setReportInterval($reportInterval)
    {
        $reportInterval and $this->reportInterval = new CallCenterReportInterval($reportInterval);
    }

    public function getReportInterval()
    {
        return (!$this->reportInterval) ?: $this->reportInterval->value();
    }

    public function setReportFormat($reportFormat)
    {
        $reportFormat and $this->reportFormat = new CallCenterReportFileFormat($reportFormat);
    }

    public function getReportFormat()
    {
        return (!$this->reportFormat) ?: $this->reportFormat->value();
    }

    public function setAgent($agent)
    {
        $agent and $this->agent = new CallCenterScheduledReportAgentSelectionAdminRead($agent);
    }

    public function getAgent()
    {
        return (!$this->agent) ?: $this->agent->value();
    }

    public function setCallCompletionThresholdSeconds($callCompletionThresholdSeconds)
    {
        $callCompletionThresholdSeconds and $this->callCompletionThresholdSeconds = new CallCenterReportThresholdSeconds($callCompletionThresholdSeconds);
    }

    public function getCallCompletionThresholdSeconds()
    {
        return (!$this->callCompletionThresholdSeconds) ?: $this->callCompletionThresholdSeconds->value();
    }

    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds)
    {
        $shortDurationThresholdSeconds and $this->shortDurationThresholdSeconds = new CallCenterReportThresholdSeconds($shortDurationThresholdSeconds);
    }

    public function getShortDurationThresholdSeconds()
    {
        return (!$this->shortDurationThresholdSeconds) ?: $this->shortDurationThresholdSeconds->value();
    }

    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds)
    {
        $serviceLevelThresholdSeconds and $this->serviceLevelThresholdSeconds = new CallCenterReportThresholdSeconds($serviceLevelThresholdSeconds);
    }

    public function getServiceLevelThresholdSeconds()
    {
        return (!$this->serviceLevelThresholdSeconds) ?: $this->serviceLevelThresholdSeconds->value();
    }

    public function setServiceLevelInclusions($serviceLevelInclusions)
    {
        $serviceLevelInclusions and $this->serviceLevelInclusions = new CallCenterScheduledReportServiceLevelInclusions($serviceLevelInclusions);
    }

    public function getServiceLevelInclusions()
    {
        return (!$this->serviceLevelInclusions) ?: $this->serviceLevelInclusions->value();
    }

    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage)
    {
        $serviceLevelObjectivePercentage and $this->serviceLevelObjectivePercentage = new CallCenterReportServiceLevelObjective($serviceLevelObjectivePercentage);
    }

    public function getServiceLevelObjectivePercentage()
    {
        return (!$this->serviceLevelObjectivePercentage) ?: $this->serviceLevelObjectivePercentage->value();
    }

    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds)
    {
        $abandonedCallThresholdSeconds and $this->abandonedCallThresholdSeconds = new CallCenterReportThresholdSeconds($abandonedCallThresholdSeconds);
    }

    public function getAbandonedCallThresholdSeconds()
    {
        return (!$this->abandonedCallThresholdSeconds) ?: $this->abandonedCallThresholdSeconds->value();
    }

    public function setEmailAddress($emailAddress)
    {
        $emailAddress and $this->emailAddress = new EmailAddress($emailAddress);
    }

    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->value();
    }
}

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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupCallCenterEnhancedReportingScheduledReportGetRequest.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $description                      = null;
    protected $reportTemplate                   = null;
    protected $schedule                         = null;
    protected $samplingPeriod                   = null;
    protected $startDayOfWeek                   = null;
    protected $reportTimeZone                   = null;
    protected $reportDateFormat                 = null;
    protected $reportTimeFormat                 = null;
    protected $reportInterval                   = null;
    protected $reportFormat                     = null;
    protected $agent                            = null;
    protected $callCompletionThresholdSeconds   = null;
    protected $shortDurationThresholdSeconds    = null;
    protected $serviceLevelThresholdSeconds     = null;
    protected $serviceLevelInclusions           = null;
    protected $serviceLevelObjectivePercentage  = null;
    protected $abandonedCallThresholdSeconds    = null;
    protected $emailAddress                     = null;


    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterScheduledReportDescription)
             ? $description
             : new CallCenterScheduledReportDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
    }

    public function getReportTemplate()
    {
        return (!$this->reportTemplate) ?: $this->reportTemplate->value();
    }

    public function setSchedule(CallCenterReportSchedule $schedule = null)
    {
    }

    public function getSchedule()
    {
        return (!$this->schedule) ?: $this->schedule->value();
    }

    public function setSamplingPeriod($samplingPeriod = null)
    {
        $this->samplingPeriod = ($samplingPeriod InstanceOf CallCenterReportSamplingPeriod)
             ? $samplingPeriod
             : new CallCenterReportSamplingPeriod($samplingPeriod);
    }

    public function getSamplingPeriod()
    {
        return (!$this->samplingPeriod) ?: $this->samplingPeriod->value();
    }

    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        $this->startDayOfWeek = ($startDayOfWeek InstanceOf DayOfWeek)
             ? $startDayOfWeek
             : new DayOfWeek($startDayOfWeek);
    }

    public function getStartDayOfWeek()
    {
        return (!$this->startDayOfWeek) ?: $this->startDayOfWeek->value();
    }

    public function setReportTimeZone($reportTimeZone = null)
    {
        $this->reportTimeZone = ($reportTimeZone InstanceOf TimeZone)
             ? $reportTimeZone
             : new TimeZone($reportTimeZone);
    }

    public function getReportTimeZone()
    {
        return (!$this->reportTimeZone) ?: $this->reportTimeZone->value();
    }

    public function setReportDateFormat($reportDateFormat = null)
    {
        $this->reportDateFormat = ($reportDateFormat InstanceOf CallCenterReportDateFormat)
             ? $reportDateFormat
             : new CallCenterReportDateFormat($reportDateFormat);
    }

    public function getReportDateFormat()
    {
        return (!$this->reportDateFormat) ?: $this->reportDateFormat->value();
    }

    public function setReportTimeFormat($reportTimeFormat = null)
    {
        $this->reportTimeFormat = ($reportTimeFormat InstanceOf CallCenterReportTimeFormat)
             ? $reportTimeFormat
             : new CallCenterReportTimeFormat($reportTimeFormat);
    }

    public function getReportTimeFormat()
    {
        return (!$this->reportTimeFormat) ?: $this->reportTimeFormat->value();
    }

    public function setReportInterval(CallCenterReportInterval $reportInterval = null)
    {
    }

    public function getReportInterval()
    {
        return (!$this->reportInterval) ?: $this->reportInterval->value();
    }

    public function setReportFormat($reportFormat = null)
    {
        $this->reportFormat = ($reportFormat InstanceOf CallCenterReportFileFormat)
             ? $reportFormat
             : new CallCenterReportFileFormat($reportFormat);
    }

    public function getReportFormat()
    {
        return (!$this->reportFormat) ?: $this->reportFormat->value();
    }

    public function setAgent(CallCenterScheduledReportAgentSelectionAdminRead $agent = null)
    {
    }

    public function getAgent()
    {
        return (!$this->agent) ?: $this->agent->value();
    }

    public function setCallCompletionThresholdSeconds($callCompletionThresholdSeconds = null)
    {
        $this->callCompletionThresholdSeconds = ($callCompletionThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $callCompletionThresholdSeconds
             : new CallCenterReportThresholdSeconds($callCompletionThresholdSeconds);
    }

    public function getCallCompletionThresholdSeconds()
    {
        return (!$this->callCompletionThresholdSeconds) ?: $this->callCompletionThresholdSeconds->value();
    }

    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds = null)
    {
        $this->shortDurationThresholdSeconds = ($shortDurationThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $shortDurationThresholdSeconds
             : new CallCenterReportThresholdSeconds($shortDurationThresholdSeconds);
    }

    public function getShortDurationThresholdSeconds()
    {
        return (!$this->shortDurationThresholdSeconds) ?: $this->shortDurationThresholdSeconds->value();
    }

    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds = ($serviceLevelThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $serviceLevelThresholdSeconds
             : new CallCenterReportThresholdSeconds($serviceLevelThresholdSeconds);
    }

    public function getServiceLevelThresholdSeconds()
    {
        return (!$this->serviceLevelThresholdSeconds) ?: $this->serviceLevelThresholdSeconds->value();
    }

    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions = null)
    {
    }

    public function getServiceLevelInclusions()
    {
        return (!$this->serviceLevelInclusions) ?: $this->serviceLevelInclusions->value();
    }

    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage = null)
    {
        $this->serviceLevelObjectivePercentage = ($serviceLevelObjectivePercentage InstanceOf CallCenterReportServiceLevelObjective)
             ? $serviceLevelObjectivePercentage
             : new CallCenterReportServiceLevelObjective($serviceLevelObjectivePercentage);
    }

    public function getServiceLevelObjectivePercentage()
    {
        return (!$this->serviceLevelObjectivePercentage) ?: $this->serviceLevelObjectivePercentage->value();
    }

    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds = ($abandonedCallThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $abandonedCallThresholdSeconds
             : new CallCenterReportThresholdSeconds($abandonedCallThresholdSeconds);
    }

    public function getAbandonedCallThresholdSeconds()
    {
        return (!$this->abandonedCallThresholdSeconds) ?: $this->abandonedCallThresholdSeconds->value();
    }

    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
    }

    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->value();
    }
}

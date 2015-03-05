<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportSamplingPeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDateFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTimeFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportAgentSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelThresholdReplacementList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportServiceLevelInclusionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelObjective;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallThresholdReplacementList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportReplacementEmailList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a call center reporting scheduled report created by a supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingScheduledReportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $supervisorUserId,
             $name,
             $newName=null,
             $description=null,
             $schedule=null,
             $samplingPeriod=null,
             $startDayOfWeek=null,
             $reportTimeZone=null,
             $reportDateFormat=null,
             $reportTimeFormat=null,
             $reportInterval=null,
             $reportFormat=null,
             $agent=null,
             $callCompletionThresholdSeconds=null,
             $shortDurationThresholdSeconds=null,
             $serviceLevelThresholdSeconds=null,
             $serviceLevelInclusions=null,
             $serviceLevelObjectivePercentage=null,
             $abandonedCallThresholdSeconds=null,
             $emailAddress=null
    ) {
        $this->supervisorUserId                = new UserId($supervisorUserId);
        $this->name                            = new CallCenterScheduledReportName($name);
        $this->newName                         = new CallCenterScheduledReportName($newName);
        $this->description                     = $description;
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
        $this->emailAddress                    = $emailAddress;
        $this->args                            = func_get_args();
    }

    public function setSupervisorUserId($supervisorUserId)
    {
        $supervisorUserId and $this->supervisorUserId = new UserId($supervisorUserId);
    }

    public function getSupervisorUserId()
    {
        return (!$this->supervisorUserId) ?: $this->supervisorUserId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new CallCenterScheduledReportName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName)
    {
        $newName and $this->newName = new CallCenterScheduledReportName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CallCenterScheduledReportDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
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
        $agent and $this->agent = new CallCenterScheduledReportAgentSelection($agent);
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
        $serviceLevelThresholdSeconds and $this->serviceLevelThresholdSeconds = new CallCenterReportServiceLevelThresholdReplacementList($serviceLevelThresholdSeconds);
    }

    public function getServiceLevelThresholdSeconds()
    {
        return (!$this->serviceLevelThresholdSeconds) ?: $this->serviceLevelThresholdSeconds->value();
    }

    public function setServiceLevelInclusions($serviceLevelInclusions)
    {
        $serviceLevelInclusions and $this->serviceLevelInclusions = new CallCenterScheduledReportServiceLevelInclusionsModify($serviceLevelInclusions);
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
        $abandonedCallThresholdSeconds and $this->abandonedCallThresholdSeconds = new CallCenterReportAbandonedCallThresholdReplacementList($abandonedCallThresholdSeconds);
    }

    public function getAbandonedCallThresholdSeconds()
    {
        return (!$this->abandonedCallThresholdSeconds) ?: $this->abandonedCallThresholdSeconds->value();
    }

    public function setEmailAddress($emailAddress)
    {
        $emailAddress and $this->emailAddress = new CallCenterReportReplacementEmailList($emailAddress);
    }

    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->value();
    }
}

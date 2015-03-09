<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportServiceLevelInclusionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportAbandonedCallThresholdReplacementList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelThresholdReplacementList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportAgentSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelObjective;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportReplacementEmailList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSamplingPeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTimeFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDateFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\UserCallCenterEnhancedReportingScheduledReportModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a call center reporting scheduled report created by a supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingScheduledReportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $supervisorUserId                = null;
    protected $name                            = null;
    protected $newName                         = null;
    protected $description                     = null;
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

    public function __construct(
         $supervisorUserId,
         $name,
         $newName = null,
         $description = null,
          $schedule = null,
         $samplingPeriod = null,
         $startDayOfWeek = null,
         $reportTimeZone = null,
         $reportDateFormat = null,
         $reportTimeFormat = null,
          $reportInterval = null,
         $reportFormat = null,
          $agent = null,
         $callCompletionThresholdSeconds = null,
         $shortDurationThresholdSeconds = null,
          $serviceLevelThresholdSeconds = null,
          $serviceLevelInclusions = null,
         $serviceLevelObjectivePercentage = null,
          $abandonedCallThresholdSeconds = null,
          $emailAddress = null
    ) {
        $this->setSupervisorUserId($supervisorUserId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setSchedule($schedule);
        $this->setSamplingPeriod($samplingPeriod);
        $this->setStartDayOfWeek($startDayOfWeek);
        $this->setReportTimeZone($reportTimeZone);
        $this->setReportDateFormat($reportDateFormat);
        $this->setReportTimeFormat($reportTimeFormat);
        $this->setReportInterval($reportInterval);
        $this->setReportFormat($reportFormat);
        $this->setAgent($agent);
        $this->setCallCompletionThresholdSeconds($callCompletionThresholdSeconds);
        $this->setShortDurationThresholdSeconds($shortDurationThresholdSeconds);
        $this->setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds);
        $this->setServiceLevelInclusions($serviceLevelInclusions);
        $this->setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage);
        $this->setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds);
        $this->setEmailAddress($emailAddress);
    }

    /**
     * @return UserCallCenterEnhancedReportingScheduledReportModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setSupervisorUserId($supervisorUserId = null)
    {
        $this->supervisorUserId = ($supervisorUserId InstanceOf UserId)
             ? $supervisorUserId
             : new UserId($supervisorUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getSupervisorUserId()
    {
        return (!$this->supervisorUserId) ?: $this->supervisorUserId->getValue();
    }

    /**
     * The call center enhanced reporting scheduled report name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterScheduledReportName)
             ? $name
             : new CallCenterScheduledReportName($name);
    }

    /**
     * The call center enhanced reporting scheduled report name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * The call center enhanced reporting scheduled report name.
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CallCenterScheduledReportName)
             ? $newName
             : new CallCenterScheduledReportName($newName);
    }

    /**
     * The call center enhanced reporting scheduled report name.
     */
    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->getValue();
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
     * Either all agents or list of agents.
     */
    public function setAgent(CallCenterScheduledReportAgentSelection $agent = null)
    {
        $this->agent =  $agent;
    }

    /**
     * Either all agents or list of agents.
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
     * A list of call center reporting service level threshold seconds that replaces a previously configured list.
     */
    public function setServiceLevelThresholdSeconds(CallCenterReportServiceLevelThresholdReplacementList $serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds =  $serviceLevelThresholdSeconds;
    }

    /**
     * A list of call center reporting service level threshold seconds that replaces a previously configured list.
     */
    public function getServiceLevelThresholdSeconds()
    {
        return (!$this->serviceLevelThresholdSeconds) ?: $this->serviceLevelThresholdSeconds->getValue();
    }

    /**
     * The call center enhanced reporting scheduled report modified inclusions related to the Service Level thresholds
     */
    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusionsModify $serviceLevelInclusions = null)
    {
        $this->serviceLevelInclusions =  $serviceLevelInclusions;
    }

    /**
     * The call center enhanced reporting scheduled report modified inclusions related to the Service Level thresholds
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
     * A list of call center reporting abandoned call threshold seconds that replaces a previously configured list.
     */
    public function setAbandonedCallThresholdSeconds(CallCenterReportAbandonedCallThresholdReplacementList $abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds =  $abandonedCallThresholdSeconds;
    }

    /**
     * A list of call center reporting abandoned call threshold seconds that replaces a previously configured list.
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return (!$this->abandonedCallThresholdSeconds) ?: $this->abandonedCallThresholdSeconds->getValue();
    }

    /**
     * A list of call center reporting email addresses that replaces a previously configured list.
     */
    public function setEmailAddress(CallCenterReportReplacementEmailList $emailAddress = null)
    {
        $this->emailAddress =  $emailAddress;
    }

    /**
     * A list of call center reporting email addresses that replaces a previously configured list.
     */
    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->getValue();
    }
}

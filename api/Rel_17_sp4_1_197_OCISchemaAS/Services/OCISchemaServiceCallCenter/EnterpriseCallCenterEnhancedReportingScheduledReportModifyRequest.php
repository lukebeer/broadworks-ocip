<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify an enterprise level call center reporting scheduled report.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = 'EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest';
    protected $serviceProviderId               = null;
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
         $serviceProviderId,
         $name,
         $newName = null,
         $description = null,
         CallCenterReportSchedule $schedule = null,
         $samplingPeriod = null,
         $startDayOfWeek = null,
         $reportTimeZone = null,
         $reportDateFormat = null,
         $reportTimeFormat = null,
         CallCenterReportInterval $reportInterval = null,
         $reportFormat = null,
         CallCenterScheduledReportAgentSelection $agent = null,
         $callCompletionThresholdSeconds = null,
         $shortDurationThresholdSeconds = null,
         CallCenterReportServiceLevelThresholdReplacementList $serviceLevelThresholdSeconds = null,
         CallCenterScheduledReportServiceLevelInclusionsModify $serviceLevelInclusions = null,
         $serviceLevelObjectivePercentage = null,
         CallCenterReportAbandonedCallThresholdReplacementList $abandonedCallThresholdSeconds = null,
         CallCenterReportReplacementEmailList $emailAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CallCenterScheduledReportName)
             ? $name
             : new CallCenterScheduledReportName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf CallCenterScheduledReportName)
             ? $newName
             : new CallCenterScheduledReportName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf CallCenterScheduledReportDescription)
             ? $description
             : new CallCenterScheduledReportDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setSchedule(CallCenterReportSchedule $schedule = null)
    {
        if (!$schedule) return $this;
        $this->schedule = $schedule;
        $this->schedule->setName('schedule');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportSchedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * 
     */
    public function setSamplingPeriod($samplingPeriod = null)
    {
        if (!$samplingPeriod) return $this;
        $this->samplingPeriod = ($samplingPeriod InstanceOf CallCenterReportSamplingPeriod)
             ? $samplingPeriod
             : new CallCenterReportSamplingPeriod($samplingPeriod);
        $this->samplingPeriod->setName('samplingPeriod');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportSamplingPeriod
     */
    public function getSamplingPeriod()
    {
        return $this->samplingPeriod->getValue();
    }

    /**
     * 
     */
    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        if (!$startDayOfWeek) return $this;
        $this->startDayOfWeek = ($startDayOfWeek InstanceOf DayOfWeek)
             ? $startDayOfWeek
             : new DayOfWeek($startDayOfWeek);
        $this->startDayOfWeek->setName('startDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return DayOfWeek
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek->getValue();
    }

    /**
     * 
     */
    public function setReportTimeZone($reportTimeZone = null)
    {
        if (!$reportTimeZone) return $this;
        $this->reportTimeZone = ($reportTimeZone InstanceOf TimeZone)
             ? $reportTimeZone
             : new TimeZone($reportTimeZone);
        $this->reportTimeZone->setName('reportTimeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone
     */
    public function getReportTimeZone()
    {
        return $this->reportTimeZone->getValue();
    }

    /**
     * 
     */
    public function setReportDateFormat($reportDateFormat = null)
    {
        if (!$reportDateFormat) return $this;
        $this->reportDateFormat = ($reportDateFormat InstanceOf CallCenterReportDateFormat)
             ? $reportDateFormat
             : new CallCenterReportDateFormat($reportDateFormat);
        $this->reportDateFormat->setName('reportDateFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDateFormat
     */
    public function getReportDateFormat()
    {
        return $this->reportDateFormat->getValue();
    }

    /**
     * 
     */
    public function setReportTimeFormat($reportTimeFormat = null)
    {
        if (!$reportTimeFormat) return $this;
        $this->reportTimeFormat = ($reportTimeFormat InstanceOf CallCenterReportTimeFormat)
             ? $reportTimeFormat
             : new CallCenterReportTimeFormat($reportTimeFormat);
        $this->reportTimeFormat->setName('reportTimeFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTimeFormat
     */
    public function getReportTimeFormat()
    {
        return $this->reportTimeFormat->getValue();
    }

    /**
     * 
     */
    public function setReportInterval(CallCenterReportInterval $reportInterval = null)
    {
        if (!$reportInterval) return $this;
        $this->reportInterval = $reportInterval;
        $this->reportInterval->setName('reportInterval');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInterval
     */
    public function getReportInterval()
    {
        return $this->reportInterval;
    }

    /**
     * 
     */
    public function setReportFormat($reportFormat = null)
    {
        if (!$reportFormat) return $this;
        $this->reportFormat = ($reportFormat InstanceOf CallCenterReportFileFormat)
             ? $reportFormat
             : new CallCenterReportFileFormat($reportFormat);
        $this->reportFormat->setName('reportFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportFileFormat
     */
    public function getReportFormat()
    {
        return $this->reportFormat->getValue();
    }

    /**
     * 
     */
    public function setAgent(CallCenterScheduledReportAgentSelection $agent = null)
    {
        if (!$agent) return $this;
        $this->agent = $agent;
        $this->agent->setName('agent');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportAgentSelection
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * 
     */
    public function setCallCompletionThresholdSeconds($callCompletionThresholdSeconds = null)
    {
        if (!$callCompletionThresholdSeconds) return $this;
        $this->callCompletionThresholdSeconds = ($callCompletionThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $callCompletionThresholdSeconds
             : new CallCenterReportThresholdSeconds($callCompletionThresholdSeconds);
        $this->callCompletionThresholdSeconds->setName('callCompletionThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds
     */
    public function getCallCompletionThresholdSeconds()
    {
        return $this->callCompletionThresholdSeconds->getValue();
    }

    /**
     * 
     */
    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds = null)
    {
        if (!$shortDurationThresholdSeconds) return $this;
        $this->shortDurationThresholdSeconds = ($shortDurationThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $shortDurationThresholdSeconds
             : new CallCenterReportThresholdSeconds($shortDurationThresholdSeconds);
        $this->shortDurationThresholdSeconds->setName('shortDurationThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds
     */
    public function getShortDurationThresholdSeconds()
    {
        return $this->shortDurationThresholdSeconds->getValue();
    }

    /**
     * 
     */
    public function setServiceLevelThresholdSeconds(CallCenterReportServiceLevelThresholdReplacementList $serviceLevelThresholdSeconds = null)
    {
        if (!$serviceLevelThresholdSeconds) return $this;
        $this->serviceLevelThresholdSeconds = $serviceLevelThresholdSeconds;
        $this->serviceLevelThresholdSeconds->setName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServiceLevelThresholdReplacementList
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds;
    }

    /**
     * 
     */
    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusionsModify $serviceLevelInclusions = null)
    {
        if (!$serviceLevelInclusions) return $this;
        $this->serviceLevelInclusions = $serviceLevelInclusions;
        $this->serviceLevelInclusions->setName('serviceLevelInclusions');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportServiceLevelInclusionsModify
     */
    public function getServiceLevelInclusions()
    {
        return $this->serviceLevelInclusions;
    }

    /**
     * 
     */
    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage = null)
    {
        if (!$serviceLevelObjectivePercentage) return $this;
        $this->serviceLevelObjectivePercentage = ($serviceLevelObjectivePercentage InstanceOf CallCenterReportServiceLevelObjective)
             ? $serviceLevelObjectivePercentage
             : new CallCenterReportServiceLevelObjective($serviceLevelObjectivePercentage);
        $this->serviceLevelObjectivePercentage->setName('serviceLevelObjectivePercentage');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServiceLevelObjective
     */
    public function getServiceLevelObjectivePercentage()
    {
        return $this->serviceLevelObjectivePercentage->getValue();
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdSeconds(CallCenterReportAbandonedCallThresholdReplacementList $abandonedCallThresholdSeconds = null)
    {
        if (!$abandonedCallThresholdSeconds) return $this;
        $this->abandonedCallThresholdSeconds = $abandonedCallThresholdSeconds;
        $this->abandonedCallThresholdSeconds->setName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportAbandonedCallThresholdReplacementList
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds;
    }

    /**
     * 
     */
    public function setEmailAddress(CallCenterReportReplacementEmailList $emailAddress = null)
    {
        if (!$emailAddress) return $this;
        $this->emailAddress = $emailAddress;
        $this->emailAddress->setName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportReplacementEmailList
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
}

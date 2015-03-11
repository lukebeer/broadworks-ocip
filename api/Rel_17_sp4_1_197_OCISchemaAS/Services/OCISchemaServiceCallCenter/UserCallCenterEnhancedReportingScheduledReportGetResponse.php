<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportServiceLevelInclusions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportAgentSelectionRead;
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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallCenterEnhancedReportingScheduledReportGetRequest.
 */
class UserCallCenterEnhancedReportingScheduledReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = 'UserCallCenterEnhancedReportingScheduledReportGetResponse';
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
     * @return UserCallCenterEnhancedReportingScheduledReportGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        if (!$reportTemplate) return $this;
        $this->reportTemplate = $reportTemplate;
        $this->reportTemplate->setName('reportTemplate');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateKey
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
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
    public function setAgent(CallCenterScheduledReportAgentSelectionRead $agent = null)
    {
        if (!$agent) return $this;
        $this->agent = $agent;
        $this->agent->setName('agent');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportAgentSelectionRead
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
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        if (!$serviceLevelThresholdSeconds) return $this;
        $this->serviceLevelThresholdSeconds = ($serviceLevelThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $serviceLevelThresholdSeconds
             : new CallCenterReportThresholdSeconds($serviceLevelThresholdSeconds);
        $this->serviceLevelThresholdSeconds->setName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds->getValue();
    }

    /**
     * 
     */
    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions = null)
    {
        if (!$serviceLevelInclusions) return $this;
        $this->serviceLevelInclusions = $serviceLevelInclusions;
        $this->serviceLevelInclusions->setName('serviceLevelInclusions');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportServiceLevelInclusions
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
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        if (!$abandonedCallThresholdSeconds) return $this;
        $this->abandonedCallThresholdSeconds = ($abandonedCallThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $abandonedCallThresholdSeconds
             : new CallCenterReportThresholdSeconds($abandonedCallThresholdSeconds);
        $this->abandonedCallThresholdSeconds->setName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds->getValue();
    }

    /**
     * 
     */
    public function setEmailAddress($emailAddress = null)
    {
        if (!$emailAddress) return $this;
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
        $this->emailAddress->setName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress->getValue();
    }
}

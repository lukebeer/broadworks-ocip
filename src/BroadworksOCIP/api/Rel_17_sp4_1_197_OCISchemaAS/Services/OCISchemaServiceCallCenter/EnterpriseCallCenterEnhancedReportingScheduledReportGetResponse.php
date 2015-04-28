<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportAgentSelectionAdminRead;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportServiceLevelInclusions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelObjective;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportThresholdSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSamplingPeriod;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportFileFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTimeFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDateFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInterval;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest.
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse';
    protected $description;
    protected $reportTemplate;
    protected $schedule;
    protected $samplingPeriod;
    protected $startDayOfWeek;
    protected $reportTimeZone;
    protected $reportDateFormat;
    protected $reportTimeFormat;
    protected $reportInterval;
    protected $reportFormat;
    protected $agent;
    protected $callCompletionThresholdSeconds;
    protected $shortDurationThresholdSeconds;
    protected $serviceLevelThresholdSeconds;
    protected $serviceLevelInclusions;
    protected $serviceLevelObjectivePercentage;
    protected $abandonedCallThresholdSeconds;
    protected $emailAddress;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse $response
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
        $this->description = ($description InstanceOf CallCenterScheduledReportDescription)
             ? $description
             : new CallCenterScheduledReportDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        $this->reportTemplate = ($reportTemplate InstanceOf CallCenterReportTemplateKey)
             ? $reportTemplate
             : new CallCenterReportTemplateKey($reportTemplate);
        $this->reportTemplate->setElementName('reportTemplate');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateKey $reportTemplate
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
        $this->schedule = ($schedule InstanceOf CallCenterReportSchedule)
             ? $schedule
             : new CallCenterReportSchedule($schedule);
        $this->schedule->setElementName('schedule');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportSchedule $schedule
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
        $this->samplingPeriod = ($samplingPeriod InstanceOf CallCenterReportSamplingPeriod)
             ? $samplingPeriod
             : new CallCenterReportSamplingPeriod($samplingPeriod);
        $this->samplingPeriod->setElementName('samplingPeriod');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportSamplingPeriod $samplingPeriod
     */
    public function getSamplingPeriod()
    {
        return ($this->samplingPeriod)
            ? $this->samplingPeriod->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        $this->startDayOfWeek = ($startDayOfWeek InstanceOf DayOfWeek)
             ? $startDayOfWeek
             : new DayOfWeek($startDayOfWeek);
        $this->startDayOfWeek->setElementName('startDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return DayOfWeek $startDayOfWeek
     */
    public function getStartDayOfWeek()
    {
        return ($this->startDayOfWeek)
            ? $this->startDayOfWeek->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportTimeZone($reportTimeZone = null)
    {
        $this->reportTimeZone = ($reportTimeZone InstanceOf TimeZone)
             ? $reportTimeZone
             : new TimeZone($reportTimeZone);
        $this->reportTimeZone->setElementName('reportTimeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone $reportTimeZone
     */
    public function getReportTimeZone()
    {
        return ($this->reportTimeZone)
            ? $this->reportTimeZone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportDateFormat($reportDateFormat = null)
    {
        $this->reportDateFormat = ($reportDateFormat InstanceOf CallCenterReportDateFormat)
             ? $reportDateFormat
             : new CallCenterReportDateFormat($reportDateFormat);
        $this->reportDateFormat->setElementName('reportDateFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDateFormat $reportDateFormat
     */
    public function getReportDateFormat()
    {
        return ($this->reportDateFormat)
            ? $this->reportDateFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportTimeFormat($reportTimeFormat = null)
    {
        $this->reportTimeFormat = ($reportTimeFormat InstanceOf CallCenterReportTimeFormat)
             ? $reportTimeFormat
             : new CallCenterReportTimeFormat($reportTimeFormat);
        $this->reportTimeFormat->setElementName('reportTimeFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTimeFormat $reportTimeFormat
     */
    public function getReportTimeFormat()
    {
        return ($this->reportTimeFormat)
            ? $this->reportTimeFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportInterval(CallCenterReportInterval $reportInterval = null)
    {
        $this->reportInterval = ($reportInterval InstanceOf CallCenterReportInterval)
             ? $reportInterval
             : new CallCenterReportInterval($reportInterval);
        $this->reportInterval->setElementName('reportInterval');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInterval $reportInterval
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
        $this->reportFormat = ($reportFormat InstanceOf CallCenterReportFileFormat)
             ? $reportFormat
             : new CallCenterReportFileFormat($reportFormat);
        $this->reportFormat->setElementName('reportFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportFileFormat $reportFormat
     */
    public function getReportFormat()
    {
        return ($this->reportFormat)
            ? $this->reportFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgent(CallCenterScheduledReportAgentSelectionAdminRead $agent = null)
    {
        $this->agent = ($agent InstanceOf CallCenterScheduledReportAgentSelectionAdminRead)
             ? $agent
             : new CallCenterScheduledReportAgentSelectionAdminRead($agent);
        $this->agent->setElementName('agent');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportAgentSelectionAdminRead $agent
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
        $this->callCompletionThresholdSeconds = ($callCompletionThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $callCompletionThresholdSeconds
             : new CallCenterReportThresholdSeconds($callCompletionThresholdSeconds);
        $this->callCompletionThresholdSeconds->setElementName('callCompletionThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $callCompletionThresholdSeconds
     */
    public function getCallCompletionThresholdSeconds()
    {
        return ($this->callCompletionThresholdSeconds)
            ? $this->callCompletionThresholdSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds = null)
    {
        $this->shortDurationThresholdSeconds = ($shortDurationThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $shortDurationThresholdSeconds
             : new CallCenterReportThresholdSeconds($shortDurationThresholdSeconds);
        $this->shortDurationThresholdSeconds->setElementName('shortDurationThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $shortDurationThresholdSeconds
     */
    public function getShortDurationThresholdSeconds()
    {
        return ($this->shortDurationThresholdSeconds)
            ? $this->shortDurationThresholdSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds = ($serviceLevelThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $serviceLevelThresholdSeconds
             : new CallCenterReportThresholdSeconds($serviceLevelThresholdSeconds);
        $this->serviceLevelThresholdSeconds->setElementName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $serviceLevelThresholdSeconds
     */
    public function getServiceLevelThresholdSeconds()
    {
        return ($this->serviceLevelThresholdSeconds)
            ? $this->serviceLevelThresholdSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions = null)
    {
        $this->serviceLevelInclusions = ($serviceLevelInclusions InstanceOf CallCenterScheduledReportServiceLevelInclusions)
             ? $serviceLevelInclusions
             : new CallCenterScheduledReportServiceLevelInclusions($serviceLevelInclusions);
        $this->serviceLevelInclusions->setElementName('serviceLevelInclusions');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions
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
        $this->serviceLevelObjectivePercentage = ($serviceLevelObjectivePercentage InstanceOf CallCenterReportServiceLevelObjective)
             ? $serviceLevelObjectivePercentage
             : new CallCenterReportServiceLevelObjective($serviceLevelObjectivePercentage);
        $this->serviceLevelObjectivePercentage->setElementName('serviceLevelObjectivePercentage');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServiceLevelObjective $serviceLevelObjectivePercentage
     */
    public function getServiceLevelObjectivePercentage()
    {
        return ($this->serviceLevelObjectivePercentage)
            ? $this->serviceLevelObjectivePercentage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds = ($abandonedCallThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $abandonedCallThresholdSeconds
             : new CallCenterReportThresholdSeconds($abandonedCallThresholdSeconds);
        $this->abandonedCallThresholdSeconds->setElementName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $abandonedCallThresholdSeconds
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return ($this->abandonedCallThresholdSeconds)
            ? $this->abandonedCallThresholdSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
        $this->emailAddress->setElementName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailAddress
     */
    public function getEmailAddress()
    {
        return ($this->emailAddress)
            ? $this->emailAddress->getElementValue()
            : null;
    }
}

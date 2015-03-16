<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportServiceLevelInclusions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportAgentSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelObjective;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportSamplingPeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTimeFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDateFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add an enterprise level call center reporting scheduled report.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest';
    protected $serviceProviderId;
    protected $name;
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

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         $description = null,
         CallCenterReportTemplateKey $reportTemplate = '',
         CallCenterReportSchedule $schedule = '',
         $samplingPeriod = null,
         $startDayOfWeek = null,
         $reportTimeZone = '',
         $reportDateFormat = '',
         $reportTimeFormat = '',
         CallCenterReportInterval $reportInterval = '',
         $reportFormat = '',
         CallCenterScheduledReportAgentSelection $agent = null,
         $callCompletionThresholdSeconds = null,
         $shortDurationThresholdSeconds = null,
         $serviceLevelThresholdSeconds = null,
         CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions = null,
         $serviceLevelObjectivePercentage = null,
         $abandonedCallThresholdSeconds = null,
         $emailAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setDescription($description);
        $this->setReportTemplate($reportTemplate);
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
     * @return mixed $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterScheduledReportName)
             ? $name
             : new CallCenterScheduledReportName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterScheduledReportDescription)
             ? $description
             : new CallCenterScheduledReportDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        $this->reportTemplate = ($reportTemplate InstanceOf CallCenterReportTemplateKey)
             ? $reportTemplate
             : new CallCenterReportTemplateKey($reportTemplate);
        $this->reportTemplate->setName('reportTemplate');
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
        $this->schedule->setName('schedule');
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
        $this->samplingPeriod->setName('samplingPeriod');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportSamplingPeriod $samplingPeriod
     */
    public function getSamplingPeriod()
    {
        return ($this->samplingPeriod) ? $this->samplingPeriod->getValue() : null;
    }

    /**
     * 
     */
    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        $this->startDayOfWeek = ($startDayOfWeek InstanceOf DayOfWeek)
             ? $startDayOfWeek
             : new DayOfWeek($startDayOfWeek);
        $this->startDayOfWeek->setName('startDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return DayOfWeek $startDayOfWeek
     */
    public function getStartDayOfWeek()
    {
        return ($this->startDayOfWeek) ? $this->startDayOfWeek->getValue() : null;
    }

    /**
     * 
     */
    public function setReportTimeZone($reportTimeZone = null)
    {
        $this->reportTimeZone = ($reportTimeZone InstanceOf TimeZone)
             ? $reportTimeZone
             : new TimeZone($reportTimeZone);
        $this->reportTimeZone->setName('reportTimeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone $reportTimeZone
     */
    public function getReportTimeZone()
    {
        return ($this->reportTimeZone) ? $this->reportTimeZone->getValue() : null;
    }

    /**
     * 
     */
    public function setReportDateFormat($reportDateFormat = null)
    {
        $this->reportDateFormat = ($reportDateFormat InstanceOf CallCenterReportDateFormat)
             ? $reportDateFormat
             : new CallCenterReportDateFormat($reportDateFormat);
        $this->reportDateFormat->setName('reportDateFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDateFormat $reportDateFormat
     */
    public function getReportDateFormat()
    {
        return ($this->reportDateFormat) ? $this->reportDateFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setReportTimeFormat($reportTimeFormat = null)
    {
        $this->reportTimeFormat = ($reportTimeFormat InstanceOf CallCenterReportTimeFormat)
             ? $reportTimeFormat
             : new CallCenterReportTimeFormat($reportTimeFormat);
        $this->reportTimeFormat->setName('reportTimeFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTimeFormat $reportTimeFormat
     */
    public function getReportTimeFormat()
    {
        return ($this->reportTimeFormat) ? $this->reportTimeFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setReportInterval(CallCenterReportInterval $reportInterval = null)
    {
        $this->reportInterval = ($reportInterval InstanceOf CallCenterReportInterval)
             ? $reportInterval
             : new CallCenterReportInterval($reportInterval);
        $this->reportInterval->setName('reportInterval');
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
        $this->reportFormat->setName('reportFormat');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportFileFormat $reportFormat
     */
    public function getReportFormat()
    {
        return ($this->reportFormat) ? $this->reportFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setAgent(CallCenterScheduledReportAgentSelection $agent = null)
    {
        $this->agent = ($agent InstanceOf CallCenterScheduledReportAgentSelection)
             ? $agent
             : new CallCenterScheduledReportAgentSelection($agent);
        $this->agent->setName('agent');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportAgentSelection $agent
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
        $this->callCompletionThresholdSeconds->setName('callCompletionThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $callCompletionThresholdSeconds
     */
    public function getCallCompletionThresholdSeconds()
    {
        return ($this->callCompletionThresholdSeconds) ? $this->callCompletionThresholdSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds = null)
    {
        $this->shortDurationThresholdSeconds = ($shortDurationThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $shortDurationThresholdSeconds
             : new CallCenterReportThresholdSeconds($shortDurationThresholdSeconds);
        $this->shortDurationThresholdSeconds->setName('shortDurationThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $shortDurationThresholdSeconds
     */
    public function getShortDurationThresholdSeconds()
    {
        return ($this->shortDurationThresholdSeconds) ? $this->shortDurationThresholdSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds = ($serviceLevelThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $serviceLevelThresholdSeconds
             : new CallCenterReportThresholdSeconds($serviceLevelThresholdSeconds);
        $this->serviceLevelThresholdSeconds->setName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $serviceLevelThresholdSeconds
     */
    public function getServiceLevelThresholdSeconds()
    {
        return ($this->serviceLevelThresholdSeconds) ? $this->serviceLevelThresholdSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceLevelInclusions(CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions = null)
    {
        $this->serviceLevelInclusions = ($serviceLevelInclusions InstanceOf CallCenterScheduledReportServiceLevelInclusions)
             ? $serviceLevelInclusions
             : new CallCenterScheduledReportServiceLevelInclusions($serviceLevelInclusions);
        $this->serviceLevelInclusions->setName('serviceLevelInclusions');
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
        $this->serviceLevelObjectivePercentage->setName('serviceLevelObjectivePercentage');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServiceLevelObjective $serviceLevelObjectivePercentage
     */
    public function getServiceLevelObjectivePercentage()
    {
        return ($this->serviceLevelObjectivePercentage) ? $this->serviceLevelObjectivePercentage->getValue() : null;
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds = ($abandonedCallThresholdSeconds InstanceOf CallCenterReportThresholdSeconds)
             ? $abandonedCallThresholdSeconds
             : new CallCenterReportThresholdSeconds($abandonedCallThresholdSeconds);
        $this->abandonedCallThresholdSeconds->setName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportThresholdSeconds $abandonedCallThresholdSeconds
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return ($this->abandonedCallThresholdSeconds) ? $this->abandonedCallThresholdSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
        $this->emailAddress->setName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailAddress
     */
    public function getEmailAddress()
    {
        return ($this->emailAddress) ? $this->emailAddress->getValue() : null;
    }
}

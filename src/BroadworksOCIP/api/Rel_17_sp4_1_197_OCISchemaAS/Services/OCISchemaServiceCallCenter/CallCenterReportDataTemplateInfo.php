<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Call center reporting data template info.
 */
class CallCenterReportDataTemplateInfo extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportDataTemplateInfo';
    protected $dataTemplate;
    protected $reportType;
    protected $isRealtimeReport;
    protected $isAgentParamRequired;
    protected $isCallCenterParamRequired;
    protected $isCallCenterDnisParamRequired;
    protected $isSamplingPeriodParamRequired;
    protected $isCallCompletionThresholdParamRequired;
    protected $isShortDurationThresholdParamRequired;
    protected $isServiceLevelThresholdParamRequired;
    protected $isServiceLevelInclusionsParamRequired;
    protected $isServiceLevelObjectiveThresholdParamRequired;
    protected $isAbandonedCallThresholdParamRequired;

    public function __construct(
         $dataTemplate = '',
         $reportType = '',
         $isRealtimeReport = '',
         $isAgentParamRequired = '',
         $isCallCenterParamRequired = '',
         $isCallCenterDnisParamRequired = '',
         $isSamplingPeriodParamRequired = '',
         $isCallCompletionThresholdParamRequired = '',
         $isShortDurationThresholdParamRequired = '',
         $isServiceLevelThresholdParamRequired = '',
         $isServiceLevelInclusionsParamRequired = '',
         $isServiceLevelObjectiveThresholdParamRequired = '',
         $isAbandonedCallThresholdParamRequired = ''
    ) {
        $this->setDataTemplate($dataTemplate);
        $this->setReportType($reportType);
        $this->setIsRealtimeReport($isRealtimeReport);
        $this->setIsAgentParamRequired($isAgentParamRequired);
        $this->setIsCallCenterParamRequired($isCallCenterParamRequired);
        $this->setIsCallCenterDnisParamRequired($isCallCenterDnisParamRequired);
        $this->setIsSamplingPeriodParamRequired($isSamplingPeriodParamRequired);
        $this->setIsCallCompletionThresholdParamRequired($isCallCompletionThresholdParamRequired);
        $this->setIsShortDurationThresholdParamRequired($isShortDurationThresholdParamRequired);
        $this->setIsServiceLevelThresholdParamRequired($isServiceLevelThresholdParamRequired);
        $this->setIsServiceLevelInclusionsParamRequired($isServiceLevelInclusionsParamRequired);
        $this->setIsServiceLevelObjectiveThresholdParamRequired($isServiceLevelObjectiveThresholdParamRequired);
        $this->setIsAbandonedCallThresholdParamRequired($isAbandonedCallThresholdParamRequired);
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
    public function setDataTemplate($dataTemplate = null)
    {
        $this->dataTemplate = new SimpleContent($dataTemplate);
        $this->dataTemplate->setElementName('dataTemplate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $dataTemplate
     */
    public function getDataTemplate()
    {
        return ($this->dataTemplate)
            ? $this->dataTemplate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportType($reportType = null)
    {
        $this->reportType = new SimpleContent($reportType);
        $this->reportType->setElementName('reportType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $reportType
     */
    public function getReportType()
    {
        return ($this->reportType)
            ? $this->reportType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsRealtimeReport($isRealtimeReport = null)
    {
        $this->isRealtimeReport = new SimpleContent($isRealtimeReport);
        $this->isRealtimeReport->setElementName('isRealtimeReport');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isRealtimeReport
     */
    public function getIsRealtimeReport()
    {
        return ($this->isRealtimeReport)
            ? $this->isRealtimeReport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsAgentParamRequired($isAgentParamRequired = null)
    {
        $this->isAgentParamRequired = new SimpleContent($isAgentParamRequired);
        $this->isAgentParamRequired->setElementName('isAgentParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isAgentParamRequired
     */
    public function getIsAgentParamRequired()
    {
        return ($this->isAgentParamRequired)
            ? $this->isAgentParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCallCenterParamRequired($isCallCenterParamRequired = null)
    {
        $this->isCallCenterParamRequired = new SimpleContent($isCallCenterParamRequired);
        $this->isCallCenterParamRequired->setElementName('isCallCenterParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isCallCenterParamRequired
     */
    public function getIsCallCenterParamRequired()
    {
        return ($this->isCallCenterParamRequired)
            ? $this->isCallCenterParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCallCenterDnisParamRequired($isCallCenterDnisParamRequired = null)
    {
        $this->isCallCenterDnisParamRequired = new SimpleContent($isCallCenterDnisParamRequired);
        $this->isCallCenterDnisParamRequired->setElementName('isCallCenterDnisParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isCallCenterDnisParamRequired
     */
    public function getIsCallCenterDnisParamRequired()
    {
        return ($this->isCallCenterDnisParamRequired)
            ? $this->isCallCenterDnisParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsSamplingPeriodParamRequired($isSamplingPeriodParamRequired = null)
    {
        $this->isSamplingPeriodParamRequired = new SimpleContent($isSamplingPeriodParamRequired);
        $this->isSamplingPeriodParamRequired->setElementName('isSamplingPeriodParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isSamplingPeriodParamRequired
     */
    public function getIsSamplingPeriodParamRequired()
    {
        return ($this->isSamplingPeriodParamRequired)
            ? $this->isSamplingPeriodParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCallCompletionThresholdParamRequired($isCallCompletionThresholdParamRequired = null)
    {
        $this->isCallCompletionThresholdParamRequired = new SimpleContent($isCallCompletionThresholdParamRequired);
        $this->isCallCompletionThresholdParamRequired->setElementName('isCallCompletionThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isCallCompletionThresholdParamRequired
     */
    public function getIsCallCompletionThresholdParamRequired()
    {
        return ($this->isCallCompletionThresholdParamRequired)
            ? $this->isCallCompletionThresholdParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsShortDurationThresholdParamRequired($isShortDurationThresholdParamRequired = null)
    {
        $this->isShortDurationThresholdParamRequired = new SimpleContent($isShortDurationThresholdParamRequired);
        $this->isShortDurationThresholdParamRequired->setElementName('isShortDurationThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isShortDurationThresholdParamRequired
     */
    public function getIsShortDurationThresholdParamRequired()
    {
        return ($this->isShortDurationThresholdParamRequired)
            ? $this->isShortDurationThresholdParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsServiceLevelThresholdParamRequired($isServiceLevelThresholdParamRequired = null)
    {
        $this->isServiceLevelThresholdParamRequired = new SimpleContent($isServiceLevelThresholdParamRequired);
        $this->isServiceLevelThresholdParamRequired->setElementName('isServiceLevelThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isServiceLevelThresholdParamRequired
     */
    public function getIsServiceLevelThresholdParamRequired()
    {
        return ($this->isServiceLevelThresholdParamRequired)
            ? $this->isServiceLevelThresholdParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsServiceLevelInclusionsParamRequired($isServiceLevelInclusionsParamRequired = null)
    {
        $this->isServiceLevelInclusionsParamRequired = new SimpleContent($isServiceLevelInclusionsParamRequired);
        $this->isServiceLevelInclusionsParamRequired->setElementName('isServiceLevelInclusionsParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isServiceLevelInclusionsParamRequired
     */
    public function getIsServiceLevelInclusionsParamRequired()
    {
        return ($this->isServiceLevelInclusionsParamRequired)
            ? $this->isServiceLevelInclusionsParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsServiceLevelObjectiveThresholdParamRequired($isServiceLevelObjectiveThresholdParamRequired = null)
    {
        $this->isServiceLevelObjectiveThresholdParamRequired = new SimpleContent($isServiceLevelObjectiveThresholdParamRequired);
        $this->isServiceLevelObjectiveThresholdParamRequired->setElementName('isServiceLevelObjectiveThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isServiceLevelObjectiveThresholdParamRequired
     */
    public function getIsServiceLevelObjectiveThresholdParamRequired()
    {
        return ($this->isServiceLevelObjectiveThresholdParamRequired)
            ? $this->isServiceLevelObjectiveThresholdParamRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsAbandonedCallThresholdParamRequired($isAbandonedCallThresholdParamRequired = null)
    {
        $this->isAbandonedCallThresholdParamRequired = new SimpleContent($isAbandonedCallThresholdParamRequired);
        $this->isAbandonedCallThresholdParamRequired->setElementName('isAbandonedCallThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isAbandonedCallThresholdParamRequired
     */
    public function getIsAbandonedCallThresholdParamRequired()
    {
        return ($this->isAbandonedCallThresholdParamRequired)
            ? $this->isAbandonedCallThresholdParamRequired->getElementValue()
            : null;
    }
}

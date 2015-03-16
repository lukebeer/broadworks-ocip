<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Call center reporting data template info.
 */
class CallCenterReportDataTemplateInfo extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterReportDataTemplateInfo';
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
        $this->dataTemplate->setName('dataTemplate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $dataTemplate
     */
    public function getDataTemplate()
    {
        return ($this->dataTemplate) ? $this->dataTemplate->getValue() : null;
    }

    /**
     * 
     */
    public function setReportType($reportType = null)
    {
        $this->reportType = new SimpleContent($reportType);
        $this->reportType->setName('reportType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $reportType
     */
    public function getReportType()
    {
        return ($this->reportType) ? $this->reportType->getValue() : null;
    }

    /**
     * 
     */
    public function setIsRealtimeReport($isRealtimeReport = null)
    {
        $this->isRealtimeReport = new SimpleContent($isRealtimeReport);
        $this->isRealtimeReport->setName('isRealtimeReport');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isRealtimeReport
     */
    public function getIsRealtimeReport()
    {
        return ($this->isRealtimeReport) ? $this->isRealtimeReport->getValue() : null;
    }

    /**
     * 
     */
    public function setIsAgentParamRequired($isAgentParamRequired = null)
    {
        $this->isAgentParamRequired = new SimpleContent($isAgentParamRequired);
        $this->isAgentParamRequired->setName('isAgentParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isAgentParamRequired
     */
    public function getIsAgentParamRequired()
    {
        return ($this->isAgentParamRequired) ? $this->isAgentParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsCallCenterParamRequired($isCallCenterParamRequired = null)
    {
        $this->isCallCenterParamRequired = new SimpleContent($isCallCenterParamRequired);
        $this->isCallCenterParamRequired->setName('isCallCenterParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isCallCenterParamRequired
     */
    public function getIsCallCenterParamRequired()
    {
        return ($this->isCallCenterParamRequired) ? $this->isCallCenterParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsCallCenterDnisParamRequired($isCallCenterDnisParamRequired = null)
    {
        $this->isCallCenterDnisParamRequired = new SimpleContent($isCallCenterDnisParamRequired);
        $this->isCallCenterDnisParamRequired->setName('isCallCenterDnisParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isCallCenterDnisParamRequired
     */
    public function getIsCallCenterDnisParamRequired()
    {
        return ($this->isCallCenterDnisParamRequired) ? $this->isCallCenterDnisParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsSamplingPeriodParamRequired($isSamplingPeriodParamRequired = null)
    {
        $this->isSamplingPeriodParamRequired = new SimpleContent($isSamplingPeriodParamRequired);
        $this->isSamplingPeriodParamRequired->setName('isSamplingPeriodParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isSamplingPeriodParamRequired
     */
    public function getIsSamplingPeriodParamRequired()
    {
        return ($this->isSamplingPeriodParamRequired) ? $this->isSamplingPeriodParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsCallCompletionThresholdParamRequired($isCallCompletionThresholdParamRequired = null)
    {
        $this->isCallCompletionThresholdParamRequired = new SimpleContent($isCallCompletionThresholdParamRequired);
        $this->isCallCompletionThresholdParamRequired->setName('isCallCompletionThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isCallCompletionThresholdParamRequired
     */
    public function getIsCallCompletionThresholdParamRequired()
    {
        return ($this->isCallCompletionThresholdParamRequired) ? $this->isCallCompletionThresholdParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsShortDurationThresholdParamRequired($isShortDurationThresholdParamRequired = null)
    {
        $this->isShortDurationThresholdParamRequired = new SimpleContent($isShortDurationThresholdParamRequired);
        $this->isShortDurationThresholdParamRequired->setName('isShortDurationThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isShortDurationThresholdParamRequired
     */
    public function getIsShortDurationThresholdParamRequired()
    {
        return ($this->isShortDurationThresholdParamRequired) ? $this->isShortDurationThresholdParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsServiceLevelThresholdParamRequired($isServiceLevelThresholdParamRequired = null)
    {
        $this->isServiceLevelThresholdParamRequired = new SimpleContent($isServiceLevelThresholdParamRequired);
        $this->isServiceLevelThresholdParamRequired->setName('isServiceLevelThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isServiceLevelThresholdParamRequired
     */
    public function getIsServiceLevelThresholdParamRequired()
    {
        return ($this->isServiceLevelThresholdParamRequired) ? $this->isServiceLevelThresholdParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsServiceLevelInclusionsParamRequired($isServiceLevelInclusionsParamRequired = null)
    {
        $this->isServiceLevelInclusionsParamRequired = new SimpleContent($isServiceLevelInclusionsParamRequired);
        $this->isServiceLevelInclusionsParamRequired->setName('isServiceLevelInclusionsParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isServiceLevelInclusionsParamRequired
     */
    public function getIsServiceLevelInclusionsParamRequired()
    {
        return ($this->isServiceLevelInclusionsParamRequired) ? $this->isServiceLevelInclusionsParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsServiceLevelObjectiveThresholdParamRequired($isServiceLevelObjectiveThresholdParamRequired = null)
    {
        $this->isServiceLevelObjectiveThresholdParamRequired = new SimpleContent($isServiceLevelObjectiveThresholdParamRequired);
        $this->isServiceLevelObjectiveThresholdParamRequired->setName('isServiceLevelObjectiveThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isServiceLevelObjectiveThresholdParamRequired
     */
    public function getIsServiceLevelObjectiveThresholdParamRequired()
    {
        return ($this->isServiceLevelObjectiveThresholdParamRequired) ? $this->isServiceLevelObjectiveThresholdParamRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsAbandonedCallThresholdParamRequired($isAbandonedCallThresholdParamRequired = null)
    {
        $this->isAbandonedCallThresholdParamRequired = new SimpleContent($isAbandonedCallThresholdParamRequired);
        $this->isAbandonedCallThresholdParamRequired->setName('isAbandonedCallThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isAbandonedCallThresholdParamRequired
     */
    public function getIsAbandonedCallThresholdParamRequired()
    {
        return ($this->isAbandonedCallThresholdParamRequired) ? $this->isAbandonedCallThresholdParamRequired->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateInfo;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Call center reporting data template info.
 */
class CallCenterReportDataTemplateInfo extends ComplexType implements ComplexInterface
{
    public    $responseType                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateInfo';
    public    $name                                          = 'CallCenterReportDataTemplateInfo';
    protected $dataTemplate                                  = null;
    protected $reportType                                    = null;
    protected $isRealtimeReport                              = null;
    protected $isAgentParamRequired                          = null;
    protected $isCallCenterParamRequired                     = null;
    protected $isCallCenterDnisParamRequired                 = null;
    protected $isSamplingPeriodParamRequired                 = null;
    protected $isCallCompletionThresholdParamRequired        = null;
    protected $isShortDurationThresholdParamRequired         = null;
    protected $isServiceLevelThresholdParamRequired          = null;
    protected $isServiceLevelInclusionsParamRequired         = null;
    protected $isServiceLevelObjectiveThresholdParamRequired = null;
    protected $isAbandonedCallThresholdParamRequired         = null;

    public function __construct(
         $dataTemplate,
         $reportType,
         $isRealtimeReport,
         $isAgentParamRequired,
         $isCallCenterParamRequired,
         $isCallCenterDnisParamRequired,
         $isSamplingPeriodParamRequired,
         $isCallCompletionThresholdParamRequired,
         $isShortDurationThresholdParamRequired,
         $isServiceLevelThresholdParamRequired,
         $isServiceLevelInclusionsParamRequired,
         $isServiceLevelObjectiveThresholdParamRequired,
         $isAbandonedCallThresholdParamRequired
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
     * @return CallCenterReportDataTemplateInfo
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
        if (!$dataTemplate) return $this;
        $this->dataTemplate = new SimpleContent($dataTemplate);
        $this->dataTemplate->setName('dataTemplate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDataTemplate()
    {
        return $this->dataTemplate->getValue();
    }

    /**
     * 
     */
    public function setReportType($reportType = null)
    {
        if (!$reportType) return $this;
        $this->reportType = new SimpleContent($reportType);
        $this->reportType->setName('reportType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getReportType()
    {
        return $this->reportType->getValue();
    }

    /**
     * 
     */
    public function setIsRealtimeReport($isRealtimeReport = null)
    {
        if (!$isRealtimeReport) return $this;
        $this->isRealtimeReport = new SimpleContent($isRealtimeReport);
        $this->isRealtimeReport->setName('isRealtimeReport');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsRealtimeReport()
    {
        return $this->isRealtimeReport->getValue();
    }

    /**
     * 
     */
    public function setIsAgentParamRequired($isAgentParamRequired = null)
    {
        if (!$isAgentParamRequired) return $this;
        $this->isAgentParamRequired = new SimpleContent($isAgentParamRequired);
        $this->isAgentParamRequired->setName('isAgentParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsAgentParamRequired()
    {
        return $this->isAgentParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsCallCenterParamRequired($isCallCenterParamRequired = null)
    {
        if (!$isCallCenterParamRequired) return $this;
        $this->isCallCenterParamRequired = new SimpleContent($isCallCenterParamRequired);
        $this->isCallCenterParamRequired->setName('isCallCenterParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsCallCenterParamRequired()
    {
        return $this->isCallCenterParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsCallCenterDnisParamRequired($isCallCenterDnisParamRequired = null)
    {
        if (!$isCallCenterDnisParamRequired) return $this;
        $this->isCallCenterDnisParamRequired = new SimpleContent($isCallCenterDnisParamRequired);
        $this->isCallCenterDnisParamRequired->setName('isCallCenterDnisParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsCallCenterDnisParamRequired()
    {
        return $this->isCallCenterDnisParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsSamplingPeriodParamRequired($isSamplingPeriodParamRequired = null)
    {
        if (!$isSamplingPeriodParamRequired) return $this;
        $this->isSamplingPeriodParamRequired = new SimpleContent($isSamplingPeriodParamRequired);
        $this->isSamplingPeriodParamRequired->setName('isSamplingPeriodParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsSamplingPeriodParamRequired()
    {
        return $this->isSamplingPeriodParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsCallCompletionThresholdParamRequired($isCallCompletionThresholdParamRequired = null)
    {
        if (!$isCallCompletionThresholdParamRequired) return $this;
        $this->isCallCompletionThresholdParamRequired = new SimpleContent($isCallCompletionThresholdParamRequired);
        $this->isCallCompletionThresholdParamRequired->setName('isCallCompletionThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsCallCompletionThresholdParamRequired()
    {
        return $this->isCallCompletionThresholdParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsShortDurationThresholdParamRequired($isShortDurationThresholdParamRequired = null)
    {
        if (!$isShortDurationThresholdParamRequired) return $this;
        $this->isShortDurationThresholdParamRequired = new SimpleContent($isShortDurationThresholdParamRequired);
        $this->isShortDurationThresholdParamRequired->setName('isShortDurationThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsShortDurationThresholdParamRequired()
    {
        return $this->isShortDurationThresholdParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsServiceLevelThresholdParamRequired($isServiceLevelThresholdParamRequired = null)
    {
        if (!$isServiceLevelThresholdParamRequired) return $this;
        $this->isServiceLevelThresholdParamRequired = new SimpleContent($isServiceLevelThresholdParamRequired);
        $this->isServiceLevelThresholdParamRequired->setName('isServiceLevelThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsServiceLevelThresholdParamRequired()
    {
        return $this->isServiceLevelThresholdParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsServiceLevelInclusionsParamRequired($isServiceLevelInclusionsParamRequired = null)
    {
        if (!$isServiceLevelInclusionsParamRequired) return $this;
        $this->isServiceLevelInclusionsParamRequired = new SimpleContent($isServiceLevelInclusionsParamRequired);
        $this->isServiceLevelInclusionsParamRequired->setName('isServiceLevelInclusionsParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsServiceLevelInclusionsParamRequired()
    {
        return $this->isServiceLevelInclusionsParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsServiceLevelObjectiveThresholdParamRequired($isServiceLevelObjectiveThresholdParamRequired = null)
    {
        if (!$isServiceLevelObjectiveThresholdParamRequired) return $this;
        $this->isServiceLevelObjectiveThresholdParamRequired = new SimpleContent($isServiceLevelObjectiveThresholdParamRequired);
        $this->isServiceLevelObjectiveThresholdParamRequired->setName('isServiceLevelObjectiveThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsServiceLevelObjectiveThresholdParamRequired()
    {
        return $this->isServiceLevelObjectiveThresholdParamRequired->getValue();
    }

    /**
     * 
     */
    public function setIsAbandonedCallThresholdParamRequired($isAbandonedCallThresholdParamRequired = null)
    {
        if (!$isAbandonedCallThresholdParamRequired) return $this;
        $this->isAbandonedCallThresholdParamRequired = new SimpleContent($isAbandonedCallThresholdParamRequired);
        $this->isAbandonedCallThresholdParamRequired->setName('isAbandonedCallThresholdParamRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsAbandonedCallThresholdParamRequired()
    {
        return $this->isAbandonedCallThresholdParamRequired->getValue();
    }
}

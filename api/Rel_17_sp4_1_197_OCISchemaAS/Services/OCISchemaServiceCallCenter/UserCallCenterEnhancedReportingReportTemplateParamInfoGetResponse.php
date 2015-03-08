<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $isRealtimeReport                    = null;
    protected $requireAgentParam                   = null;
    protected $requireCallCenterParam              = null;
    protected $requireCallCenterDnisParam          = null;
    protected $requireSamplingPeriodParam          = null;
    protected $callCompletionThresholdParam        = null;
    protected $shortDurationThresholdParam         = null;
    protected $serviceLevelThresholdParam          = null;
    protected $serviceLevelInclusionsParam         = null;
    protected $serviceLevelObjectiveThresholdParam = null;
    protected $abandonedCallThresholdParam         = null;
    protected $serviceLevelThresholdParamNumber    = null;
    protected $abandonedCallThresholdParamNumber   = null;


    /**
     * 
     */
    public function setIsRealtimeReport($isRealtimeReport = null)
    {
        $this->isRealtimeReport = (boolean) $isRealtimeReport;
    }

    /**
     * 
     */
    public function getIsRealtimeReport()
    {
        return (!$this->isRealtimeReport) ?: $this->isRealtimeReport->getValue();
    }

    /**
     * 
     */
    public function setRequireAgentParam($requireAgentParam = null)
    {
        $this->requireAgentParam = (boolean) $requireAgentParam;
    }

    /**
     * 
     */
    public function getRequireAgentParam()
    {
        return (!$this->requireAgentParam) ?: $this->requireAgentParam->getValue();
    }

    /**
     * 
     */
    public function setRequireCallCenterParam($requireCallCenterParam = null)
    {
        $this->requireCallCenterParam = (boolean) $requireCallCenterParam;
    }

    /**
     * 
     */
    public function getRequireCallCenterParam()
    {
        return (!$this->requireCallCenterParam) ?: $this->requireCallCenterParam->getValue();
    }

    /**
     * 
     */
    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam = null)
    {
        $this->requireCallCenterDnisParam = (boolean) $requireCallCenterDnisParam;
    }

    /**
     * 
     */
    public function getRequireCallCenterDnisParam()
    {
        return (!$this->requireCallCenterDnisParam) ?: $this->requireCallCenterDnisParam->getValue();
    }

    /**
     * 
     */
    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam = null)
    {
        $this->requireSamplingPeriodParam = (boolean) $requireSamplingPeriodParam;
    }

    /**
     * 
     */
    public function getRequireSamplingPeriodParam()
    {
        return (!$this->requireSamplingPeriodParam) ?: $this->requireSamplingPeriodParam->getValue();
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function setCallCompletionThresholdParam($callCompletionThresholdParam = null)
    {
        $this->callCompletionThresholdParam = ($callCompletionThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $callCompletionThresholdParam
             : new CallCenterReportInputParameterOption($callCompletionThresholdParam);
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function getCallCompletionThresholdParam()
    {
        return (!$this->callCompletionThresholdParam) ?: $this->callCompletionThresholdParam->getValue();
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function setShortDurationThresholdParam($shortDurationThresholdParam = null)
    {
        $this->shortDurationThresholdParam = ($shortDurationThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $shortDurationThresholdParam
             : new CallCenterReportInputParameterOption($shortDurationThresholdParam);
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function getShortDurationThresholdParam()
    {
        return (!$this->shortDurationThresholdParam) ?: $this->shortDurationThresholdParam->getValue();
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function setServiceLevelThresholdParam($serviceLevelThresholdParam = null)
    {
        $this->serviceLevelThresholdParam = ($serviceLevelThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function getServiceLevelThresholdParam()
    {
        return (!$this->serviceLevelThresholdParam) ?: $this->serviceLevelThresholdParam->getValue();
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam = null)
    {
        $this->serviceLevelInclusionsParam = ($serviceLevelInclusionsParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelInclusionsParam
             : new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function getServiceLevelInclusionsParam()
    {
        return (!$this->serviceLevelInclusionsParam) ?: $this->serviceLevelInclusionsParam->getValue();
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam = null)
    {
        $this->serviceLevelObjectiveThresholdParam = ($serviceLevelObjectiveThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelObjectiveThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return (!$this->serviceLevelObjectiveThresholdParam) ?: $this->serviceLevelObjectiveThresholdParam->getValue();
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam = null)
    {
        $this->abandonedCallThresholdParam = ($abandonedCallThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $abandonedCallThresholdParam
             : new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
    }

    /**
     * Options for call center enhanced reporting input parameters.
     */
    public function getAbandonedCallThresholdParam()
    {
        return (!$this->abandonedCallThresholdParam) ?: $this->abandonedCallThresholdParam->getValue();
    }

    /**
     * Number of Service Level input parameters.
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber = null)
    {
        $this->serviceLevelThresholdParamNumber = ($serviceLevelThresholdParamNumber InstanceOf CallCenterReportServiceLevelInputParameterNumber)
             ? $serviceLevelThresholdParamNumber
             : new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
    }

    /**
     * Number of Service Level input parameters.
     */
    public function getServiceLevelThresholdParamNumber()
    {
        return (!$this->serviceLevelThresholdParamNumber) ?: $this->serviceLevelThresholdParamNumber->getValue();
    }

    /**
     * Number of Abandoned Call input parameters.
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber = null)
    {
        $this->abandonedCallThresholdParamNumber = ($abandonedCallThresholdParamNumber InstanceOf CallCenterReportAbandonedCallInputParameterNumber)
             ? $abandonedCallThresholdParamNumber
             : new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
    }

    /**
     * Number of Abandoned Call input parameters.
     */
    public function getAbandonedCallThresholdParamNumber()
    {
        return (!$this->abandonedCallThresholdParamNumber) ?: $this->abandonedCallThresholdParamNumber->getValue();
    }
}

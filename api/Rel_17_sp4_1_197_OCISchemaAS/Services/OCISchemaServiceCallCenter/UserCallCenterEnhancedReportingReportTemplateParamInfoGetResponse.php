<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isRealtimeReport,
             $requireAgentParam,
             $requireCallCenterParam,
             $requireCallCenterDnisParam,
             $requireSamplingPeriodParam,
             $callCompletionThresholdParam=null,
             $shortDurationThresholdParam=null,
             $serviceLevelThresholdParam=null,
             $serviceLevelInclusionsParam=null,
             $serviceLevelObjectiveThresholdParam=null,
             $abandonedCallThresholdParam=null,
             $serviceLevelThresholdParamNumber=null,
             $abandonedCallThresholdParamNumber=null
    ) {
        $this->isRealtimeReport                    = $isRealtimeReport;
        $this->requireAgentParam                   = $requireAgentParam;
        $this->requireCallCenterParam              = $requireCallCenterParam;
        $this->requireCallCenterDnisParam          = $requireCallCenterDnisParam;
        $this->requireSamplingPeriodParam          = $requireSamplingPeriodParam;
        $this->callCompletionThresholdParam        = $callCompletionThresholdParam;
        $this->shortDurationThresholdParam         = $shortDurationThresholdParam;
        $this->serviceLevelThresholdParam          = $serviceLevelThresholdParam;
        $this->serviceLevelInclusionsParam         = $serviceLevelInclusionsParam;
        $this->serviceLevelObjectiveThresholdParam = $serviceLevelObjectiveThresholdParam;
        $this->abandonedCallThresholdParam         = $abandonedCallThresholdParam;
        $this->serviceLevelThresholdParamNumber    = new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
        $this->abandonedCallThresholdParamNumber   = new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
        $this->args                                = func_get_args();
    }

    public function setIsRealtimeReport($isRealtimeReport)
    {
        $isRealtimeReport and $this->isRealtimeReport = new xs:boolean($isRealtimeReport);
    }

    public function getIsRealtimeReport()
    {
        return (!$this->isRealtimeReport) ?: $this->isRealtimeReport->value();
    }

    public function setRequireAgentParam($requireAgentParam)
    {
        $requireAgentParam and $this->requireAgentParam = new xs:boolean($requireAgentParam);
    }

    public function getRequireAgentParam()
    {
        return (!$this->requireAgentParam) ?: $this->requireAgentParam->value();
    }

    public function setRequireCallCenterParam($requireCallCenterParam)
    {
        $requireCallCenterParam and $this->requireCallCenterParam = new xs:boolean($requireCallCenterParam);
    }

    public function getRequireCallCenterParam()
    {
        return (!$this->requireCallCenterParam) ?: $this->requireCallCenterParam->value();
    }

    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam)
    {
        $requireCallCenterDnisParam and $this->requireCallCenterDnisParam = new xs:boolean($requireCallCenterDnisParam);
    }

    public function getRequireCallCenterDnisParam()
    {
        return (!$this->requireCallCenterDnisParam) ?: $this->requireCallCenterDnisParam->value();
    }

    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam)
    {
        $requireSamplingPeriodParam and $this->requireSamplingPeriodParam = new xs:boolean($requireSamplingPeriodParam);
    }

    public function getRequireSamplingPeriodParam()
    {
        return (!$this->requireSamplingPeriodParam) ?: $this->requireSamplingPeriodParam->value();
    }

    public function setCallCompletionThresholdParam($callCompletionThresholdParam)
    {
        $callCompletionThresholdParam and $this->callCompletionThresholdParam = new CallCenterReportInputParameterOption($callCompletionThresholdParam);
    }

    public function getCallCompletionThresholdParam()
    {
        return (!$this->callCompletionThresholdParam) ?: $this->callCompletionThresholdParam->value();
    }

    public function setShortDurationThresholdParam($shortDurationThresholdParam)
    {
        $shortDurationThresholdParam and $this->shortDurationThresholdParam = new CallCenterReportInputParameterOption($shortDurationThresholdParam);
    }

    public function getShortDurationThresholdParam()
    {
        return (!$this->shortDurationThresholdParam) ?: $this->shortDurationThresholdParam->value();
    }

    public function setServiceLevelThresholdParam($serviceLevelThresholdParam)
    {
        $serviceLevelThresholdParam and $this->serviceLevelThresholdParam = new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
    }

    public function getServiceLevelThresholdParam()
    {
        return (!$this->serviceLevelThresholdParam) ?: $this->serviceLevelThresholdParam->value();
    }

    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam)
    {
        $serviceLevelInclusionsParam and $this->serviceLevelInclusionsParam = new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
    }

    public function getServiceLevelInclusionsParam()
    {
        return (!$this->serviceLevelInclusionsParam) ?: $this->serviceLevelInclusionsParam->value();
    }

    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam)
    {
        $serviceLevelObjectiveThresholdParam and $this->serviceLevelObjectiveThresholdParam = new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
    }

    public function getServiceLevelObjectiveThresholdParam()
    {
        return (!$this->serviceLevelObjectiveThresholdParam) ?: $this->serviceLevelObjectiveThresholdParam->value();
    }

    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam)
    {
        $abandonedCallThresholdParam and $this->abandonedCallThresholdParam = new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
    }

    public function getAbandonedCallThresholdParam()
    {
        return (!$this->abandonedCallThresholdParam) ?: $this->abandonedCallThresholdParam->value();
    }

    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber)
    {
        $serviceLevelThresholdParamNumber and $this->serviceLevelThresholdParamNumber = new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
    }

    public function getServiceLevelThresholdParamNumber()
    {
        return (!$this->serviceLevelThresholdParamNumber) ?: $this->serviceLevelThresholdParamNumber->value();
    }

    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber)
    {
        $abandonedCallThresholdParamNumber and $this->abandonedCallThresholdParamNumber = new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
    }

    public function getAbandonedCallThresholdParamNumber()
    {
        return (!$this->abandonedCallThresholdParamNumber) ?: $this->abandonedCallThresholdParamNumber->value();
    }
}

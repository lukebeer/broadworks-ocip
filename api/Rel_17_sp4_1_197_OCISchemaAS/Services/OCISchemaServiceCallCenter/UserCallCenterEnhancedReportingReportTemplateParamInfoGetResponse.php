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
    public    $name                                 = __CLASS__;
    protected $isRealtimeReport                     = null;
    protected $requireAgentParam                    = null;
    protected $requireCallCenterParam               = null;
    protected $requireCallCenterDnisParam           = null;
    protected $requireSamplingPeriodParam           = null;
    protected $callCompletionThresholdParam         = null;
    protected $shortDurationThresholdParam          = null;
    protected $serviceLevelThresholdParam           = null;
    protected $serviceLevelInclusionsParam          = null;
    protected $serviceLevelObjectiveThresholdParam  = null;
    protected $abandonedCallThresholdParam          = null;
    protected $serviceLevelThresholdParamNumber     = null;
    protected $abandonedCallThresholdParamNumber    = null;


    public function setIsRealtimeReport(xs:boolean $isRealtimeReport = null)
    {
    }

    public function getIsRealtimeReport()
    {
        return (!$this->isRealtimeReport) ?: $this->isRealtimeReport->value();
    }

    public function setRequireAgentParam(xs:boolean $requireAgentParam = null)
    {
    }

    public function getRequireAgentParam()
    {
        return (!$this->requireAgentParam) ?: $this->requireAgentParam->value();
    }

    public function setRequireCallCenterParam(xs:boolean $requireCallCenterParam = null)
    {
    }

    public function getRequireCallCenterParam()
    {
        return (!$this->requireCallCenterParam) ?: $this->requireCallCenterParam->value();
    }

    public function setRequireCallCenterDnisParam(xs:boolean $requireCallCenterDnisParam = null)
    {
    }

    public function getRequireCallCenterDnisParam()
    {
        return (!$this->requireCallCenterDnisParam) ?: $this->requireCallCenterDnisParam->value();
    }

    public function setRequireSamplingPeriodParam(xs:boolean $requireSamplingPeriodParam = null)
    {
    }

    public function getRequireSamplingPeriodParam()
    {
        return (!$this->requireSamplingPeriodParam) ?: $this->requireSamplingPeriodParam->value();
    }

    public function setCallCompletionThresholdParam($callCompletionThresholdParam = null)
    {
        $this->callCompletionThresholdParam = ($callCompletionThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $callCompletionThresholdParam
             : new CallCenterReportInputParameterOption($callCompletionThresholdParam);
    }

    public function getCallCompletionThresholdParam()
    {
        return (!$this->callCompletionThresholdParam) ?: $this->callCompletionThresholdParam->value();
    }

    public function setShortDurationThresholdParam($shortDurationThresholdParam = null)
    {
        $this->shortDurationThresholdParam = ($shortDurationThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $shortDurationThresholdParam
             : new CallCenterReportInputParameterOption($shortDurationThresholdParam);
    }

    public function getShortDurationThresholdParam()
    {
        return (!$this->shortDurationThresholdParam) ?: $this->shortDurationThresholdParam->value();
    }

    public function setServiceLevelThresholdParam($serviceLevelThresholdParam = null)
    {
        $this->serviceLevelThresholdParam = ($serviceLevelThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
    }

    public function getServiceLevelThresholdParam()
    {
        return (!$this->serviceLevelThresholdParam) ?: $this->serviceLevelThresholdParam->value();
    }

    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam = null)
    {
        $this->serviceLevelInclusionsParam = ($serviceLevelInclusionsParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelInclusionsParam
             : new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
    }

    public function getServiceLevelInclusionsParam()
    {
        return (!$this->serviceLevelInclusionsParam) ?: $this->serviceLevelInclusionsParam->value();
    }

    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam = null)
    {
        $this->serviceLevelObjectiveThresholdParam = ($serviceLevelObjectiveThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelObjectiveThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
    }

    public function getServiceLevelObjectiveThresholdParam()
    {
        return (!$this->serviceLevelObjectiveThresholdParam) ?: $this->serviceLevelObjectiveThresholdParam->value();
    }

    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam = null)
    {
        $this->abandonedCallThresholdParam = ($abandonedCallThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $abandonedCallThresholdParam
             : new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
    }

    public function getAbandonedCallThresholdParam()
    {
        return (!$this->abandonedCallThresholdParam) ?: $this->abandonedCallThresholdParam->value();
    }

    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber = null)
    {
        $this->serviceLevelThresholdParamNumber = ($serviceLevelThresholdParamNumber InstanceOf CallCenterReportServiceLevelInputParameterNumber)
             ? $serviceLevelThresholdParamNumber
             : new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
    }

    public function getServiceLevelThresholdParamNumber()
    {
        return (!$this->serviceLevelThresholdParamNumber) ?: $this->serviceLevelThresholdParamNumber->value();
    }

    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber = null)
    {
        $this->abandonedCallThresholdParamNumber = ($abandonedCallThresholdParamNumber InstanceOf CallCenterReportAbandonedCallInputParameterNumber)
             ? $abandonedCallThresholdParamNumber
             : new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
    }

    public function getAbandonedCallThresholdParamNumber()
    {
        return (!$this->abandonedCallThresholdParamNumber) ?: $this->abandonedCallThresholdParamNumber->value();
    }
}

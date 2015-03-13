<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                = 'UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsRealtimeReport($isRealtimeReport = null)
    {
        if (!$isRealtimeReport) return $this;
        $this->isRealtimeReport = new PrimitiveType($isRealtimeReport);
        $this->isRealtimeReport->setName('isRealtimeReport');
        return $this;
    }

    /**
     * 
     * @return boolean $isRealtimeReport
     */
    public function getIsRealtimeReport()
    {
        return $this->isRealtimeReport->getValue();
    }

    /**
     * 
     */
    public function setRequireAgentParam($requireAgentParam = null)
    {
        if (!$requireAgentParam) return $this;
        $this->requireAgentParam = new PrimitiveType($requireAgentParam);
        $this->requireAgentParam->setName('requireAgentParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAgentParam
     */
    public function getRequireAgentParam()
    {
        return $this->requireAgentParam->getValue();
    }

    /**
     * 
     */
    public function setRequireCallCenterParam($requireCallCenterParam = null)
    {
        if (!$requireCallCenterParam) return $this;
        $this->requireCallCenterParam = new PrimitiveType($requireCallCenterParam);
        $this->requireCallCenterParam->setName('requireCallCenterParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireCallCenterParam
     */
    public function getRequireCallCenterParam()
    {
        return $this->requireCallCenterParam->getValue();
    }

    /**
     * 
     */
    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam = null)
    {
        if (!$requireCallCenterDnisParam) return $this;
        $this->requireCallCenterDnisParam = new PrimitiveType($requireCallCenterDnisParam);
        $this->requireCallCenterDnisParam->setName('requireCallCenterDnisParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireCallCenterDnisParam
     */
    public function getRequireCallCenterDnisParam()
    {
        return $this->requireCallCenterDnisParam->getValue();
    }

    /**
     * 
     */
    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam = null)
    {
        if (!$requireSamplingPeriodParam) return $this;
        $this->requireSamplingPeriodParam = new PrimitiveType($requireSamplingPeriodParam);
        $this->requireSamplingPeriodParam->setName('requireSamplingPeriodParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireSamplingPeriodParam
     */
    public function getRequireSamplingPeriodParam()
    {
        return $this->requireSamplingPeriodParam->getValue();
    }

    /**
     * 
     */
    public function setCallCompletionThresholdParam($callCompletionThresholdParam = null)
    {
        if (!$callCompletionThresholdParam) return $this;
        $this->callCompletionThresholdParam = ($callCompletionThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $callCompletionThresholdParam
             : new CallCenterReportInputParameterOption($callCompletionThresholdParam);
        $this->callCompletionThresholdParam->setName('callCompletionThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $callCompletionThresholdParam
     */
    public function getCallCompletionThresholdParam()
    {
        return $this->callCompletionThresholdParam->getValue();
    }

    /**
     * 
     */
    public function setShortDurationThresholdParam($shortDurationThresholdParam = null)
    {
        if (!$shortDurationThresholdParam) return $this;
        $this->shortDurationThresholdParam = ($shortDurationThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $shortDurationThresholdParam
             : new CallCenterReportInputParameterOption($shortDurationThresholdParam);
        $this->shortDurationThresholdParam->setName('shortDurationThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $shortDurationThresholdParam
     */
    public function getShortDurationThresholdParam()
    {
        return $this->shortDurationThresholdParam->getValue();
    }

    /**
     * 
     */
    public function setServiceLevelThresholdParam($serviceLevelThresholdParam = null)
    {
        if (!$serviceLevelThresholdParam) return $this;
        $this->serviceLevelThresholdParam = ($serviceLevelThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
        $this->serviceLevelThresholdParam->setName('serviceLevelThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $serviceLevelThresholdParam
     */
    public function getServiceLevelThresholdParam()
    {
        return $this->serviceLevelThresholdParam->getValue();
    }

    /**
     * 
     */
    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam = null)
    {
        if (!$serviceLevelInclusionsParam) return $this;
        $this->serviceLevelInclusionsParam = ($serviceLevelInclusionsParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelInclusionsParam
             : new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
        $this->serviceLevelInclusionsParam->setName('serviceLevelInclusionsParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $serviceLevelInclusionsParam
     */
    public function getServiceLevelInclusionsParam()
    {
        return $this->serviceLevelInclusionsParam->getValue();
    }

    /**
     * 
     */
    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam = null)
    {
        if (!$serviceLevelObjectiveThresholdParam) return $this;
        $this->serviceLevelObjectiveThresholdParam = ($serviceLevelObjectiveThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelObjectiveThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
        $this->serviceLevelObjectiveThresholdParam->setName('serviceLevelObjectiveThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return $this->serviceLevelObjectiveThresholdParam->getValue();
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam = null)
    {
        if (!$abandonedCallThresholdParam) return $this;
        $this->abandonedCallThresholdParam = ($abandonedCallThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $abandonedCallThresholdParam
             : new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
        $this->abandonedCallThresholdParam->setName('abandonedCallThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $abandonedCallThresholdParam
     */
    public function getAbandonedCallThresholdParam()
    {
        return $this->abandonedCallThresholdParam->getValue();
    }

    /**
     * 
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber = null)
    {
        if (!$serviceLevelThresholdParamNumber) return $this;
        $this->serviceLevelThresholdParamNumber = ($serviceLevelThresholdParamNumber InstanceOf CallCenterReportServiceLevelInputParameterNumber)
             ? $serviceLevelThresholdParamNumber
             : new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
        $this->serviceLevelThresholdParamNumber->setName('serviceLevelThresholdParamNumber');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServiceLevelInputParameterNumber $serviceLevelThresholdParamNumber
     */
    public function getServiceLevelThresholdParamNumber()
    {
        return $this->serviceLevelThresholdParamNumber->getValue();
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber = null)
    {
        if (!$abandonedCallThresholdParamNumber) return $this;
        $this->abandonedCallThresholdParamNumber = ($abandonedCallThresholdParamNumber InstanceOf CallCenterReportAbandonedCallInputParameterNumber)
             ? $abandonedCallThresholdParamNumber
             : new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
        $this->abandonedCallThresholdParamNumber->setName('abandonedCallThresholdParamNumber');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportAbandonedCallInputParameterNumber $abandonedCallThresholdParamNumber
     */
    public function getAbandonedCallThresholdParamNumber()
    {
        return $this->abandonedCallThresholdParamNumber->getValue();
    }
}

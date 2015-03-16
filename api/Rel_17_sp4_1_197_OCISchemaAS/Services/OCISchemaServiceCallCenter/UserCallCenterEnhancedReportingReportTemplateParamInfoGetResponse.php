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
    public    $name = 'UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse';
    protected $isRealtimeReport;
    protected $requireAgentParam;
    protected $requireCallCenterParam;
    protected $requireCallCenterDnisParam;
    protected $requireSamplingPeriodParam;
    protected $callCompletionThresholdParam;
    protected $shortDurationThresholdParam;
    protected $serviceLevelThresholdParam;
    protected $serviceLevelInclusionsParam;
    protected $serviceLevelObjectiveThresholdParam;
    protected $abandonedCallThresholdParam;
    protected $serviceLevelThresholdParamNumber;
    protected $abandonedCallThresholdParamNumber;

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
        return ($this->isRealtimeReport) ? $this->isRealtimeReport->getValue() : null;
    }

    /**
     * 
     */
    public function setRequireAgentParam($requireAgentParam = null)
    {
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
        return ($this->requireAgentParam) ? $this->requireAgentParam->getValue() : null;
    }

    /**
     * 
     */
    public function setRequireCallCenterParam($requireCallCenterParam = null)
    {
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
        return ($this->requireCallCenterParam) ? $this->requireCallCenterParam->getValue() : null;
    }

    /**
     * 
     */
    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam = null)
    {
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
        return ($this->requireCallCenterDnisParam) ? $this->requireCallCenterDnisParam->getValue() : null;
    }

    /**
     * 
     */
    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam = null)
    {
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
        return ($this->requireSamplingPeriodParam) ? $this->requireSamplingPeriodParam->getValue() : null;
    }

    /**
     * 
     */
    public function setCallCompletionThresholdParam($callCompletionThresholdParam = null)
    {
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
        return ($this->callCompletionThresholdParam) ? $this->callCompletionThresholdParam->getValue() : null;
    }

    /**
     * 
     */
    public function setShortDurationThresholdParam($shortDurationThresholdParam = null)
    {
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
        return ($this->shortDurationThresholdParam) ? $this->shortDurationThresholdParam->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceLevelThresholdParam($serviceLevelThresholdParam = null)
    {
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
        return ($this->serviceLevelThresholdParam) ? $this->serviceLevelThresholdParam->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam = null)
    {
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
        return ($this->serviceLevelInclusionsParam) ? $this->serviceLevelInclusionsParam->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam = null)
    {
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
        return ($this->serviceLevelObjectiveThresholdParam) ? $this->serviceLevelObjectiveThresholdParam->getValue() : null;
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam = null)
    {
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
        return ($this->abandonedCallThresholdParam) ? $this->abandonedCallThresholdParam->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber = null)
    {
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
        return ($this->serviceLevelThresholdParamNumber) ? $this->serviceLevelThresholdParamNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber = null)
    {
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
        return ($this->abandonedCallThresholdParamNumber) ? $this->abandonedCallThresholdParamNumber->getValue() : null;
    }
}

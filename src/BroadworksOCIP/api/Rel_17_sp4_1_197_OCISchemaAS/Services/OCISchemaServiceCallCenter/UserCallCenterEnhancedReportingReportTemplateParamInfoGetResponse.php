<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse $response
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
        $this->isRealtimeReport->setElementName('isRealtimeReport');
        return $this;
    }

    /**
     * 
     * @return boolean $isRealtimeReport
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
    public function setRequireAgentParam($requireAgentParam = null)
    {
        $this->requireAgentParam = new PrimitiveType($requireAgentParam);
        $this->requireAgentParam->setElementName('requireAgentParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAgentParam
     */
    public function getRequireAgentParam()
    {
        return ($this->requireAgentParam)
            ? $this->requireAgentParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireCallCenterParam($requireCallCenterParam = null)
    {
        $this->requireCallCenterParam = new PrimitiveType($requireCallCenterParam);
        $this->requireCallCenterParam->setElementName('requireCallCenterParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireCallCenterParam
     */
    public function getRequireCallCenterParam()
    {
        return ($this->requireCallCenterParam)
            ? $this->requireCallCenterParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam = null)
    {
        $this->requireCallCenterDnisParam = new PrimitiveType($requireCallCenterDnisParam);
        $this->requireCallCenterDnisParam->setElementName('requireCallCenterDnisParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireCallCenterDnisParam
     */
    public function getRequireCallCenterDnisParam()
    {
        return ($this->requireCallCenterDnisParam)
            ? $this->requireCallCenterDnisParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam = null)
    {
        $this->requireSamplingPeriodParam = new PrimitiveType($requireSamplingPeriodParam);
        $this->requireSamplingPeriodParam->setElementName('requireSamplingPeriodParam');
        return $this;
    }

    /**
     * 
     * @return boolean $requireSamplingPeriodParam
     */
    public function getRequireSamplingPeriodParam()
    {
        return ($this->requireSamplingPeriodParam)
            ? $this->requireSamplingPeriodParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallCompletionThresholdParam($callCompletionThresholdParam = null)
    {
        $this->callCompletionThresholdParam = ($callCompletionThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $callCompletionThresholdParam
             : new CallCenterReportInputParameterOption($callCompletionThresholdParam);
        $this->callCompletionThresholdParam->setElementName('callCompletionThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $callCompletionThresholdParam
     */
    public function getCallCompletionThresholdParam()
    {
        return ($this->callCompletionThresholdParam)
            ? $this->callCompletionThresholdParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setShortDurationThresholdParam($shortDurationThresholdParam = null)
    {
        $this->shortDurationThresholdParam = ($shortDurationThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $shortDurationThresholdParam
             : new CallCenterReportInputParameterOption($shortDurationThresholdParam);
        $this->shortDurationThresholdParam->setElementName('shortDurationThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $shortDurationThresholdParam
     */
    public function getShortDurationThresholdParam()
    {
        return ($this->shortDurationThresholdParam)
            ? $this->shortDurationThresholdParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceLevelThresholdParam($serviceLevelThresholdParam = null)
    {
        $this->serviceLevelThresholdParam = ($serviceLevelThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
        $this->serviceLevelThresholdParam->setElementName('serviceLevelThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $serviceLevelThresholdParam
     */
    public function getServiceLevelThresholdParam()
    {
        return ($this->serviceLevelThresholdParam)
            ? $this->serviceLevelThresholdParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam = null)
    {
        $this->serviceLevelInclusionsParam = ($serviceLevelInclusionsParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelInclusionsParam
             : new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
        $this->serviceLevelInclusionsParam->setElementName('serviceLevelInclusionsParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $serviceLevelInclusionsParam
     */
    public function getServiceLevelInclusionsParam()
    {
        return ($this->serviceLevelInclusionsParam)
            ? $this->serviceLevelInclusionsParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam = null)
    {
        $this->serviceLevelObjectiveThresholdParam = ($serviceLevelObjectiveThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelObjectiveThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
        $this->serviceLevelObjectiveThresholdParam->setElementName('serviceLevelObjectiveThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return ($this->serviceLevelObjectiveThresholdParam)
            ? $this->serviceLevelObjectiveThresholdParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam = null)
    {
        $this->abandonedCallThresholdParam = ($abandonedCallThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $abandonedCallThresholdParam
             : new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
        $this->abandonedCallThresholdParam->setElementName('abandonedCallThresholdParam');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportInputParameterOption $abandonedCallThresholdParam
     */
    public function getAbandonedCallThresholdParam()
    {
        return ($this->abandonedCallThresholdParam)
            ? $this->abandonedCallThresholdParam->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber = null)
    {
        $this->serviceLevelThresholdParamNumber = ($serviceLevelThresholdParamNumber InstanceOf CallCenterReportServiceLevelInputParameterNumber)
             ? $serviceLevelThresholdParamNumber
             : new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
        $this->serviceLevelThresholdParamNumber->setElementName('serviceLevelThresholdParamNumber');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServiceLevelInputParameterNumber $serviceLevelThresholdParamNumber
     */
    public function getServiceLevelThresholdParamNumber()
    {
        return ($this->serviceLevelThresholdParamNumber)
            ? $this->serviceLevelThresholdParamNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber = null)
    {
        $this->abandonedCallThresholdParamNumber = ($abandonedCallThresholdParamNumber InstanceOf CallCenterReportAbandonedCallInputParameterNumber)
             ? $abandonedCallThresholdParamNumber
             : new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
        $this->abandonedCallThresholdParamNumber->setElementName('abandonedCallThresholdParamNumber');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportAbandonedCallInputParameterNumber $abandonedCallThresholdParamNumber
     */
    public function getAbandonedCallThresholdParamNumber()
    {
        return ($this->abandonedCallThresholdParamNumber)
            ? $this->abandonedCallThresholdParamNumber->getElementValue()
            : null;
    }
}

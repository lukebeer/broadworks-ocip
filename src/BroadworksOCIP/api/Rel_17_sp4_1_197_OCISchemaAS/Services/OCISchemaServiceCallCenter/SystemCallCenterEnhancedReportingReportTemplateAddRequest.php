<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateAccessOption;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateQueryFilterValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a system level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingReportTemplateAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterEnhancedReportingReportTemplateAddRequest';
    protected $name;
    protected $description;
    protected $dataTemplate;
    protected $filterNumber;
    protected $xsltTemplate;
    protected $scope;
    protected $isEnabled;
    protected $isRealtimeReport;
    protected $callCompletionThresholdParam;
    protected $shortDurationThresholdParam;
    protected $serviceLevelThresholdParam;
    protected $serviceLevelInclusionsParam;
    protected $serviceLevelObjectiveThresholdParam;
    protected $abandonedCallThresholdParam;
    protected $serviceLevelThresholdParamNumber;
    protected $abandonedCallThresholdParamNumber;
    protected $filterValue;

    public function __construct(
         $name = '',
         $description = null,
         $dataTemplate = '',
         $filterNumber = null,
         $xsltTemplate = '',
         $scope = '',
         $isEnabled = '',
         $isRealtimeReport = null,
         $callCompletionThresholdParam = null,
         $shortDurationThresholdParam = null,
         $serviceLevelThresholdParam = null,
         $serviceLevelInclusionsParam = null,
         $serviceLevelObjectiveThresholdParam = null,
         $abandonedCallThresholdParam = null,
         $serviceLevelThresholdParamNumber = null,
         $abandonedCallThresholdParamNumber = null,
         $filterValue = null
    ) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setDataTemplate($dataTemplate);
        $this->setFilterNumber($filterNumber);
        $this->setXsltTemplate($xsltTemplate);
        $this->setScope($scope);
        $this->setIsEnabled($isEnabled);
        $this->setIsRealtimeReport($isRealtimeReport);
        $this->setCallCompletionThresholdParam($callCompletionThresholdParam);
        $this->setShortDurationThresholdParam($shortDurationThresholdParam);
        $this->setServiceLevelThresholdParam($serviceLevelThresholdParam);
        $this->setServiceLevelInclusionsParam($serviceLevelInclusionsParam);
        $this->setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam);
        $this->setAbandonedCallThresholdParam($abandonedCallThresholdParam);
        $this->setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber);
        $this->setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber);
        $this->setFilterValue($filterValue);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterReportTemplateName)
             ? $name
             : new CallCenterReportTemplateName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterReportTemplateDescription)
             ? $description
             : new CallCenterReportTemplateDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDataTemplate($dataTemplate = null)
    {
        $this->dataTemplate = ($dataTemplate InstanceOf CallCenterReportDataTemplateName)
             ? $dataTemplate
             : new CallCenterReportDataTemplateName($dataTemplate);
        $this->dataTemplate->setElementName('dataTemplate');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateName $dataTemplate
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
    public function setFilterNumber($filterNumber = null)
    {
        $this->filterNumber = ($filterNumber InstanceOf CallCenterReportDataTemplateFilterNumber)
             ? $filterNumber
             : new CallCenterReportDataTemplateFilterNumber($filterNumber);
        $this->filterNumber->setElementName('filterNumber');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateFilterNumber $filterNumber
     */
    public function getFilterNumber()
    {
        return ($this->filterNumber)
            ? $this->filterNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setXsltTemplate(LabeledFileResource $xsltTemplate = null)
    {
        $this->xsltTemplate = ($xsltTemplate InstanceOf LabeledFileResource)
             ? $xsltTemplate
             : new LabeledFileResource($xsltTemplate);
        $this->xsltTemplate->setElementName('xsltTemplate');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $xsltTemplate
     */
    public function getXsltTemplate()
    {
        return $this->xsltTemplate;
    }

    /**
     * 
     */
    public function setScope($scope = null)
    {
        $this->scope = ($scope InstanceOf CallCenterReportTemplateAccessOption)
             ? $scope
             : new CallCenterReportTemplateAccessOption($scope);
        $this->scope->setElementName('scope');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateAccessOption $scope
     */
    public function getScope()
    {
        return ($this->scope)
            ? $this->scope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsEnabled($isEnabled = null)
    {
        $this->isEnabled = new PrimitiveType($isEnabled);
        $this->isEnabled->setElementName('isEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isEnabled
     */
    public function getIsEnabled()
    {
        return ($this->isEnabled)
            ? $this->isEnabled->getElementValue()
            : null;
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

    /**
     * 
     */
    public function setFilterValue($filterValue = null)
    {
        $this->filterValue = ($filterValue InstanceOf CallCenterReportDataTemplateQueryFilterValue)
             ? $filterValue
             : new CallCenterReportDataTemplateQueryFilterValue($filterValue);
        $this->filterValue->setElementName('filterValue');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateQueryFilterValue $filterValue
     */
    public function getFilterValue()
    {
        return ($this->filterValue)
            ? $this->filterValue->getElementValue()
            : null;
    }
}

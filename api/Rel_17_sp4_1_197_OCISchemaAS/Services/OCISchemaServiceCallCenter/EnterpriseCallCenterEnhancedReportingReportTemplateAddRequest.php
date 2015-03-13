<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateQueryFilterValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add an Enterprise level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = 'EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest';
    protected $serviceProviderId                   = null;
    protected $name                                = null;
    protected $description                         = null;
    protected $dataTemplate                        = null;
    protected $filterNumber                        = null;
    protected $xsltTemplate                        = null;
    protected $scope                               = null;
    protected $isEnabled                           = null;
    protected $isRealtimeReport                    = null;
    protected $callCompletionThresholdParam        = null;
    protected $shortDurationThresholdParam         = null;
    protected $serviceLevelThresholdParam          = null;
    protected $serviceLevelInclusionsParam         = null;
    protected $serviceLevelObjectiveThresholdParam = null;
    protected $abandonedCallThresholdParam         = null;
    protected $serviceLevelThresholdParamNumber    = null;
    protected $abandonedCallThresholdParamNumber   = null;
    protected $filterValue                         = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $description = null,
         $dataTemplate,
         $filterNumber = null,
         LabeledFileResource $xsltTemplate,
         $scope,
         $isEnabled,
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
        $this->setServiceProviderId($serviceProviderId);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CallCenterReportTemplateName)
             ? $name
             : new CallCenterReportTemplateName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf CallCenterReportTemplateDescription)
             ? $description
             : new CallCenterReportTemplateDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setDataTemplate($dataTemplate = null)
    {
        if (!$dataTemplate) return $this;
        $this->dataTemplate = ($dataTemplate InstanceOf CallCenterReportDataTemplateName)
             ? $dataTemplate
             : new CallCenterReportDataTemplateName($dataTemplate);
        $this->dataTemplate->setName('dataTemplate');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateName $dataTemplate
     */
    public function getDataTemplate()
    {
        return $this->dataTemplate->getValue();
    }

    /**
     * 
     */
    public function setFilterNumber($filterNumber = null)
    {
        if (!$filterNumber) return $this;
        $this->filterNumber = ($filterNumber InstanceOf CallCenterReportDataTemplateFilterNumber)
             ? $filterNumber
             : new CallCenterReportDataTemplateFilterNumber($filterNumber);
        $this->filterNumber->setName('filterNumber');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateFilterNumber $filterNumber
     */
    public function getFilterNumber()
    {
        return $this->filterNumber->getValue();
    }

    /**
     * 
     */
    public function setXsltTemplate(LabeledFileResource $xsltTemplate = null)
    {
        if (!$xsltTemplate) return $this;
        $this->xsltTemplate = $xsltTemplate;
        $this->xsltTemplate->setName('xsltTemplate');
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
        if (!$scope) return $this;
        $this->scope = ($scope InstanceOf CallCenterReportTemplateAccessOption)
             ? $scope
             : new CallCenterReportTemplateAccessOption($scope);
        $this->scope->setName('scope');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateAccessOption $scope
     */
    public function getScope()
    {
        return $this->scope->getValue();
    }

    /**
     * 
     */
    public function setIsEnabled($isEnabled = null)
    {
        if (!$isEnabled) return $this;
        $this->isEnabled = new PrimitiveType($isEnabled);
        $this->isEnabled->setName('isEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isEnabled
     */
    public function getIsEnabled()
    {
        return $this->isEnabled->getValue();
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

    /**
     * 
     */
    public function setFilterValue($filterValue = null)
    {
        if (!$filterValue) return $this;
        $this->filterValue = ($filterValue InstanceOf CallCenterReportDataTemplateQueryFilterValue)
             ? $filterValue
             : new CallCenterReportDataTemplateQueryFilterValue($filterValue);
        $this->filterValue->setName('filterValue');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateQueryFilterValue $filterValue
     */
    public function getFilterValue()
    {
        return $this->filterValue->getValue();
    }
}

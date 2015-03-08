<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateQueryFilterValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupCallCenterEnhancedReportingReportTemplateGetRequest.
 */
class GroupCallCenterEnhancedReportingReportTemplateGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingReportTemplateGetResponse';
    public    $name                                = __CLASS__;
    protected $description                         = null;
    protected $dataTemplate                        = null;
    protected $filterNumber                        = null;
    protected $xsltTemplateDescription             = null;
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


    /**
     * The call center enhanced reporting report template description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterReportTemplateDescription)
             ? $description
             : new CallCenterReportTemplateDescription($description);
    }

    /**
     * The call center enhanced reporting report template description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * The call center enhanced reporting data template name.
     */
    public function setDataTemplate($dataTemplate = null)
    {
        $this->dataTemplate = ($dataTemplate InstanceOf CallCenterReportDataTemplateName)
             ? $dataTemplate
             : new CallCenterReportDataTemplateName($dataTemplate);
    }

    /**
     * The call center enhanced reporting data template name.
     */
    public function getDataTemplate()
    {
        return (!$this->dataTemplate) ?: $this->dataTemplate->getValue();
    }

    /**
     * Index to a call center enhanced reporting data template's query set.
     */
    public function setFilterNumber($filterNumber = null)
    {
        $this->filterNumber = ($filterNumber InstanceOf CallCenterReportDataTemplateFilterNumber)
             ? $filterNumber
             : new CallCenterReportDataTemplateFilterNumber($filterNumber);
    }

    /**
     * Index to a call center enhanced reporting data template's query set.
     */
    public function getFilterNumber()
    {
        return (!$this->filterNumber) ?: $this->filterNumber->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setXsltTemplateDescription($xsltTemplateDescription = null)
    {
        $this->xsltTemplateDescription = ($xsltTemplateDescription InstanceOf FileDescription)
             ? $xsltTemplateDescription
             : new FileDescription($xsltTemplateDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getXsltTemplateDescription()
    {
        return (!$this->xsltTemplateDescription) ?: $this->xsltTemplateDescription->getValue();
    }

    /**
     * The call center enhanced reporting template access option.
     */
    public function setScope($scope = null)
    {
        $this->scope = ($scope InstanceOf CallCenterReportTemplateAccessOption)
             ? $scope
             : new CallCenterReportTemplateAccessOption($scope);
    }

    /**
     * The call center enhanced reporting template access option.
     */
    public function getScope()
    {
        return (!$this->scope) ?: $this->scope->getValue();
    }

    /**
     * 
     */
    public function setIsEnabled($isEnabled = null)
    {
        $this->isEnabled = (boolean) $isEnabled;
    }

    /**
     * 
     */
    public function getIsEnabled()
    {
        return (!$this->isEnabled) ?: $this->isEnabled->getValue();
    }

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

    /**
     * Fileter value for call center reporting data template query.
     */
    public function setFilterValue($filterValue = null)
    {
        $this->filterValue = ($filterValue InstanceOf CallCenterReportDataTemplateQueryFilterValue)
             ? $filterValue
             : new CallCenterReportDataTemplateQueryFilterValue($filterValue);
    }

    /**
     * Fileter value for call center reporting data template query.
     */
    public function getFilterValue()
    {
        return (!$this->filterValue) ?: $this->filterValue->getValue();
    }
}
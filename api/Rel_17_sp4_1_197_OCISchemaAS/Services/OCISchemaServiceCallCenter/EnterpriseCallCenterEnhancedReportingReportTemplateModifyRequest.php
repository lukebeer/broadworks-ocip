<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateQueryFilterValueReplacementList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify an enterprise level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $name,
             $newName=null,
             $description=null,
             LabeledFileResource $xsltTemplate=null,
             $scope=null,
             $isEnabled=null,
             $isRealtimeReport=null,
             $filterNumber=null,
             $filterValue=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->name              = new CallCenterReportTemplateName($name);
        $this->newName           = new CallCenterReportTemplateName($newName);
        $this->description       = $description;
        $this->xsltTemplate      = $xsltTemplate;
        $this->scope             = $scope;
        $this->isEnabled         = $isEnabled;
        $this->isRealtimeReport  = $isRealtimeReport;
        $this->filterNumber      = new CallCenterReportDataTemplateFilterNumber($filterNumber);
        $this->filterValue       = $filterValue;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new CallCenterReportTemplateName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName)
    {
        $newName and $this->newName = new CallCenterReportTemplateName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CallCenterReportTemplateDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setXsltTemplate($xsltTemplate)
    {
        $xsltTemplate and $this->xsltTemplate = new LabeledFileResource($xsltTemplate);
    }

    public function getXsltTemplate()
    {
        return (!$this->xsltTemplate) ?: $this->xsltTemplate->value();
    }

    public function setScope($scope)
    {
        $scope and $this->scope = new CallCenterReportTemplateAccessOption($scope);
    }

    public function getScope()
    {
        return (!$this->scope) ?: $this->scope->value();
    }

    public function setIsEnabled($isEnabled)
    {
        $isEnabled and $this->isEnabled = new xs:boolean($isEnabled);
    }

    public function getIsEnabled()
    {
        return (!$this->isEnabled) ?: $this->isEnabled->value();
    }

    public function setIsRealtimeReport($isRealtimeReport)
    {
        $isRealtimeReport and $this->isRealtimeReport = new xs:boolean($isRealtimeReport);
    }

    public function getIsRealtimeReport()
    {
        return (!$this->isRealtimeReport) ?: $this->isRealtimeReport->value();
    }

    public function setFilterNumber($filterNumber)
    {
        $filterNumber and $this->filterNumber = new CallCenterReportDataTemplateFilterNumber($filterNumber);
    }

    public function getFilterNumber()
    {
        return (!$this->filterNumber) ?: $this->filterNumber->value();
    }

    public function setFilterValue($filterValue)
    {
        $filterValue and $this->filterValue = new CallCenterReportDataTemplateQueryFilterValueReplacementList($filterValue);
    }

    public function getFilterValue()
    {
        return (!$this->filterValue) ?: $this->filterValue->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateQueryFilterValueReplacementList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateDescription;
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
 * Request to modify an enterprise level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest';
    protected $serviceProviderId;
    protected $name;
    protected $newName;
    protected $description;
    protected $xsltTemplate;
    protected $scope;
    protected $isEnabled;
    protected $isRealtimeReport;
    protected $filterNumber;
    protected $filterValue;

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         $newName = null,
         $description = null,
         LabeledFileResource $xsltTemplate = null,
         $scope = null,
         $isEnabled = null,
         $isRealtimeReport = null,
         $filterNumber = null,
         CallCenterReportDataTemplateQueryFilterValueReplacementList $filterValue = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setXsltTemplate($xsltTemplate);
        $this->setScope($scope);
        $this->setIsEnabled($isEnabled);
        $this->setIsRealtimeReport($isRealtimeReport);
        $this->setFilterNumber($filterNumber);
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
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
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
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CallCenterReportTemplateName)
             ? $newName
             : new CallCenterReportTemplateName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateName $newName
     */
    public function getNewName()
    {
        return ($this->newName) ? $this->newName->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
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
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setXsltTemplate(LabeledFileResource $xsltTemplate = null)
    {
        $this->xsltTemplate = ($xsltTemplate InstanceOf LabeledFileResource)
             ? $xsltTemplate
             : new LabeledFileResource($xsltTemplate);
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
        return ($this->scope) ? $this->scope->getValue() : null;
    }

    /**
     * 
     */
    public function setIsEnabled($isEnabled = null)
    {
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
        return ($this->isEnabled) ? $this->isEnabled->getValue() : null;
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
    public function setFilterNumber($filterNumber = null)
    {
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
        return ($this->filterNumber) ? $this->filterNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setFilterValue(CallCenterReportDataTemplateQueryFilterValueReplacementList $filterValue = null)
    {
        $this->filterValue = ($filterValue InstanceOf CallCenterReportDataTemplateQueryFilterValueReplacementList)
             ? $filterValue
             : new CallCenterReportDataTemplateQueryFilterValueReplacementList($filterValue);
        $this->filterValue->setName('filterValue');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateQueryFilterValueReplacementList $filterValue
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }
}

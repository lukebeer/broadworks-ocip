<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateQueryFilterValueReplacementList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a group level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingReportTemplateModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $name              = null;
    protected $newName           = null;
    protected $description       = null;
    protected $xsltTemplate      = null;
    protected $scope             = null;
    protected $isEnabled         = null;
    protected $isRealtimeReport  = null;
    protected $filterNumber      = null;
    protected $filterValue       = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $newName = null,
         $description = null,
          $xsltTemplate = null,
         $scope = null,
         $isEnabled = null,
         $isRealtimeReport = null,
         $filterNumber = null,
          $filterValue = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * The call center enhanced reporting report template name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterReportTemplateName)
             ? $name
             : new CallCenterReportTemplateName($name);
    }

    /**
     * The call center enhanced reporting report template name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * The call center enhanced reporting report template name.
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CallCenterReportTemplateName)
             ? $newName
             : new CallCenterReportTemplateName($newName);
    }

    /**
     * The call center enhanced reporting report template name.
     */
    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->getValue();
    }

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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setXsltTemplate(LabeledFileResource $xsltTemplate = null)
    {
        $this->xsltTemplate =  $xsltTemplate;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getXsltTemplate()
    {
        return (!$this->xsltTemplate) ?: $this->xsltTemplate->getValue();
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
     * A list of call center reporting data template query filter values that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setFilterValue(CallCenterReportDataTemplateQueryFilterValueReplacementList $filterValue = null)
    {
        $this->filterValue =  $filterValue;
    }

    /**
     * A list of call center reporting data template query filter values that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getFilterValue()
    {
        return (!$this->filterValue) ?: $this->filterValue->getValue();
    }
}

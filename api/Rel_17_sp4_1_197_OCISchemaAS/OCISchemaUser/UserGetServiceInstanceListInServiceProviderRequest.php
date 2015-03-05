<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactServiceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the list of Service Instances in a service provider or an enterprise.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together. searchCriteriaExactUserDepartment criteria is only applicable for an enterprise and is ignored if set for a service provider. 
 *         The response is either a UserGetServiceInstanceListInServiceProviderResponse or an ErrorResponse.
 */
class UserGetServiceInstanceListInServiceProviderRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $responseSizeLimit=null,
             $SearchCriteriaGroupId=null,
             $SearchCriteriaExactServiceType=null,
             $searchCriteriaUserId=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaDn=null,
             $searchCriteriaExtension=null,
             $searchCriteriaExactUserDepartment=null
    ) {
        $this->serviceProviderId                 = new ServiceProviderId($serviceProviderId);
        $this->responseSizeLimit                 = $responseSizeLimit;
        $this->SearchCriteriaGroupId             = $SearchCriteriaGroupId;
        $this->SearchCriteriaExactServiceType    = $SearchCriteriaExactServiceType;
        $this->searchCriteriaUserId              = $searchCriteriaUserId;
        $this->searchCriteriaUserLastName        = $searchCriteriaUserLastName;
        $this->searchCriteriaDn                  = $searchCriteriaDn;
        $this->searchCriteriaExtension           = $searchCriteriaExtension;
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        $this->args                              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaGroupId($SearchCriteriaGroupId)
    {
        $SearchCriteriaGroupId and $this->SearchCriteriaGroupId = new SearchCriteriaGroupId($SearchCriteriaGroupId);
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->SearchCriteriaGroupId) ?: $this->SearchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactServiceType($SearchCriteriaExactServiceType)
    {
        $SearchCriteriaExactServiceType and $this->SearchCriteriaExactServiceType = new SearchCriteriaExactServiceType($SearchCriteriaExactServiceType);
    }

    public function getSearchCriteriaExactServiceType()
    {
        return (!$this->SearchCriteriaExactServiceType) ?: $this->SearchCriteriaExactServiceType->value();
    }

    public function setSearchCriteriaUserId($searchCriteriaUserId)
    {
        $searchCriteriaUserId and $this->searchCriteriaUserId = new SearchCriteriaUserId($searchCriteriaUserId);
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
    }

    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $searchCriteriaUserLastName and $this->searchCriteriaUserLastName = new SearchCriteriaUserLastName($searchCriteriaUserLastName);
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaExtension($searchCriteriaExtension)
    {
        $searchCriteriaExtension and $this->searchCriteriaExtension = new SearchCriteriaExtension($searchCriteriaExtension);
    }

    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->value();
    }

    public function setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $searchCriteriaExactUserDepartment and $this->searchCriteriaExactUserDepartment = new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
    }

    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->value();
    }
}

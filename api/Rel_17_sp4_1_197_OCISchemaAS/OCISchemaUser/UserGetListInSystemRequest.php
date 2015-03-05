<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserInTrunkGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserNetworkClassOfService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the list of users in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetListInSystemResponse or an ErrorResponse.
 */
class UserGetListInSystemRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaDn=null,
             $searchCriteriaEmailAddress=null,
             $searchCriteriaGroupId=null,
             $searchCriteriaExactServiceProvider=null,
             $searchCriteriaExactUserInTrunkGroup=null,
             $searchCriteriaExactUserNetworkClassOfService=null
    ) {
        $this->responseSizeLimit                            = $responseSizeLimit;
        $this->searchCriteriaUserLastName                   = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName                  = $searchCriteriaUserFirstName;
        $this->searchCriteriaDn                             = $searchCriteriaDn;
        $this->searchCriteriaEmailAddress                   = $searchCriteriaEmailAddress;
        $this->searchCriteriaGroupId                        = $searchCriteriaGroupId;
        $this->searchCriteriaExactServiceProvider           = $searchCriteriaExactServiceProvider;
        $this->searchCriteriaExactUserInTrunkGroup          = $searchCriteriaExactUserInTrunkGroup;
        $this->searchCriteriaExactUserNetworkClassOfService = $searchCriteriaExactUserNetworkClassOfService;
        $this->args                                         = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $searchCriteriaUserLastName and $this->searchCriteriaUserLastName = new SearchCriteriaUserLastName($searchCriteriaUserLastName);
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $searchCriteriaUserFirstName and $this->searchCriteriaUserFirstName = new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $searchCriteriaEmailAddress and $this->searchCriteriaEmailAddress = new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
    }

    public function getSearchCriteriaEmailAddress()
    {
        return (!$this->searchCriteriaEmailAddress) ?: $this->searchCriteriaEmailAddress->value();
    }

    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $searchCriteriaGroupId and $this->searchCriteriaGroupId = new SearchCriteriaGroupId($searchCriteriaGroupId);
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider)
    {
        $searchCriteriaExactServiceProvider and $this->searchCriteriaExactServiceProvider = new SearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
    }

    public function getSearchCriteriaExactServiceProvider()
    {
        return (!$this->searchCriteriaExactServiceProvider) ?: $this->searchCriteriaExactServiceProvider->value();
    }

    public function setSearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup)
    {
        $searchCriteriaExactUserInTrunkGroup and $this->searchCriteriaExactUserInTrunkGroup = new SearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup);
    }

    public function getSearchCriteriaExactUserInTrunkGroup()
    {
        return (!$this->searchCriteriaExactUserInTrunkGroup) ?: $this->searchCriteriaExactUserInTrunkGroup->value();
    }

    public function setSearchCriteriaExactUserNetworkClassOfService($searchCriteriaExactUserNetworkClassOfService)
    {
        $searchCriteriaExactUserNetworkClassOfService and $this->searchCriteriaExactUserNetworkClassOfService = new SearchCriteriaExactUserNetworkClassOfService($searchCriteriaExactUserNetworkClassOfService);
    }

    public function getSearchCriteriaExactUserNetworkClassOfService()
    {
        return (!$this->searchCriteriaExactUserNetworkClassOfService) ?: $this->searchCriteriaExactUserNetworkClassOfService->value();
    }
}

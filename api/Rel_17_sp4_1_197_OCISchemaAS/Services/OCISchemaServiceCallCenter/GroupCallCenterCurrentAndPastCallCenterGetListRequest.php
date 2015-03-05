<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaCallCenterName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get all the current and past call centers for the group.
 *         The response is either GroupCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 */
class GroupCallCenterCurrentAndPastCallCenterGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $isPremiumOnly=null,
             $groupId,
             $responseSizeLimit=null,
             $searchCriteriaCallCenterName=null
    ) {
        $this->serviceProviderId            = new ServiceProviderId($serviceProviderId);
        $this->isPremiumOnly                = $isPremiumOnly;
        $this->groupId                      = new GroupId($groupId);
        $this->responseSizeLimit            = $responseSizeLimit;
        $this->searchCriteriaCallCenterName = $searchCriteriaCallCenterName;
        $this->args                         = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setIsPremiumOnly($isPremiumOnly)
    {
        $isPremiumOnly and $this->isPremiumOnly = new xs:boolean($isPremiumOnly);
    }

    public function getIsPremiumOnly()
    {
        return (!$this->isPremiumOnly) ?: $this->isPremiumOnly->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaCallCenterName($searchCriteriaCallCenterName)
    {
        $searchCriteriaCallCenterName and $this->searchCriteriaCallCenterName = new SearchCriteriaCallCenterName($searchCriteriaCallCenterName);
    }

    public function getSearchCriteriaCallCenterName()
    {
        return (!$this->searchCriteriaCallCenterName) ?: $this->searchCriteriaCallCenterName->value();
    }
}

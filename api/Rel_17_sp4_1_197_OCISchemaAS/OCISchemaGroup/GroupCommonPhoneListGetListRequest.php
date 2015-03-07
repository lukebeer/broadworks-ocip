<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupCommonPhoneListNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupCommonPhoneListName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a group's common phone list.
 *         The response is either a GroupCommonPhoneListGetListResponse or an ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 */
class GroupCommonPhoneListGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $serviceProviderId                         = null;
    protected $groupId                                   = null;
    protected $responseSizeLimit                         = null;
    protected $searchCriteriaModeOr                      = null;
    protected $searchCriteriaGroupCommonPhoneListName    = null;
    protected $searchCriteriaGroupCommonPhoneListNumber  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName = null,
         SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName);
        $this->setSearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaModeOr(xs:boolean $searchCriteriaModeOr = null)
    {
    }

    public function getSearchCriteriaModeOr()
    {
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr->value();
    }

    public function setSearchCriteriaGroupCommonPhoneListName(SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName = null)
    {
    }

    public function getSearchCriteriaGroupCommonPhoneListName()
    {
        return (!$this->searchCriteriaGroupCommonPhoneListName) ?: $this->searchCriteriaGroupCommonPhoneListName->value();
    }

    public function setSearchCriteriaGroupCommonPhoneListNumber(SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber = null)
    {
    }

    public function getSearchCriteriaGroupCommonPhoneListNumber()
    {
        return (!$this->searchCriteriaGroupCommonPhoneListNumber) ?: $this->searchCriteriaGroupCommonPhoneListNumber->value();
    }
}

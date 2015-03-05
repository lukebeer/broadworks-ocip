<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaMobilePhoneNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaYahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a table containing the phone directory for a group.
 *         If the specified group is part of an enterprise, the directory includes all users in the enterprise
 *         and all entries in the enterprise common phone list and the common phone list of the specified group.
 *         If the specified group is part of a service provider, the directory includes all users in the group
 *         and all entries in the common phone list of the specified group.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either GroupPhoneDirectoryGetListResponse or ErrorResponse.
 *         
 *         Replace by: GroupPhoneDirectoryGetListRequest17
 */
class GroupPhoneDirectoryGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $isExtendedInfoRequested,
             $responseSizeLimit=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaDn=null,
             $searchCriteriaGroupLocationCode=null,
             $searchCriteriaExtension=null,
             $searchCriteriaMobilePhoneNumber=null,
             $searchCriteriaEmailAddress=null,
             $searchCriteriaYahooId=null,
             $searchCriteriaExactUserGroup=null,
             $searchCriteriaExactUserDepartment=null
    ) {
        $this->serviceProviderId                 = new ServiceProviderId($serviceProviderId);
        $this->groupId                           = new GroupId($groupId);
        $this->isExtendedInfoRequested           = $isExtendedInfoRequested;
        $this->responseSizeLimit                 = $responseSizeLimit;
        $this->searchCriteriaUserLastName        = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName       = $searchCriteriaUserFirstName;
        $this->searchCriteriaDn                  = $searchCriteriaDn;
        $this->searchCriteriaGroupLocationCode   = $searchCriteriaGroupLocationCode;
        $this->searchCriteriaExtension           = $searchCriteriaExtension;
        $this->searchCriteriaMobilePhoneNumber   = $searchCriteriaMobilePhoneNumber;
        $this->searchCriteriaEmailAddress        = $searchCriteriaEmailAddress;
        $this->searchCriteriaYahooId             = $searchCriteriaYahooId;
        $this->searchCriteriaExactUserGroup      = $searchCriteriaExactUserGroup;
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

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setIsExtendedInfoRequested($isExtendedInfoRequested)
    {
        $isExtendedInfoRequested and $this->isExtendedInfoRequested = new xs:boolean($isExtendedInfoRequested);
    }

    public function getIsExtendedInfoRequested()
    {
        return (!$this->isExtendedInfoRequested) ?: $this->isExtendedInfoRequested->value();
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

    public function setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $searchCriteriaGroupLocationCode and $this->searchCriteriaGroupLocationCode = new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
    }

    public function getSearchCriteriaGroupLocationCode()
    {
        return (!$this->searchCriteriaGroupLocationCode) ?: $this->searchCriteriaGroupLocationCode->value();
    }

    public function setSearchCriteriaExtension($searchCriteriaExtension)
    {
        $searchCriteriaExtension and $this->searchCriteriaExtension = new SearchCriteriaExtension($searchCriteriaExtension);
    }

    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->value();
    }

    public function setSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber)
    {
        $searchCriteriaMobilePhoneNumber and $this->searchCriteriaMobilePhoneNumber = new SearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
    }

    public function getSearchCriteriaMobilePhoneNumber()
    {
        return (!$this->searchCriteriaMobilePhoneNumber) ?: $this->searchCriteriaMobilePhoneNumber->value();
    }

    public function setSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $searchCriteriaEmailAddress and $this->searchCriteriaEmailAddress = new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
    }

    public function getSearchCriteriaEmailAddress()
    {
        return (!$this->searchCriteriaEmailAddress) ?: $this->searchCriteriaEmailAddress->value();
    }

    public function setSearchCriteriaYahooId($searchCriteriaYahooId)
    {
        $searchCriteriaYahooId and $this->searchCriteriaYahooId = new SearchCriteriaYahooId($searchCriteriaYahooId);
    }

    public function getSearchCriteriaYahooId()
    {
        return (!$this->searchCriteriaYahooId) ?: $this->searchCriteriaYahooId->value();
    }

    public function setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup)
    {
        $searchCriteriaExactUserGroup and $this->searchCriteriaExactUserGroup = new SearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
    }

    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->value();
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

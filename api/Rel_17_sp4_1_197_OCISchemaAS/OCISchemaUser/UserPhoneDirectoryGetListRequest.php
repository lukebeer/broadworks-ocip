<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaMobilePhoneNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactCustomContactDirectory;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a table containing the phone directory for a user's group.
 *         If the user's group is part of an enterprise, the directory includes all users in the enterprise
 *         and all entries in the enterprise common phone list and the common phone list of the specified
 *         group  (if includeCommonPhoneList is set to true).
 *         If the user's group is part of a service provider, the directory includes all users in the group
 *         and all entries in the common phone list (if includeCommonPhoneList is set to true) of the
 *         specified group.
 *         The response is either UserPhoneDirectoryGetListResponse or ErrorResponse.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. Otherwise, only
 *         results matching all the search criterias are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 */
class UserPhoneDirectoryGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $includeCommonPhoneList,
             $responseSizeLimit=null,
             $searchCriteriaModeOr=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaDn=null,
             $searchCriteriaExtension=null,
             $searchCriteriaMobilePhoneNumber=null,
             $searchCriteriaEmailAddress=null,
             $searchCriteriaExactUserDepartment=null,
             $searchCriteriaExactUserGroup=null,
             $searchCriteriaExactCustomContactDirectory=null
    ) {
        $this->userId                                    = new UserId($userId);
        $this->includeCommonPhoneList                    = $includeCommonPhoneList;
        $this->responseSizeLimit                         = $responseSizeLimit;
        $this->searchCriteriaModeOr                      = $searchCriteriaModeOr;
        $this->searchCriteriaUserLastName                = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName               = $searchCriteriaUserFirstName;
        $this->searchCriteriaDn                          = $searchCriteriaDn;
        $this->searchCriteriaExtension                   = $searchCriteriaExtension;
        $this->searchCriteriaMobilePhoneNumber           = $searchCriteriaMobilePhoneNumber;
        $this->searchCriteriaEmailAddress                = $searchCriteriaEmailAddress;
        $this->searchCriteriaExactUserDepartment         = $searchCriteriaExactUserDepartment;
        $this->searchCriteriaExactUserGroup              = $searchCriteriaExactUserGroup;
        $this->searchCriteriaExactCustomContactDirectory = $searchCriteriaExactCustomContactDirectory;
        $this->args                                      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIncludeCommonPhoneList($includeCommonPhoneList)
    {
        $includeCommonPhoneList and $this->includeCommonPhoneList = new xs:boolean($includeCommonPhoneList);
    }

    public function getIncludeCommonPhoneList()
    {
        return (!$this->includeCommonPhoneList) ?: $this->includeCommonPhoneList->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $searchCriteriaModeOr and $this->searchCriteriaModeOr = new xs:boolean($searchCriteriaModeOr);
    }

    public function getSearchCriteriaModeOr()
    {
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr->value();
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

    public function setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $searchCriteriaExactUserDepartment and $this->searchCriteriaExactUserDepartment = new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
    }

    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->value();
    }

    public function setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup)
    {
        $searchCriteriaExactUserGroup and $this->searchCriteriaExactUserGroup = new SearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
    }

    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->value();
    }

    public function setSearchCriteriaExactCustomContactDirectory($searchCriteriaExactCustomContactDirectory)
    {
        $searchCriteriaExactCustomContactDirectory and $this->searchCriteriaExactCustomContactDirectory = new SearchCriteriaExactCustomContactDirectory($searchCriteriaExactCustomContactDirectory);
    }

    public function getSearchCriteriaExactCustomContactDirectory()
    {
        return (!$this->searchCriteriaExactCustomContactDirectory) ?: $this->searchCriteriaExactCustomContactDirectory->value();
    }
}

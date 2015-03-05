<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a table containing the phone directory for a user.  
 *         Setting isEnterpriseRequested to true will return enterprise directory
 *         members in the response if the user is in an enterprise. Otherwise,
 *         just the group directory members for a user are returned in the 
 *         response.
 *         The response is either UserPhoneDirectoryGetPagedListResponse or 
 *         ErrorResponse.
 *         The search can be done using multiple criterias.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. Otherwise, only
 *         results matching all the search criterias are included in the results.
 *         If no search criteria is specified, all results are returned.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 */
class UserPhoneDirectoryGetPagedListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isEnterpriseInfoRequested,
             ResponsePagingControl $responsePagingControl,
             $searchCriteriaModeOr=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaDn=null,
             $searchCriteriaGroupLocationCode=null,
             $searchCriteriaExtension=null,
             $searchCriteriaMobilePhoneNumber=null,
             $searchCriteriaEmailAddress=null,
             $searchCriteriaYahooId=null,
             $searchCriteriaExactUserGroup=null,
             $searchCriteriaExactUserDepartment=null,
             $searchCriteriaUserId=null
    ) {
        $this->userId                            = new UserId($userId);
        $this->isEnterpriseInfoRequested         = $isEnterpriseInfoRequested;
        $this->responsePagingControl             = $responsePagingControl;
        $this->searchCriteriaModeOr              = $searchCriteriaModeOr;
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
        $this->searchCriteriaUserId              = $searchCriteriaUserId;
        $this->args                              = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsEnterpriseInfoRequested($isEnterpriseInfoRequested)
    {
        $isEnterpriseInfoRequested and $this->isEnterpriseInfoRequested = new xs:boolean($isEnterpriseInfoRequested);
    }

    public function getIsEnterpriseInfoRequested()
    {
        return (!$this->isEnterpriseInfoRequested) ?: $this->isEnterpriseInfoRequested->value();
    }

    public function setResponsePagingControl($responsePagingControl)
    {
        $responsePagingControl and $this->responsePagingControl = new ResponsePagingControl($responsePagingControl);
    }

    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->value();
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

    public function setSearchCriteriaUserId($searchCriteriaUserId)
    {
        $searchCriteriaUserId and $this->searchCriteriaUserId = new SearchCriteriaUserId($searchCriteriaUserId);
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
    }
}

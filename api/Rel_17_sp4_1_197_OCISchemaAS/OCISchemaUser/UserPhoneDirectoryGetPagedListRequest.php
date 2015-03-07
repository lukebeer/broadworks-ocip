<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaMobilePhoneNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaYahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name                               = __CLASS__;
    protected $userId                             = null;
    protected $isEnterpriseInfoRequested          = null;
    protected $responsePagingControl              = null;
    protected $searchCriteriaModeOr               = null;
    protected $searchCriteriaUserLastName         = null;
    protected $searchCriteriaUserFirstName        = null;
    protected $searchCriteriaDn                   = null;
    protected $searchCriteriaGroupLocationCode    = null;
    protected $searchCriteriaExtension            = null;
    protected $searchCriteriaMobilePhoneNumber    = null;
    protected $searchCriteriaEmailAddress         = null;
    protected $searchCriteriaYahooId              = null;
    protected $searchCriteriaExactUserGroup       = null;
    protected $searchCriteriaExactUserDepartment  = null;
    protected $searchCriteriaUserId               = null;

    public function __construct(
         $userId,
         $isEnterpriseInfoRequested,
         ResponsePagingControl $responsePagingControl,
         $searchCriteriaModeOr = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null,
         SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null,
         SearchCriteriaYahooId $searchCriteriaYahooId = null,
         SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null,
         SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null,
         SearchCriteriaUserId $searchCriteriaUserId = null
    ) {
        $this->setUserId($userId);
        $this->setIsEnterpriseInfoRequested($isEnterpriseInfoRequested);
        $this->setResponsePagingControl($responsePagingControl);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->setSearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->setSearchCriteriaYahooId($searchCriteriaYahooId);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsEnterpriseInfoRequested(xs:boolean $isEnterpriseInfoRequested = null)
    {
    }

    public function getIsEnterpriseInfoRequested()
    {
        return (!$this->isEnterpriseInfoRequested) ?: $this->isEnterpriseInfoRequested->value();
    }

    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
    }

    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->value();
    }

    public function setSearchCriteriaModeOr(xs:boolean $searchCriteriaModeOr = null)
    {
    }

    public function getSearchCriteriaModeOr()
    {
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr->value();
    }

    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
    }

    public function getSearchCriteriaGroupLocationCode()
    {
        return (!$this->searchCriteriaGroupLocationCode) ?: $this->searchCriteriaGroupLocationCode->value();
    }

    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
    }

    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->value();
    }

    public function setSearchCriteriaMobilePhoneNumber(SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null)
    {
    }

    public function getSearchCriteriaMobilePhoneNumber()
    {
        return (!$this->searchCriteriaMobilePhoneNumber) ?: $this->searchCriteriaMobilePhoneNumber->value();
    }

    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
    }

    public function getSearchCriteriaEmailAddress()
    {
        return (!$this->searchCriteriaEmailAddress) ?: $this->searchCriteriaEmailAddress->value();
    }

    public function setSearchCriteriaYahooId(SearchCriteriaYahooId $searchCriteriaYahooId = null)
    {
    }

    public function getSearchCriteriaYahooId()
    {
        return (!$this->searchCriteriaYahooId) ?: $this->searchCriteriaYahooId->value();
    }

    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
    }

    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->value();
    }

    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
    }

    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->value();
    }

    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
    }
}

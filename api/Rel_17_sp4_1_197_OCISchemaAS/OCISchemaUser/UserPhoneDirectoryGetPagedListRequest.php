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
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetPagedListResponse';
    public    $name                              = __CLASS__;
    protected $userId                            = null;
    protected $isEnterpriseInfoRequested         = null;
    protected $responsePagingControl             = null;
    protected $searchCriteriaModeOr              = null;
    protected $searchCriteriaUserLastName        = null;
    protected $searchCriteriaUserFirstName       = null;
    protected $searchCriteriaDn                  = null;
    protected $searchCriteriaGroupLocationCode   = null;
    protected $searchCriteriaExtension           = null;
    protected $searchCriteriaMobilePhoneNumber   = null;
    protected $searchCriteriaEmailAddress        = null;
    protected $searchCriteriaYahooId             = null;
    protected $searchCriteriaExactUserGroup      = null;
    protected $searchCriteriaExactUserDepartment = null;
    protected $searchCriteriaUserId              = null;

    public function __construct(
         $userId,
         $isEnterpriseInfoRequested,
          $responsePagingControl,
         $searchCriteriaModeOr = null,
          $searchCriteriaUserLastName = null,
          $searchCriteriaUserFirstName = null,
          $searchCriteriaDn = null,
          $searchCriteriaGroupLocationCode = null,
          $searchCriteriaExtension = null,
          $searchCriteriaMobilePhoneNumber = null,
          $searchCriteriaEmailAddress = null,
          $searchCriteriaYahooId = null,
          $searchCriteriaExactUserGroup = null,
          $searchCriteriaExactUserDepartment = null,
          $searchCriteriaUserId = null
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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsEnterpriseInfoRequested($isEnterpriseInfoRequested = null)
    {
        $this->isEnterpriseInfoRequested = (boolean) $isEnterpriseInfoRequested;
    }

    /**
     * 
     */
    public function getIsEnterpriseInfoRequested()
    {
        return (!$this->isEnterpriseInfoRequested) ?: $this->isEnterpriseInfoRequested->getValue();
    }

    /**
     * Used in queries to restrict the set of result rows when making a request that can result in
     *         a large dataset. The client specifies the starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl =  $responsePagingControl;
    }

    /**
     * Used in queries to restrict the set of result rows when making a request that can result in
     *         a large dataset. The client specifies the starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        $this->searchCriteriaModeOr = (boolean) $searchCriteriaModeOr;
    }

    /**
     * 
     */
    public function getSearchCriteriaModeOr()
    {
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr->getValue();
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName =  $searchCriteriaUserLastName;
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->getValue();
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName =  $searchCriteriaUserFirstName;
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->getValue();
    }

    /**
     * Criteria for searching for a DN.
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn =  $searchCriteriaDn;
    }

    /**
     * Criteria for searching for a DN.
     */
    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->getValue();
    }

    /**
     * Criteria for searching for a group location dialing code.
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        $this->searchCriteriaGroupLocationCode =  $searchCriteriaGroupLocationCode;
    }

    /**
     * Criteria for searching for a group location dialing code.
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return (!$this->searchCriteriaGroupLocationCode) ?: $this->searchCriteriaGroupLocationCode->getValue();
    }

    /**
     * Criteria for searching for an extension.
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension =  $searchCriteriaExtension;
    }

    /**
     * Criteria for searching for an extension.
     */
    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->getValue();
    }

    /**
     * Criteria for searching for a user's mobile phone number.
     */
    public function setSearchCriteriaMobilePhoneNumber(SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null)
    {
        $this->searchCriteriaMobilePhoneNumber =  $searchCriteriaMobilePhoneNumber;
    }

    /**
     * Criteria for searching for a user's mobile phone number.
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return (!$this->searchCriteriaMobilePhoneNumber) ?: $this->searchCriteriaMobilePhoneNumber->getValue();
    }

    /**
     * Criteria for searching for a email address.
     */
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        $this->searchCriteriaEmailAddress =  $searchCriteriaEmailAddress;
    }

    /**
     * Criteria for searching for a email address.
     */
    public function getSearchCriteriaEmailAddress()
    {
        return (!$this->searchCriteriaEmailAddress) ?: $this->searchCriteriaEmailAddress->getValue();
    }

    /**
     * Criteria for searching for a user's yahoo id.
     */
    public function setSearchCriteriaYahooId(SearchCriteriaYahooId $searchCriteriaYahooId = null)
    {
        $this->searchCriteriaYahooId =  $searchCriteriaYahooId;
    }

    /**
     * Criteria for searching for a user's yahoo id.
     */
    public function getSearchCriteriaYahooId()
    {
        return (!$this->searchCriteriaYahooId) ?: $this->searchCriteriaYahooId->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        $this->searchCriteriaExactUserGroup =  $searchCriteriaExactUserGroup;
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        $this->searchCriteriaExactUserDepartment =  $searchCriteriaExactUserDepartment;
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->getValue();
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId =  $searchCriteriaUserId;
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->getValue();
    }
}

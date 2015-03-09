<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCustomContactDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaMobilePhoneNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $responseType                              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetListResponse';
    public    $name                                      = __CLASS__;
    protected $userId                                    = null;
    protected $includeCommonPhoneList                    = null;
    protected $responseSizeLimit                         = null;
    protected $searchCriteriaModeOr                      = null;
    protected $searchCriteriaUserLastName                = null;
    protected $searchCriteriaUserFirstName               = null;
    protected $searchCriteriaDn                          = null;
    protected $searchCriteriaExtension                   = null;
    protected $searchCriteriaMobilePhoneNumber           = null;
    protected $searchCriteriaEmailAddress                = null;
    protected $searchCriteriaExactUserDepartment         = null;
    protected $searchCriteriaExactUserGroup              = null;
    protected $searchCriteriaExactCustomContactDirectory = null;

    public function __construct(
         $userId,
         $includeCommonPhoneList,
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
          $searchCriteriaUserLastName = null,
          $searchCriteriaUserFirstName = null,
          $searchCriteriaDn = null,
          $searchCriteriaExtension = null,
          $searchCriteriaMobilePhoneNumber = null,
          $searchCriteriaEmailAddress = null,
          $searchCriteriaExactUserDepartment = null,
          $searchCriteriaExactUserGroup = null,
          $searchCriteriaExactCustomContactDirectory = null
    ) {
        $this->setUserId($userId);
        $this->setIncludeCommonPhoneList($includeCommonPhoneList);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->setSearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->setSearchCriteriaExactCustomContactDirectory($searchCriteriaExactCustomContactDirectory);
    }

    /**
     * @return UserPhoneDirectoryGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setIncludeCommonPhoneList($includeCommonPhoneList = null)
    {
        $this->includeCommonPhoneList = (boolean) $includeCommonPhoneList;
    }

    /**
     * 
     */
    public function getIncludeCommonPhoneList()
    {
        return (!$this->includeCommonPhoneList) ?: $this->includeCommonPhoneList;
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
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
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr;
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
     * Criteria for searching for a particular fully specified custom contact directory.
     */
    public function setSearchCriteriaExactCustomContactDirectory(SearchCriteriaExactCustomContactDirectory $searchCriteriaExactCustomContactDirectory = null)
    {
        $this->searchCriteriaExactCustomContactDirectory =  $searchCriteriaExactCustomContactDirectory;
    }

    /**
     * Criteria for searching for a particular fully specified custom contact directory.
     */
    public function getSearchCriteriaExactCustomContactDirectory()
    {
        return (!$this->searchCriteriaExactCustomContactDirectory) ?: $this->searchCriteriaExactCustomContactDirectory->getValue();
    }
}

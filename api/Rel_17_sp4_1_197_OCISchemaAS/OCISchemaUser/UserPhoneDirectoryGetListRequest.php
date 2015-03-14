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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                                      = 'UserPhoneDirectoryGetListRequest';
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
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null,
         SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null,
         SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null,
         SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null,
         SearchCriteriaExactCustomContactDirectory $searchCriteriaExactCustomContactDirectory = null
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIncludeCommonPhoneList($includeCommonPhoneList = null)
    {
        if (!$includeCommonPhoneList) return $this;
        $this->includeCommonPhoneList = new PrimitiveType($includeCommonPhoneList);
        $this->includeCommonPhoneList->setName('includeCommonPhoneList');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCommonPhoneList
     */
    public function getIncludeCommonPhoneList()
    {
        return $this->includeCommonPhoneList->getValue();
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        if (!$searchCriteriaModeOr) return $this;
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return boolean $searchCriteriaModeOr
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        if (!$searchCriteriaUserLastName) return $this;
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserLastName $searchCriteriaUserLastName
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        if (!$searchCriteriaUserFirstName) return $this;
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        if (!$searchCriteriaDn) return $this;
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setName('searchCriteriaDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDn $searchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * 
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        if (!$searchCriteriaExtension) return $this;
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setName('searchCriteriaExtension');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExtension $searchCriteriaExtension
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     * 
     */
    public function setSearchCriteriaMobilePhoneNumber(SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null)
    {
        if (!$searchCriteriaMobilePhoneNumber) return $this;
        $this->searchCriteriaMobilePhoneNumber = ($searchCriteriaMobilePhoneNumber InstanceOf SearchCriteriaMobilePhoneNumber)
             ? $searchCriteriaMobilePhoneNumber
             : new SearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->searchCriteriaMobilePhoneNumber->setName('searchCriteriaMobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return $this->searchCriteriaMobilePhoneNumber;
    }

    /**
     * 
     */
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        if (!$searchCriteriaEmailAddress) return $this;
        $this->searchCriteriaEmailAddress = ($searchCriteriaEmailAddress InstanceOf SearchCriteriaEmailAddress)
             ? $searchCriteriaEmailAddress
             : new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->searchCriteriaEmailAddress->setName('searchCriteriaEmailAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        if (!$searchCriteriaExactUserDepartment) return $this;
        $this->searchCriteriaExactUserDepartment = ($searchCriteriaExactUserDepartment InstanceOf SearchCriteriaExactUserDepartment)
             ? $searchCriteriaExactUserDepartment
             : new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->searchCriteriaExactUserDepartment->setName('searchCriteriaExactUserDepartment');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        if (!$searchCriteriaExactUserGroup) return $this;
        $this->searchCriteriaExactUserGroup = ($searchCriteriaExactUserGroup InstanceOf SearchCriteriaExactUserGroup)
             ? $searchCriteriaExactUserGroup
             : new SearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->searchCriteriaExactUserGroup->setName('searchCriteriaExactUserGroup');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCustomContactDirectory(SearchCriteriaExactCustomContactDirectory $searchCriteriaExactCustomContactDirectory = null)
    {
        if (!$searchCriteriaExactCustomContactDirectory) return $this;
        $this->searchCriteriaExactCustomContactDirectory = ($searchCriteriaExactCustomContactDirectory InstanceOf SearchCriteriaExactCustomContactDirectory)
             ? $searchCriteriaExactCustomContactDirectory
             : new SearchCriteriaExactCustomContactDirectory($searchCriteriaExactCustomContactDirectory);
        $this->searchCriteriaExactCustomContactDirectory->setName('searchCriteriaExactCustomContactDirectory');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCustomContactDirectory $searchCriteriaExactCustomContactDirectory
     */
    public function getSearchCriteriaExactCustomContactDirectory()
    {
        return $this->searchCriteriaExactCustomContactDirectory;
    }
}

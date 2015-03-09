<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserPersonalPhoneListNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserPersonalPhoneListName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPersonalPhoneListGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a user's personal phone list.
 *         The response is either a UserPersonalPhoneListGetListResponse or an ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 */
class UserPersonalPhoneListGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPersonalPhoneListGetListResponse';
    public    $name                                      = __CLASS__;
    protected $userId                                    = null;
    protected $responseSizeLimit                         = null;
    protected $searchCriteriaModeOr                      = null;
    protected $searchCriteriaUserPersonalPhoneListName   = null;
    protected $searchCriteriaUserPersonalPhoneListNumber = null;

    public function __construct(
         $userId,
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
          $searchCriteriaUserPersonalPhoneListName = null,
          $searchCriteriaUserPersonalPhoneListNumber = null
    ) {
        $this->setUserId($userId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName);
        $this->setSearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber);
    }

    /**
     * @return UserPersonalPhoneListGetListResponse
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
     * Criteria for searching for a name in a user personal phone list.
     */
    public function setSearchCriteriaUserPersonalPhoneListName(SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName = null)
    {
        $this->searchCriteriaUserPersonalPhoneListName =  $searchCriteriaUserPersonalPhoneListName;
    }

    /**
     * Criteria for searching for a name in a user personal phone list.
     */
    public function getSearchCriteriaUserPersonalPhoneListName()
    {
        return (!$this->searchCriteriaUserPersonalPhoneListName) ?: $this->searchCriteriaUserPersonalPhoneListName->getValue();
    }

    /**
     * Criteria for searching for a phone number in a user personal phone list.
     */
    public function setSearchCriteriaUserPersonalPhoneListNumber(SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber = null)
    {
        $this->searchCriteriaUserPersonalPhoneListNumber =  $searchCriteriaUserPersonalPhoneListNumber;
    }

    /**
     * Criteria for searching for a phone number in a user personal phone list.
     */
    public function getSearchCriteriaUserPersonalPhoneListNumber()
    {
        return (!$this->searchCriteriaUserPersonalPhoneListNumber) ?: $this->searchCriteriaUserPersonalPhoneListNumber->getValue();
    }
}

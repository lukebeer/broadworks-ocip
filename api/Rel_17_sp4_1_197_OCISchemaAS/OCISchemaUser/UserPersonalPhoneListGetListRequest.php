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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    public    $name                                       = __CLASS__;
    protected $userId                                     = null;
    protected $responseSizeLimit                          = null;
    protected $searchCriteriaModeOr                       = null;
    protected $searchCriteriaUserPersonalPhoneListName    = null;
    protected $searchCriteriaUserPersonalPhoneListNumber  = null;

    public function __construct(
         $userId,
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName = null,
         SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber = null
    ) {
        $this->setUserId($userId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName);
        $this->setSearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber);
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

    public function setSearchCriteriaUserPersonalPhoneListName(SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName = null)
    {
    }

    public function getSearchCriteriaUserPersonalPhoneListName()
    {
        return (!$this->searchCriteriaUserPersonalPhoneListName) ?: $this->searchCriteriaUserPersonalPhoneListName->value();
    }

    public function setSearchCriteriaUserPersonalPhoneListNumber(SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber = null)
    {
    }

    public function getSearchCriteriaUserPersonalPhoneListNumber()
    {
        return (!$this->searchCriteriaUserPersonalPhoneListNumber) ?: $this->searchCriteriaUserPersonalPhoneListNumber->value();
    }
}

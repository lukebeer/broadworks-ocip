<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserPersonalPhoneListName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserPersonalPhoneListNumber;
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
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $responseSizeLimit=null,
             $searchCriteriaModeOr=null,
             $searchCriteriaUserPersonalPhoneListName=null,
             $searchCriteriaUserPersonalPhoneListNumber=null
    ) {
        $this->userId                                    = new UserId($userId);
        $this->responseSizeLimit                         = $responseSizeLimit;
        $this->searchCriteriaModeOr                      = $searchCriteriaModeOr;
        $this->searchCriteriaUserPersonalPhoneListName   = $searchCriteriaUserPersonalPhoneListName;
        $this->searchCriteriaUserPersonalPhoneListNumber = $searchCriteriaUserPersonalPhoneListNumber;
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

    public function setSearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName)
    {
        $searchCriteriaUserPersonalPhoneListName and $this->searchCriteriaUserPersonalPhoneListName = new SearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName);
    }

    public function getSearchCriteriaUserPersonalPhoneListName()
    {
        return (!$this->searchCriteriaUserPersonalPhoneListName) ?: $this->searchCriteriaUserPersonalPhoneListName->value();
    }

    public function setSearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber)
    {
        $searchCriteriaUserPersonalPhoneListNumber and $this->searchCriteriaUserPersonalPhoneListNumber = new SearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber);
    }

    public function getSearchCriteriaUserPersonalPhoneListNumber()
    {
        return (!$this->searchCriteriaUserPersonalPhoneListNumber) ?: $this->searchCriteriaUserPersonalPhoneListNumber->value();
    }
}

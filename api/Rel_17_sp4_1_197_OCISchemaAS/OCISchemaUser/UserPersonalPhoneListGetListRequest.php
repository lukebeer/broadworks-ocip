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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                                      = 'UserPersonalPhoneListGetListRequest';
    protected $userId                                    = null;
    protected $responseSizeLimit                         = null;
    protected $searchCriteriaModeOr                      = null;
    protected $searchCriteriaUserPersonalPhoneListName   = null;
    protected $searchCriteriaUserPersonalPhoneListNumber = null;

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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPersonalPhoneListGetListResponse $response
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
    public function setSearchCriteriaUserPersonalPhoneListName(SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName = null)
    {
        if (!$searchCriteriaUserPersonalPhoneListName) return $this;
        $this->searchCriteriaUserPersonalPhoneListName = ($searchCriteriaUserPersonalPhoneListName InstanceOf SearchCriteriaUserPersonalPhoneListName)
             ? $searchCriteriaUserPersonalPhoneListName
             : new SearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName);
        $this->searchCriteriaUserPersonalPhoneListName->setName('searchCriteriaUserPersonalPhoneListName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName
     */
    public function getSearchCriteriaUserPersonalPhoneListName()
    {
        return $this->searchCriteriaUserPersonalPhoneListName;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserPersonalPhoneListNumber(SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber = null)
    {
        if (!$searchCriteriaUserPersonalPhoneListNumber) return $this;
        $this->searchCriteriaUserPersonalPhoneListNumber = ($searchCriteriaUserPersonalPhoneListNumber InstanceOf SearchCriteriaUserPersonalPhoneListNumber)
             ? $searchCriteriaUserPersonalPhoneListNumber
             : new SearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber);
        $this->searchCriteriaUserPersonalPhoneListNumber->setName('searchCriteriaUserPersonalPhoneListNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber
     */
    public function getSearchCriteriaUserPersonalPhoneListNumber()
    {
        return $this->searchCriteriaUserPersonalPhoneListNumber;
    }
}

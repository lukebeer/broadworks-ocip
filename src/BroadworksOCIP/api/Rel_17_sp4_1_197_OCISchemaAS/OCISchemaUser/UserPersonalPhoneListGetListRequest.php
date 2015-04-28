<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserPersonalPhoneListNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserPersonalPhoneListName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPersonalPhoneListGetListResponse';
    public    $elementName = 'UserPersonalPhoneListGetListRequest';
    protected $userId;
    protected $responseSizeLimit;
    protected $searchCriteriaModeOr;
    protected $searchCriteriaUserPersonalPhoneListName;
    protected $searchCriteriaUserPersonalPhoneListNumber;

    public function __construct(
         $userId = '',
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPersonalPhoneListGetListResponse $response
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setElementName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return boolean $searchCriteriaModeOr
     */
    public function getSearchCriteriaModeOr()
    {
        return ($this->searchCriteriaModeOr)
            ? $this->searchCriteriaModeOr->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserPersonalPhoneListName(SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName = null)
    {
        $this->searchCriteriaUserPersonalPhoneListName = ($searchCriteriaUserPersonalPhoneListName InstanceOf SearchCriteriaUserPersonalPhoneListName)
             ? $searchCriteriaUserPersonalPhoneListName
             : new SearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName);
        $this->searchCriteriaUserPersonalPhoneListName->setElementName('searchCriteriaUserPersonalPhoneListName');
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
        $this->searchCriteriaUserPersonalPhoneListNumber = ($searchCriteriaUserPersonalPhoneListNumber InstanceOf SearchCriteriaUserPersonalPhoneListNumber)
             ? $searchCriteriaUserPersonalPhoneListNumber
             : new SearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber);
        $this->searchCriteriaUserPersonalPhoneListNumber->setElementName('searchCriteriaUserPersonalPhoneListNumber');
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

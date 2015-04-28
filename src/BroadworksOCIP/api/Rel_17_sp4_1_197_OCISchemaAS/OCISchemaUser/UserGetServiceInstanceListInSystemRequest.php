<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request the list of Service Instances in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetServiceInstanceListInSystemResponse or an ErrorResponse.
 */
class UserGetServiceInstanceListInSystemRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInSystemResponse';
    public    $elementName = 'UserGetServiceInstanceListInSystemRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaExactServiceType;
    protected $searchCriteriaUserId;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaDn;
    protected $searchCriteriaExtension;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaExactServiceProvider;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaExactServiceType = null,
         $searchCriteriaUserId = null,
         $searchCriteriaUserLastName = null,
         $searchCriteriaDn = null,
         $searchCriteriaExtension = null,
         $searchCriteriaGroupId = null,
         $searchCriteriaExactServiceProvider = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaExactServiceType($searchCriteriaExactServiceType);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInSystemResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setSearchCriteriaExactServiceType(SearchCriteriaExactServiceType $searchCriteriaExactServiceType = null)
    {
        $this->searchCriteriaExactServiceType = ($searchCriteriaExactServiceType InstanceOf SearchCriteriaExactServiceType)
             ? $searchCriteriaExactServiceType
             : new SearchCriteriaExactServiceType($searchCriteriaExactServiceType);
        $this->searchCriteriaExactServiceType->setElementName('searchCriteriaExactServiceType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactServiceType $searchCriteriaExactServiceType
     */
    public function getSearchCriteriaExactServiceType()
    {
        return $this->searchCriteriaExactServiceType;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId = ($searchCriteriaUserId InstanceOf SearchCriteriaUserId)
             ? $searchCriteriaUserId
             : new SearchCriteriaUserId($searchCriteriaUserId);
        $this->searchCriteriaUserId->setElementName('searchCriteriaUserId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserId $searchCriteriaUserId
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setElementName('searchCriteriaUserLastName');
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
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setElementName('searchCriteriaDn');
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
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setElementName('searchCriteriaExtension');
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
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setElementName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId $searchCriteriaGroupId
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactServiceProvider(SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null)
    {
        $this->searchCriteriaExactServiceProvider = ($searchCriteriaExactServiceProvider InstanceOf SearchCriteriaExactServiceProvider)
             ? $searchCriteriaExactServiceProvider
             : new SearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
        $this->searchCriteriaExactServiceProvider->setElementName('searchCriteriaExactServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return $this->searchCriteriaExactServiceProvider;
    }
}

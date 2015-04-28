<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceProviderName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request a list of service providers and/or enterprises in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ServiceProviderGetListResponse or an ErrorResponse.
 */
class ServiceProviderGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderGetListResponse';
    public    $elementName = 'ServiceProviderGetListRequest';
    protected $isEnterprise;
    protected $responseSizeLimit;
    protected $searchCriteriaServiceProviderId;
    protected $searchCriteriaServiceProviderName;

    public function __construct(
         $isEnterprise = null,
         $responseSizeLimit = null,
         $searchCriteriaServiceProviderId = null,
         $searchCriteriaServiceProviderName = null
    ) {
        $this->setIsEnterprise($isEnterprise);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId);
        $this->setSearchCriteriaServiceProviderName($searchCriteriaServiceProviderName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsEnterprise($isEnterprise = null)
    {
        $this->isEnterprise = new PrimitiveType($isEnterprise);
        $this->isEnterprise->setElementName('isEnterprise');
        return $this;
    }

    /**
     * 
     * @return boolean $isEnterprise
     */
    public function getIsEnterprise()
    {
        return ($this->isEnterprise)
            ? $this->isEnterprise->getElementValue()
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
    public function setSearchCriteriaServiceProviderId(SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId = null)
    {
        $this->searchCriteriaServiceProviderId = ($searchCriteriaServiceProviderId InstanceOf SearchCriteriaServiceProviderId)
             ? $searchCriteriaServiceProviderId
             : new SearchCriteriaServiceProviderId($searchCriteriaServiceProviderId);
        $this->searchCriteriaServiceProviderId->setElementName('searchCriteriaServiceProviderId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId;
    }

    /**
     * 
     */
    public function setSearchCriteriaServiceProviderName(SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName = null)
    {
        $this->searchCriteriaServiceProviderName = ($searchCriteriaServiceProviderName InstanceOf SearchCriteriaServiceProviderName)
             ? $searchCriteriaServiceProviderName
             : new SearchCriteriaServiceProviderName($searchCriteriaServiceProviderName);
        $this->searchCriteriaServiceProviderName->setElementName('searchCriteriaServiceProviderName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName
     */
    public function getSearchCriteriaServiceProviderName()
    {
        return $this->searchCriteriaServiceProviderName;
    }
}

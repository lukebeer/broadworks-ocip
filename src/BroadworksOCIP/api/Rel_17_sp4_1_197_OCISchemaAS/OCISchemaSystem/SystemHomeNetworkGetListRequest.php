<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaHomeMscAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the list of all Home Networks.
 *         The response is either a SystemHomeNetworkGetListResponse or an ErrorResponse.
 */
class SystemHomeNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemHomeNetworkGetListResponse';
    public    $elementName = 'SystemHomeNetworkGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaHomeMscAddress;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaHomeMscAddress = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemHomeNetworkGetListResponse $response
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
    public function setSearchCriteriaHomeMscAddress(SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress = null)
    {
        $this->searchCriteriaHomeMscAddress = ($searchCriteriaHomeMscAddress InstanceOf SearchCriteriaHomeMscAddress)
             ? $searchCriteriaHomeMscAddress
             : new SearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress);
        $this->searchCriteriaHomeMscAddress->setElementName('searchCriteriaHomeMscAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress
     */
    public function getSearchCriteriaHomeMscAddress()
    {
        return $this->searchCriteriaHomeMscAddress;
    }
}

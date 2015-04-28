<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRoamingMscAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the list of all Roaming Networks.
 *         The response is either a SystemRoamingNetworkGetListResponse or an ErrorResponse.
 */
class SystemRoamingNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse';
    public    $elementName = 'SystemRoamingNetworkGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaRoamingMscAddress;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaRoamingMscAddress = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse $response
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
    public function setSearchCriteriaRoamingMscAddress(SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress = null)
    {
        $this->searchCriteriaRoamingMscAddress = ($searchCriteriaRoamingMscAddress InstanceOf SearchCriteriaRoamingMscAddress)
             ? $searchCriteriaRoamingMscAddress
             : new SearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress);
        $this->searchCriteriaRoamingMscAddress->setElementName('searchCriteriaRoamingMscAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress
     */
    public function getSearchCriteriaRoamingMscAddress()
    {
        return $this->searchCriteriaRoamingMscAddress;
    }
}

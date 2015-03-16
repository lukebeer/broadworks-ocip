<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRoamingMscAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of all Roaming Networks.
 *         The response is either a SystemRoamingNetworkGetListResponse or an ErrorResponse.
 */
class SystemRoamingNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse';
    public    $name = 'SystemRoamingNetworkGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaRoamingMscAddress;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse $response
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
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit) ? $this->responseSizeLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaRoamingMscAddress(SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress = null)
    {
        $this->searchCriteriaRoamingMscAddress = ($searchCriteriaRoamingMscAddress InstanceOf SearchCriteriaRoamingMscAddress)
             ? $searchCriteriaRoamingMscAddress
             : new SearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress);
        $this->searchCriteriaRoamingMscAddress->setName('searchCriteriaRoamingMscAddress');
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

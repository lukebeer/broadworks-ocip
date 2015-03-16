<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaHomeMscAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of all Home Networks.
 *         The response is either a SystemHomeNetworkGetListResponse or an ErrorResponse.
 */
class SystemHomeNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemHomeNetworkGetListResponse';
    public    $name = 'SystemHomeNetworkGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaHomeMscAddress;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemHomeNetworkGetListResponse $response
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
    public function setSearchCriteriaHomeMscAddress(SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress = null)
    {
        $this->searchCriteriaHomeMscAddress = ($searchCriteriaHomeMscAddress InstanceOf SearchCriteriaHomeMscAddress)
             ? $searchCriteriaHomeMscAddress
             : new SearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress);
        $this->searchCriteriaHomeMscAddress->setName('searchCriteriaHomeMscAddress');
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

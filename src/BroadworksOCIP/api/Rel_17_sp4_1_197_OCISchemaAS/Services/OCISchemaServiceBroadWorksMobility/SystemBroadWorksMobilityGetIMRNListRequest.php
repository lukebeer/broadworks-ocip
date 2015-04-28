<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaIMRN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get the list of BroadWorks Mobility IMRN numbers defined in the system.
 *         The response is either a SystemBroadWorksMobilityIMRNGetListResponse
 *         or an ErrorResponse.
 */
class SystemBroadWorksMobilityGetIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetIMRNListResponse';
    public    $elementName = 'SystemBroadWorksMobilityGetIMRNListRequest';
    protected $searchCriteriaIMRN;

    public function __construct(
         $searchCriteriaIMRN = null
    ) {
        $this->setSearchCriteriaIMRN($searchCriteriaIMRN);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetIMRNListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSearchCriteriaIMRN(SearchCriteriaIMRN $searchCriteriaIMRN = null)
    {
        $this->searchCriteriaIMRN = ($searchCriteriaIMRN InstanceOf SearchCriteriaIMRN)
             ? $searchCriteriaIMRN
             : new SearchCriteriaIMRN($searchCriteriaIMRN);
        $this->searchCriteriaIMRN->setElementName('searchCriteriaIMRN');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaIMRN $searchCriteriaIMRN
     */
    public function getSearchCriteriaIMRN()
    {
        return $this->searchCriteriaIMRN;
    }
}

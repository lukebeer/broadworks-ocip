<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaSystemServiceDn;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get a list of Two Stage Dialing dns defined in the system.
 *           The response is either a SystemTwoStageDialingGetDnListResponse
 *           or an ErrorResponse.
 */
class SystemTwoStageDialingGetDnListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingGetDnListResponse';
    public    $elementName = 'SystemTwoStageDialingGetDnListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaSystemServiceDn;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaSystemServiceDn = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingGetDnListResponse $response
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
    public function setSearchCriteriaSystemServiceDn(SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn = null)
    {
        $this->searchCriteriaSystemServiceDn = ($searchCriteriaSystemServiceDn InstanceOf SearchCriteriaSystemServiceDn)
             ? $searchCriteriaSystemServiceDn
             : new SearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn);
        $this->searchCriteriaSystemServiceDn->setElementName('searchCriteriaSystemServiceDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn
     */
    public function getSearchCriteriaSystemServiceDn()
    {
        return $this->searchCriteriaSystemServiceDn;
    }
}

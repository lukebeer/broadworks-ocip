<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEnterpriseCommonPhoneListNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEnterpriseCommonPhoneListName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get an enterprise's common phone list.
 *         The response is either a EnterpriseCommonPhoneListGetListResponse or an ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 */
class EnterpriseCommonPhoneListGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseCommonPhoneListGetListResponse';
    public    $elementName = 'EnterpriseCommonPhoneListGetListRequest';
    protected $serviceProviderId;
    protected $responseSizeLimit;
    protected $searchCriteriaModeOr;
    protected $searchCriteriaEnterpriseCommonPhoneListName;
    protected $searchCriteriaEnterpriseCommonPhoneListNumber;

    public function __construct(
         $serviceProviderId = '',
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         $searchCriteriaEnterpriseCommonPhoneListName = null,
         $searchCriteriaEnterpriseCommonPhoneListNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName);
        $this->setSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseCommonPhoneListGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
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
    public function setSearchCriteriaEnterpriseCommonPhoneListName(SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName = null)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = ($searchCriteriaEnterpriseCommonPhoneListName InstanceOf SearchCriteriaEnterpriseCommonPhoneListName)
             ? $searchCriteriaEnterpriseCommonPhoneListName
             : new SearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName);
        $this->searchCriteriaEnterpriseCommonPhoneListName->setElementName('searchCriteriaEnterpriseCommonPhoneListName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListName;
    }

    /**
     * 
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListNumber(SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber = null)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = ($searchCriteriaEnterpriseCommonPhoneListNumber InstanceOf SearchCriteriaEnterpriseCommonPhoneListNumber)
             ? $searchCriteriaEnterpriseCommonPhoneListNumber
             : new SearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber);
        $this->searchCriteriaEnterpriseCommonPhoneListNumber->setElementName('searchCriteriaEnterpriseCommonPhoneListNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListNumber;
    }
}

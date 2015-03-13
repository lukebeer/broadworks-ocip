<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEnterpriseCommonPhoneListNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEnterpriseCommonPhoneListName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $responseType                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseCommonPhoneListGetListResponse';
    public    $name                                          = 'EnterpriseCommonPhoneListGetListRequest';
    protected $serviceProviderId                             = null;
    protected $responseSizeLimit                             = null;
    protected $searchCriteriaModeOr                          = null;
    protected $searchCriteriaEnterpriseCommonPhoneListName   = null;
    protected $searchCriteriaEnterpriseCommonPhoneListNumber = null;

    public function __construct(
         $serviceProviderId,
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName = null,
         SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName);
        $this->setSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseCommonPhoneListGetListResponse $response
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
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
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        if (!$searchCriteriaModeOr) return $this;
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return boolean $searchCriteriaModeOr
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListName(SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName = null)
    {
        if (!$searchCriteriaEnterpriseCommonPhoneListName) return $this;
        $this->searchCriteriaEnterpriseCommonPhoneListName = ($searchCriteriaEnterpriseCommonPhoneListName InstanceOf SearchCriteriaEnterpriseCommonPhoneListName)
             ? $searchCriteriaEnterpriseCommonPhoneListName
             : new SearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName);
        $this->searchCriteriaEnterpriseCommonPhoneListName->setName('searchCriteriaEnterpriseCommonPhoneListName');
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
        if (!$searchCriteriaEnterpriseCommonPhoneListNumber) return $this;
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = ($searchCriteriaEnterpriseCommonPhoneListNumber InstanceOf SearchCriteriaEnterpriseCommonPhoneListNumber)
             ? $searchCriteriaEnterpriseCommonPhoneListNumber
             : new SearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber);
        $this->searchCriteriaEnterpriseCommonPhoneListNumber->setName('searchCriteriaEnterpriseCommonPhoneListNumber');
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

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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    const     RESPONSE_TYPE                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseCommonPhoneListGetListResponse';
    public    $name                                          = __CLASS__;
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        $this->searchCriteriaModeOr = (boolean) $searchCriteriaModeOr;
    }

    /**
     * 
     */
    public function getSearchCriteriaModeOr()
    {
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr->getValue();
    }

    /**
     * Criteria for searching for a name in an enterprise common phone list.
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListName(SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName = null)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName;
    }

    /**
     * Criteria for searching for a name in an enterprise common phone list.
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return (!$this->searchCriteriaEnterpriseCommonPhoneListName) ?: $this->searchCriteriaEnterpriseCommonPhoneListName->getValue();
    }

    /**
     * Criteria for searching for a phone number in an enterprise common phone list.
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListNumber(SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber = null)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber;
    }

    /**
     * Criteria for searching for a phone number in an enterprise common phone list.
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return (!$this->searchCriteriaEnterpriseCommonPhoneListNumber) ?: $this->searchCriteriaEnterpriseCommonPhoneListNumber->getValue();
    }
}

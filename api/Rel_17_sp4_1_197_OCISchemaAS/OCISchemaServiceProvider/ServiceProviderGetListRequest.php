<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request a list of service providers and/or enterprises in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ServiceProviderGetListResponse or an ErrorResponse.
 */
class ServiceProviderGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderGetListResponse';
    public    $name                              = __CLASS__;
    protected $isEnterprise                      = null;
    protected $responseSizeLimit                 = null;
    protected $searchCriteriaServiceProviderId   = null;
    protected $searchCriteriaServiceProviderName = null;

    public function __construct(
         $isEnterprise = null,
         $responseSizeLimit = null,
         SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId = null,
         SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName = null
    ) {
        $this->setIsEnterprise($isEnterprise);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId);
        $this->setSearchCriteriaServiceProviderName($searchCriteriaServiceProviderName);
    }

    /**
     * 
     */
    public function setIsEnterprise($isEnterprise = null)
    {
        $this->isEnterprise = (boolean) $isEnterprise;
    }

    /**
     * 
     */
    public function getIsEnterprise()
    {
        return (!$this->isEnterprise) ?: $this->isEnterprise->getValue();
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
     * Criteria for searching for a service provider ID.
     */
    public function setSearchCriteriaServiceProviderId(SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId = null)
    {
        $this->searchCriteriaServiceProviderId = SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId;
    }

    /**
     * Criteria for searching for a service provider ID.
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return (!$this->searchCriteriaServiceProviderId) ?: $this->searchCriteriaServiceProviderId->getValue();
    }

    /**
     * Criteria for searching for a service provider name.
     */
    public function setSearchCriteriaServiceProviderName(SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName = null)
    {
        $this->searchCriteriaServiceProviderName = SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName;
    }

    /**
     * Criteria for searching for a service provider name.
     */
    public function getSearchCriteriaServiceProviderName()
    {
        return (!$this->searchCriteriaServiceProviderName) ?: $this->searchCriteriaServiceProviderName->getValue();
    }
}

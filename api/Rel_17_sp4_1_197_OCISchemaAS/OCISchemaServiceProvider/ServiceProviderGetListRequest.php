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
    public    $name                               = __CLASS__;
    protected $isEnterprise                       = null;
    protected $responseSizeLimit                  = null;
    protected $searchCriteriaServiceProviderId    = null;
    protected $searchCriteriaServiceProviderName  = null;

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

    public function setIsEnterprise(xs:boolean $isEnterprise = null)
    {
    }

    public function getIsEnterprise()
    {
        return (!$this->isEnterprise) ?: $this->isEnterprise->value();
    }

    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaServiceProviderId(SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId = null)
    {
    }

    public function getSearchCriteriaServiceProviderId()
    {
        return (!$this->searchCriteriaServiceProviderId) ?: $this->searchCriteriaServiceProviderId->value();
    }

    public function setSearchCriteriaServiceProviderName(SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName = null)
    {
    }

    public function getSearchCriteriaServiceProviderName()
    {
        return (!$this->searchCriteriaServiceProviderName) ?: $this->searchCriteriaServiceProviderName->value();
    }
}

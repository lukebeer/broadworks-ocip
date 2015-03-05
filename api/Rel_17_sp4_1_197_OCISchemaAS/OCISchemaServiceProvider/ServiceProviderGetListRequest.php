<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaServiceProviderName;
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
    public    $name = __CLASS__;

    public function __construct(
             $isEnterprise=null,
             $responseSizeLimit=null,
             $searchCriteriaServiceProviderId=null,
             $searchCriteriaServiceProviderName=null
    ) {
        $this->isEnterprise                      = $isEnterprise;
        $this->responseSizeLimit                 = $responseSizeLimit;
        $this->searchCriteriaServiceProviderId   = $searchCriteriaServiceProviderId;
        $this->searchCriteriaServiceProviderName = $searchCriteriaServiceProviderName;
        $this->args                              = func_get_args();
    }

    public function setIsEnterprise($isEnterprise)
    {
        $isEnterprise and $this->isEnterprise = new xs:boolean($isEnterprise);
    }

    public function getIsEnterprise()
    {
        return (!$this->isEnterprise) ?: $this->isEnterprise->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $searchCriteriaServiceProviderId and $this->searchCriteriaServiceProviderId = new SearchCriteriaServiceProviderId($searchCriteriaServiceProviderId);
    }

    public function getSearchCriteriaServiceProviderId()
    {
        return (!$this->searchCriteriaServiceProviderId) ?: $this->searchCriteriaServiceProviderId->value();
    }

    public function setSearchCriteriaServiceProviderName($searchCriteriaServiceProviderName)
    {
        $searchCriteriaServiceProviderName and $this->searchCriteriaServiceProviderName = new SearchCriteriaServiceProviderName($searchCriteriaServiceProviderName);
    }

    public function getSearchCriteriaServiceProviderName()
    {
        return (!$this->searchCriteriaServiceProviderName) ?: $this->searchCriteriaServiceProviderName->value();
    }
}

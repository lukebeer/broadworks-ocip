<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactPolicySelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the list of Voice VPN locations.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseVoiceVPNGetPolicyListResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNGetPolicyListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $responseSizeLimit=null,
             $searchCriteriaGroupLocationCode=null,
             $searchCriteriaExactPolicySelection=null
    ) {
        $this->serviceProviderId                  = new ServiceProviderId($serviceProviderId);
        $this->responseSizeLimit                  = $responseSizeLimit;
        $this->searchCriteriaGroupLocationCode    = $searchCriteriaGroupLocationCode;
        $this->searchCriteriaExactPolicySelection = $searchCriteriaExactPolicySelection;
        $this->args                               = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $searchCriteriaGroupLocationCode and $this->searchCriteriaGroupLocationCode = new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
    }

    public function getSearchCriteriaGroupLocationCode()
    {
        return (!$this->searchCriteriaGroupLocationCode) ?: $this->searchCriteriaGroupLocationCode->value();
    }

    public function setSearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection)
    {
        $searchCriteriaExactPolicySelection and $this->searchCriteriaExactPolicySelection = new SearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection);
    }

    public function getSearchCriteriaExactPolicySelection()
    {
        return (!$this->searchCriteriaExactPolicySelection) ?: $this->searchCriteriaExactPolicySelection->value();
    }
}

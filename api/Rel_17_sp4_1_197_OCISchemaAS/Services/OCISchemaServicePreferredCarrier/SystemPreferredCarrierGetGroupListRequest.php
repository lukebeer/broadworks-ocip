<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests a list of groups using the specified carrier.  It is possible to restrict the
 *         number of rows returned by specifying various search criteria. Multiple search criteria
 *         are logically ANDed together.
 *         The response is either a SystemPreferredCarrierGetGroupListResponse or an ErrorResponse.
 */
class SystemPreferredCarrierGetGroupListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $carrier,
             $responseSizeLimit=null,
             $searchCriteriaGroupId=null,
             $searchCriteriaGroupName=null,
             $searchCriteriaExactServiceProvider=null
    ) {
        $this->carrier                            = $carrier;
        $this->responseSizeLimit                  = $responseSizeLimit;
        $this->searchCriteriaGroupId              = $searchCriteriaGroupId;
        $this->searchCriteriaGroupName            = $searchCriteriaGroupName;
        $this->searchCriteriaExactServiceProvider = $searchCriteriaExactServiceProvider;
        $this->args                               = func_get_args();
    }

    public function setCarrier($carrier)
    {
        $carrier and $this->carrier = new PreferredCarrierName($carrier);
    }

    public function getCarrier()
    {
        return (!$this->carrier) ?: $this->carrier->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $searchCriteriaGroupId and $this->searchCriteriaGroupId = new SearchCriteriaGroupId($searchCriteriaGroupId);
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaGroupName($searchCriteriaGroupName)
    {
        $searchCriteriaGroupName and $this->searchCriteriaGroupName = new SearchCriteriaGroupName($searchCriteriaGroupName);
    }

    public function getSearchCriteriaGroupName()
    {
        return (!$this->searchCriteriaGroupName) ?: $this->searchCriteriaGroupName->value();
    }

    public function setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider)
    {
        $searchCriteriaExactServiceProvider and $this->searchCriteriaExactServiceProvider = new SearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
    }

    public function getSearchCriteriaExactServiceProvider()
    {
        return (!$this->searchCriteriaExactServiceProvider) ?: $this->searchCriteriaExactServiceProvider->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaRoamingMscAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of all Roaming Networks.
 *         The response is either a SystemRoamingNetworkGetListResponse or an ErrorResponse.
 */
class SystemRoamingNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaRoamingMscAddress=null
    ) {
        $this->responseSizeLimit               = $responseSizeLimit;
        $this->searchCriteriaRoamingMscAddress = $searchCriteriaRoamingMscAddress;
        $this->args                            = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress)
    {
        $searchCriteriaRoamingMscAddress and $this->searchCriteriaRoamingMscAddress = new SearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress);
    }

    public function getSearchCriteriaRoamingMscAddress()
    {
        return (!$this->searchCriteriaRoamingMscAddress) ?: $this->searchCriteriaRoamingMscAddress->value();
    }
}

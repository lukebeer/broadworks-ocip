<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaHomeMscAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of all Home Networks.
 *         The response is either a SystemHomeNetworkGetListResponse or an ErrorResponse.
 */
class SystemHomeNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaHomeMscAddress=null
    ) {
        $this->responseSizeLimit            = $responseSizeLimit;
        $this->searchCriteriaHomeMscAddress = $searchCriteriaHomeMscAddress;
        $this->args                         = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress)
    {
        $searchCriteriaHomeMscAddress and $this->searchCriteriaHomeMscAddress = new SearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress);
    }

    public function getSearchCriteriaHomeMscAddress()
    {
        return (!$this->searchCriteriaHomeMscAddress) ?: $this->searchCriteriaHomeMscAddress->value();
    }
}

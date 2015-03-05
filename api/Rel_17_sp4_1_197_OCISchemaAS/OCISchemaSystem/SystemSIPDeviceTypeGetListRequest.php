<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactSignalingAddressType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of sip device types in the system.
 *         See Also: SystemDeviceTypeGetAvailableListRequest.
 *         The response is either SystemSIPDeviceTypeGetListResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaDeviceType=null,
             $searchCriteriaExactSignalingAddressType=null
    ) {
        $this->responseSizeLimit                       = $responseSizeLimit;
        $this->searchCriteriaDeviceType                = $searchCriteriaDeviceType;
        $this->searchCriteriaExactSignalingAddressType = $searchCriteriaExactSignalingAddressType;
        $this->args                                    = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $searchCriteriaDeviceType and $this->searchCriteriaDeviceType = new SearchCriteriaDeviceType($searchCriteriaDeviceType);
    }

    public function getSearchCriteriaDeviceType()
    {
        return (!$this->searchCriteriaDeviceType) ?: $this->searchCriteriaDeviceType->value();
    }

    public function setSearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType)
    {
        $searchCriteriaExactSignalingAddressType and $this->searchCriteriaExactSignalingAddressType = new SearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType);
    }

    public function getSearchCriteriaExactSignalingAddressType()
    {
        return (!$this->searchCriteriaExactSignalingAddressType) ?: $this->searchCriteriaExactSignalingAddressType->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactSignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of sip device types in the system.
 *         See Also: SystemDeviceTypeGetAvailableListRequest.
 *         The response is either SystemSIPDeviceTypeGetListResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $responseSizeLimit                        = null;
    protected $searchCriteriaDeviceType                 = null;
    protected $searchCriteriaExactSignalingAddressType  = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaDeviceType $searchCriteriaDeviceType = null,
         SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceType($searchCriteriaDeviceType);
        $this->setSearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType);
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

    public function setSearchCriteriaDeviceType(SearchCriteriaDeviceType $searchCriteriaDeviceType = null)
    {
    }

    public function getSearchCriteriaDeviceType()
    {
        return (!$this->searchCriteriaDeviceType) ?: $this->searchCriteriaDeviceType->value();
    }

    public function setSearchCriteriaExactSignalingAddressType(SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType = null)
    {
    }

    public function getSearchCriteriaExactSignalingAddressType()
    {
        return (!$this->searchCriteriaExactSignalingAddressType) ?: $this->searchCriteriaExactSignalingAddressType->value();
    }
}

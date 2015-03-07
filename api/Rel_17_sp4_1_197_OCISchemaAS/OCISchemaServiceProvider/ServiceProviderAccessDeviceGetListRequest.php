<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the list of access devices in a service provider.
 *         The response is either ServiceProviderAccessDeviceGetListResponse or ErrorResponse.
 */
class ServiceProviderAccessDeviceGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $responseSizeLimit               = null;
    protected $searchCriteriaDeviceName        = null;
    protected $searchCriteriaDeviceMACAddress  = null;
    protected $searchCriteriaDeviceNetAddress  = null;
    protected $searchCriteriaExactDeviceType   = null;

    public function __construct(
         $serviceProviderId,
         $responseSizeLimit = null,
         SearchCriteriaDeviceName $searchCriteriaDeviceName = null,
         SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null,
         SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null,
         SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
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

    public function setSearchCriteriaDeviceName(SearchCriteriaDeviceName $searchCriteriaDeviceName = null)
    {
    }

    public function getSearchCriteriaDeviceName()
    {
        return (!$this->searchCriteriaDeviceName) ?: $this->searchCriteriaDeviceName->value();
    }

    public function setSearchCriteriaDeviceMACAddress(SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null)
    {
    }

    public function getSearchCriteriaDeviceMACAddress()
    {
        return (!$this->searchCriteriaDeviceMACAddress) ?: $this->searchCriteriaDeviceMACAddress->value();
    }

    public function setSearchCriteriaDeviceNetAddress(SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null)
    {
    }

    public function getSearchCriteriaDeviceNetAddress()
    {
        return (!$this->searchCriteriaDeviceNetAddress) ?: $this->searchCriteriaDeviceNetAddress->value();
    }

    public function setSearchCriteriaExactDeviceType(SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null)
    {
    }

    public function getSearchCriteriaExactDeviceType()
    {
        return (!$this->searchCriteriaExactDeviceType) ?: $this->searchCriteriaExactDeviceType->value();
    }
}

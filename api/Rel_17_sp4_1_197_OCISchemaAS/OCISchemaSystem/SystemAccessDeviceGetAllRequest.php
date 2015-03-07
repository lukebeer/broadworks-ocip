<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the list of all access devices in the entire system.
 *         Prior to release 14, this functionality was provided with the SystemAccessDeviceGetListRequest.
 *         The response is either SystemAccessDeviceGetAllResponse or ErrorResponse.
 */
class SystemAccessDeviceGetAllRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $responseSizeLimit                         = null;
    protected $searchCriteriaDeviceName                  = null;
    protected $searchCriteriaDeviceMACAddress            = null;
    protected $searchCriteriaDeviceNetAddress            = null;
    protected $searchCriteriaGroupId                     = null;
    protected $searchCriteriaExactDeviceType             = null;
    protected $searchCriteriaExactDeviceServiceProvider  = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaDeviceName $searchCriteriaDeviceName = null,
         SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null,
         SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null,
         SearchCriteriaExactDeviceServiceProvider $searchCriteriaExactDeviceServiceProvider = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
        $this->setSearchCriteriaExactDeviceServiceProvider($searchCriteriaExactDeviceServiceProvider);
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

    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactDeviceType(SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null)
    {
    }

    public function getSearchCriteriaExactDeviceType()
    {
        return (!$this->searchCriteriaExactDeviceType) ?: $this->searchCriteriaExactDeviceType->value();
    }

    public function setSearchCriteriaExactDeviceServiceProvider(SearchCriteriaExactDeviceServiceProvider $searchCriteriaExactDeviceServiceProvider = null)
    {
    }

    public function getSearchCriteriaExactDeviceServiceProvider()
    {
        return (!$this->searchCriteriaExactDeviceServiceProvider) ?: $this->searchCriteriaExactDeviceServiceProvider->value();
    }
}

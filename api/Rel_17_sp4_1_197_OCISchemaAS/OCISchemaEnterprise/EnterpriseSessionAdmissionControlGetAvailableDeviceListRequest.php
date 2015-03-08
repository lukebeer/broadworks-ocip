<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get the list of devices can be assigned to session admission control group for the enterprise.
 *         The response is either an EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse';
    public    $name                           = __CLASS__;
    protected $serviceProviderId              = null;
    protected $responseSizeLimit              = null;
    protected $searchCriteriaDeviceName       = null;
    protected $searchCriteriaDeviceMACAddress = null;
    protected $searchCriteriaDeviceNetAddress = null;
    protected $searchCriteriaGroupId          = null;
    protected $searchCriteriaExactDeviceType  = null;
    protected $searchCriteriaExactDeviceLevel = null;

    public function __construct(
         $serviceProviderId,
         $responseSizeLimit = null,
         SearchCriteriaDeviceName $searchCriteriaDeviceName = null,
         SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null,
         SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null,
         SearchCriteriaExactDeviceLevel $searchCriteriaExactDeviceLevel = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
        $this->setSearchCriteriaExactDeviceLevel($searchCriteriaExactDeviceLevel);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for device name.
     */
    public function setSearchCriteriaDeviceName(SearchCriteriaDeviceName $searchCriteriaDeviceName = null)
    {
        $this->searchCriteriaDeviceName = SearchCriteriaDeviceName $searchCriteriaDeviceName;
    }

    /**
     * Criteria for searching for device name.
     */
    public function getSearchCriteriaDeviceName()
    {
        return (!$this->searchCriteriaDeviceName) ?: $this->searchCriteriaDeviceName->getValue();
    }

    /**
     * Criteria for searching for device MAC address.
     */
    public function setSearchCriteriaDeviceMACAddress(SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null)
    {
        $this->searchCriteriaDeviceMACAddress = SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress;
    }

    /**
     * Criteria for searching for device MAC address.
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return (!$this->searchCriteriaDeviceMACAddress) ?: $this->searchCriteriaDeviceMACAddress->getValue();
    }

    /**
     * Criteria for searching for device network address.
     */
    public function setSearchCriteriaDeviceNetAddress(SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null)
    {
        $this->searchCriteriaDeviceNetAddress = SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress;
    }

    /**
     * Criteria for searching for device network address.
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return (!$this->searchCriteriaDeviceNetAddress) ?: $this->searchCriteriaDeviceNetAddress->getValue();
    }

    /**
     * Criteria for searching for a group ID.
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = SearchCriteriaGroupId $searchCriteriaGroupId;
    }

    /**
     * Criteria for searching for a group ID.
     */
    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified device type.
     */
    public function setSearchCriteriaExactDeviceType(SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null)
    {
        $this->searchCriteriaExactDeviceType = SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType;
    }

    /**
     * Criteria for searching for a particular fully specified device type.
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return (!$this->searchCriteriaExactDeviceType) ?: $this->searchCriteriaExactDeviceType->getValue();
    }

    /**
     * Criteria for searching for a particular device level.
     */
    public function setSearchCriteriaExactDeviceLevel(SearchCriteriaExactDeviceLevel $searchCriteriaExactDeviceLevel = null)
    {
        $this->searchCriteriaExactDeviceLevel = SearchCriteriaExactDeviceLevel $searchCriteriaExactDeviceLevel;
    }

    /**
     * Criteria for searching for a particular device level.
     */
    public function getSearchCriteriaExactDeviceLevel()
    {
        return (!$this->searchCriteriaExactDeviceLevel) ?: $this->searchCriteriaExactDeviceLevel->getValue();
    }
}
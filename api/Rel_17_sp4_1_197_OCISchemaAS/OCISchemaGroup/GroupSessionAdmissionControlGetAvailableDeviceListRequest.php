<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get the list of devices can be assigned to session admission control group for the group.
 *         The response is either an GroupSessionAdmissionControlGetAvailableDeviceListResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGetAvailableDeviceListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGetAvailableDeviceListResponse';
    public    $name                           = __CLASS__;
    protected $serviceProviderId              = null;
    protected $groupId                        = null;
    protected $responseSizeLimit              = null;
    protected $searchCriteriaDeviceName       = null;
    protected $searchCriteriaDeviceMACAddress = null;
    protected $searchCriteriaDeviceNetAddress = null;
    protected $searchCriteriaExactDeviceType  = null;
    protected $searchCriteriaExactDeviceLevel = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
          $searchCriteriaDeviceName = null,
          $searchCriteriaDeviceMACAddress = null,
          $searchCriteriaDeviceNetAddress = null,
          $searchCriteriaExactDeviceType = null,
          $searchCriteriaExactDeviceLevel = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
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
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
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
        $this->searchCriteriaDeviceName =  $searchCriteriaDeviceName;
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
        $this->searchCriteriaDeviceMACAddress =  $searchCriteriaDeviceMACAddress;
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
        $this->searchCriteriaDeviceNetAddress =  $searchCriteriaDeviceNetAddress;
    }

    /**
     * Criteria for searching for device network address.
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return (!$this->searchCriteriaDeviceNetAddress) ?: $this->searchCriteriaDeviceNetAddress->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified device type.
     */
    public function setSearchCriteriaExactDeviceType(SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null)
    {
        $this->searchCriteriaExactDeviceType =  $searchCriteriaExactDeviceType;
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
        $this->searchCriteriaExactDeviceLevel =  $searchCriteriaExactDeviceLevel;
    }

    /**
     * Criteria for searching for a particular device level.
     */
    public function getSearchCriteriaExactDeviceLevel()
    {
        return (!$this->searchCriteriaExactDeviceLevel) ?: $this->searchCriteriaExactDeviceLevel->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactDeviceLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of devices can be assigned to session admission control group for the group.
 *         The response is either an GroupSessionAdmissionControlGetAvailableDeviceListResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGetAvailableDeviceListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $responseSizeLimit=null,
             $searchCriteriaDeviceName=null,
             $searchCriteriaDeviceMACAddress=null,
             $searchCriteriaDeviceNetAddress=null,
             $searchCriteriaExactDeviceType=null,
             $searchCriteriaExactDeviceLevel=null
    ) {
        $this->serviceProviderId              = new ServiceProviderId($serviceProviderId);
        $this->groupId                        = new GroupId($groupId);
        $this->responseSizeLimit              = $responseSizeLimit;
        $this->searchCriteriaDeviceName       = $searchCriteriaDeviceName;
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
        $this->searchCriteriaExactDeviceType  = $searchCriteriaExactDeviceType;
        $this->searchCriteriaExactDeviceLevel = $searchCriteriaExactDeviceLevel;
        $this->args                           = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $searchCriteriaDeviceName and $this->searchCriteriaDeviceName = new SearchCriteriaDeviceName($searchCriteriaDeviceName);
    }

    public function getSearchCriteriaDeviceName()
    {
        return (!$this->searchCriteriaDeviceName) ?: $this->searchCriteriaDeviceName->value();
    }

    public function setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress)
    {
        $searchCriteriaDeviceMACAddress and $this->searchCriteriaDeviceMACAddress = new SearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
    }

    public function getSearchCriteriaDeviceMACAddress()
    {
        return (!$this->searchCriteriaDeviceMACAddress) ?: $this->searchCriteriaDeviceMACAddress->value();
    }

    public function setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress)
    {
        $searchCriteriaDeviceNetAddress and $this->searchCriteriaDeviceNetAddress = new SearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
    }

    public function getSearchCriteriaDeviceNetAddress()
    {
        return (!$this->searchCriteriaDeviceNetAddress) ?: $this->searchCriteriaDeviceNetAddress->value();
    }

    public function setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType)
    {
        $searchCriteriaExactDeviceType and $this->searchCriteriaExactDeviceType = new SearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
    }

    public function getSearchCriteriaExactDeviceType()
    {
        return (!$this->searchCriteriaExactDeviceType) ?: $this->searchCriteriaExactDeviceType->value();
    }

    public function setSearchCriteriaExactDeviceLevel($searchCriteriaExactDeviceLevel)
    {
        $searchCriteriaExactDeviceLevel and $this->searchCriteriaExactDeviceLevel = new SearchCriteriaExactDeviceLevel($searchCriteriaExactDeviceLevel);
    }

    public function getSearchCriteriaExactDeviceLevel()
    {
        return (!$this->searchCriteriaExactDeviceLevel) ?: $this->searchCriteriaExactDeviceLevel->value();
    }
}

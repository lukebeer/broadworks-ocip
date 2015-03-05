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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaLinePortUserPart;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaLinePortDomain;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to search endpoints in the group.
 *         The response is either GroupEndpointGetListResponse or ErrorResponse.
 */
class GroupEndpointGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $responseSizeLimit=null,
             $searchCriteriaLinePortUserPart=null,
             $searchCriteriaLinePortDomain=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaUserId=null,
             $searchCriteriaDn=null,
             $searchCriteriaExtension=null,
             $searchCriteriaDeviceType=null,
             $searchCriteriaDeviceName=null,
             $searchCriteriaDeviceMACAddress=null,
             $searchCriteriaDeviceNetAddress=null
    ) {
        $this->serviceProviderId              = new ServiceProviderId($serviceProviderId);
        $this->groupId                        = new GroupId($groupId);
        $this->responseSizeLimit              = $responseSizeLimit;
        $this->searchCriteriaLinePortUserPart = $searchCriteriaLinePortUserPart;
        $this->searchCriteriaLinePortDomain   = $searchCriteriaLinePortDomain;
        $this->searchCriteriaUserLastName     = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName    = $searchCriteriaUserFirstName;
        $this->searchCriteriaUserId           = $searchCriteriaUserId;
        $this->searchCriteriaDn               = $searchCriteriaDn;
        $this->searchCriteriaExtension        = $searchCriteriaExtension;
        $this->searchCriteriaDeviceType       = $searchCriteriaDeviceType;
        $this->searchCriteriaDeviceName       = $searchCriteriaDeviceName;
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
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

    public function setSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart)
    {
        $searchCriteriaLinePortUserPart and $this->searchCriteriaLinePortUserPart = new SearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart);
    }

    public function getSearchCriteriaLinePortUserPart()
    {
        return (!$this->searchCriteriaLinePortUserPart) ?: $this->searchCriteriaLinePortUserPart->value();
    }

    public function setSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain)
    {
        $searchCriteriaLinePortDomain and $this->searchCriteriaLinePortDomain = new SearchCriteriaLinePortDomain($searchCriteriaLinePortDomain);
    }

    public function getSearchCriteriaLinePortDomain()
    {
        return (!$this->searchCriteriaLinePortDomain) ?: $this->searchCriteriaLinePortDomain->value();
    }

    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $searchCriteriaUserLastName and $this->searchCriteriaUserLastName = new SearchCriteriaUserLastName($searchCriteriaUserLastName);
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $searchCriteriaUserFirstName and $this->searchCriteriaUserFirstName = new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaUserId($searchCriteriaUserId)
    {
        $searchCriteriaUserId and $this->searchCriteriaUserId = new SearchCriteriaUserId($searchCriteriaUserId);
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
    }

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaExtension($searchCriteriaExtension)
    {
        $searchCriteriaExtension and $this->searchCriteriaExtension = new SearchCriteriaExtension($searchCriteriaExtension);
    }

    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->value();
    }

    public function setSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $searchCriteriaDeviceType and $this->searchCriteriaDeviceType = new SearchCriteriaDeviceType($searchCriteriaDeviceType);
    }

    public function getSearchCriteriaDeviceType()
    {
        return (!$this->searchCriteriaDeviceType) ?: $this->searchCriteriaDeviceType->value();
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
}

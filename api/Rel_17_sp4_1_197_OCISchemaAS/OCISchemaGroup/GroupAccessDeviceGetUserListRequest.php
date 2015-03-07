<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactEndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaLinePortUserPart;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaLinePortDomain;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the configuration of a specified group access device.
 *         The response is either GroupAccessDeviceGetUserListResponse or ErrorResponse.
 */
class GroupAccessDeviceGetUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $serviceProviderId                = null;
    protected $groupId                          = null;
    protected $deviceName                       = null;
    protected $responseSizeLimit                = null;
    protected $searchCriteriaLinePortUserPart   = null;
    protected $searchCriteriaLinePortDomain     = null;
    protected $searchCriteriaUserLastName       = null;
    protected $searchCriteriaUserFirstName      = null;
    protected $searchCriteriaDn                 = null;
    protected $searchCriteriaUserId             = null;
    protected $searchCriteriaExactEndpointType  = null;
    protected $searchCriteriaExactUserType      = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $deviceName,
         $responseSizeLimit = null,
         SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart = null,
         SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaUserId $searchCriteriaUserId = null,
         SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType = null,
         SearchCriteriaExactUserType $searchCriteriaExactUserType = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDeviceName($deviceName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart);
        $this->setSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
        $this->setSearchCriteriaExactEndpointType($searchCriteriaExactEndpointType);
        $this->setSearchCriteriaExactUserType($searchCriteriaExactUserType);
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

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
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

    public function setSearchCriteriaLinePortUserPart(SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart = null)
    {
    }

    public function getSearchCriteriaLinePortUserPart()
    {
        return (!$this->searchCriteriaLinePortUserPart) ?: $this->searchCriteriaLinePortUserPart->value();
    }

    public function setSearchCriteriaLinePortDomain(SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain = null)
    {
    }

    public function getSearchCriteriaLinePortDomain()
    {
        return (!$this->searchCriteriaLinePortDomain) ?: $this->searchCriteriaLinePortDomain->value();
    }

    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
    }

    public function setSearchCriteriaExactEndpointType(SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType = null)
    {
    }

    public function getSearchCriteriaExactEndpointType()
    {
        return (!$this->searchCriteriaExactEndpointType) ?: $this->searchCriteriaExactEndpointType->value();
    }

    public function setSearchCriteriaExactUserType(SearchCriteriaExactUserType $searchCriteriaExactUserType = null)
    {
    }

    public function getSearchCriteriaExactUserType()
    {
        return (!$this->searchCriteriaExactUserType) ?: $this->searchCriteriaExactUserType->value();
    }
}

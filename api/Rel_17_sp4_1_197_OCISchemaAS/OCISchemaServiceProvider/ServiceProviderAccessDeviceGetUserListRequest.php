<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaLinePortUserPart;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaLinePortDomain;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactEndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the list of users on a specified device.
 *         The response is either ServiceProviderAccessDeviceGetResponse or ErrorResponse.
 */
class ServiceProviderAccessDeviceGetUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $deviceName,
             $responseSizeLimit=null,
             $searchCriteriaLinePortUserPart=null,
             $searchCriteriaLinePortDomain=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaDn=null,
             $searchCriteriaUserId=null,
             $searchCriteriaGroupId=null,
             $searchCriteriaExactEndpointType=null,
             $searchCriteriaExactUserType=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->deviceName                      = new AccessDeviceName($deviceName);
        $this->responseSizeLimit               = $responseSizeLimit;
        $this->searchCriteriaLinePortUserPart  = $searchCriteriaLinePortUserPart;
        $this->searchCriteriaLinePortDomain    = $searchCriteriaLinePortDomain;
        $this->searchCriteriaUserLastName      = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName     = $searchCriteriaUserFirstName;
        $this->searchCriteriaDn                = $searchCriteriaDn;
        $this->searchCriteriaUserId            = $searchCriteriaUserId;
        $this->searchCriteriaGroupId           = $searchCriteriaGroupId;
        $this->searchCriteriaExactEndpointType = $searchCriteriaExactEndpointType;
        $this->searchCriteriaExactUserType     = $searchCriteriaExactUserType;
        $this->args                            = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
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

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaUserId($searchCriteriaUserId)
    {
        $searchCriteriaUserId and $this->searchCriteriaUserId = new SearchCriteriaUserId($searchCriteriaUserId);
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
    }

    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $searchCriteriaGroupId and $this->searchCriteriaGroupId = new SearchCriteriaGroupId($searchCriteriaGroupId);
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactEndpointType($searchCriteriaExactEndpointType)
    {
        $searchCriteriaExactEndpointType and $this->searchCriteriaExactEndpointType = new SearchCriteriaExactEndpointType($searchCriteriaExactEndpointType);
    }

    public function getSearchCriteriaExactEndpointType()
    {
        return (!$this->searchCriteriaExactEndpointType) ?: $this->searchCriteriaExactEndpointType->value();
    }

    public function setSearchCriteriaExactUserType($searchCriteriaExactUserType)
    {
        $searchCriteriaExactUserType and $this->searchCriteriaExactUserType = new SearchCriteriaExactUserType($searchCriteriaExactUserType);
    }

    public function getSearchCriteriaExactUserType()
    {
        return (!$this->searchCriteriaExactUserType) ?: $this->searchCriteriaExactUserType->value();
    }
}

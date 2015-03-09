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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetUserListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the configuration of a specified group access device.
 *         The response is either GroupAccessDeviceGetUserListResponse or ErrorResponse.
 */
class GroupAccessDeviceGetUserListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetUserListResponse';
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $deviceName                      = null;
    protected $responseSizeLimit               = null;
    protected $searchCriteriaLinePortUserPart  = null;
    protected $searchCriteriaLinePortDomain    = null;
    protected $searchCriteriaUserLastName      = null;
    protected $searchCriteriaUserFirstName     = null;
    protected $searchCriteriaDn                = null;
    protected $searchCriteriaUserId            = null;
    protected $searchCriteriaExactEndpointType = null;
    protected $searchCriteriaExactUserType     = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $deviceName,
         $responseSizeLimit = null,
          $searchCriteriaLinePortUserPart = null,
          $searchCriteriaLinePortDomain = null,
          $searchCriteriaUserLastName = null,
          $searchCriteriaUserFirstName = null,
          $searchCriteriaDn = null,
          $searchCriteriaUserId = null,
          $searchCriteriaExactEndpointType = null,
          $searchCriteriaExactUserType = null
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

    /**
     * @return GroupAccessDeviceGetUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * Access device name.
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    /**
     * Access device name.
     */
    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->getValue();
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
     * Criteria for searching for device line/port, or SIPURI user part.
     */
    public function setSearchCriteriaLinePortUserPart(SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart = null)
    {
        $this->searchCriteriaLinePortUserPart =  $searchCriteriaLinePortUserPart;
    }

    /**
     * Criteria for searching for device line/port, or SIPURI user part.
     */
    public function getSearchCriteriaLinePortUserPart()
    {
        return (!$this->searchCriteriaLinePortUserPart) ?: $this->searchCriteriaLinePortUserPart->getValue();
    }

    /**
     * Criteria for searching for device line/port, or SIPURI domain part.
     */
    public function setSearchCriteriaLinePortDomain(SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain = null)
    {
        $this->searchCriteriaLinePortDomain =  $searchCriteriaLinePortDomain;
    }

    /**
     * Criteria for searching for device line/port, or SIPURI domain part.
     */
    public function getSearchCriteriaLinePortDomain()
    {
        return (!$this->searchCriteriaLinePortDomain) ?: $this->searchCriteriaLinePortDomain->getValue();
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName =  $searchCriteriaUserLastName;
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->getValue();
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName =  $searchCriteriaUserFirstName;
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->getValue();
    }

    /**
     * Criteria for searching for a DN.
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn =  $searchCriteriaDn;
    }

    /**
     * Criteria for searching for a DN.
     */
    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->getValue();
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId =  $searchCriteriaUserId;
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->getValue();
    }

    /**
     * Criteria for searching for a particular endpoint type.
     */
    public function setSearchCriteriaExactEndpointType(SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType = null)
    {
        $this->searchCriteriaExactEndpointType =  $searchCriteriaExactEndpointType;
    }

    /**
     * Criteria for searching for a particular endpoint type.
     */
    public function getSearchCriteriaExactEndpointType()
    {
        return (!$this->searchCriteriaExactEndpointType) ?: $this->searchCriteriaExactEndpointType->getValue();
    }

    /**
     * Criteria for searching for a particular User Type.
     */
    public function setSearchCriteriaExactUserType(SearchCriteriaExactUserType $searchCriteriaExactUserType = null)
    {
        $this->searchCriteriaExactUserType =  $searchCriteriaExactUserType;
    }

    /**
     * Criteria for searching for a particular User Type.
     */
    public function getSearchCriteriaExactUserType()
    {
        return (!$this->searchCriteriaExactUserType) ?: $this->searchCriteriaExactUserType->getValue();
    }
}

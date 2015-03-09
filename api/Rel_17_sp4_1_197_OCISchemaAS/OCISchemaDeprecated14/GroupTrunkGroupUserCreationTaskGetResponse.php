<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationUserIdFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationSIPURIFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupUserCreationTaskGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $userIdFormat       = null;
    protected $userIdDomain       = null;
    protected $populateExtension  = null;
    protected $linePortFormat     = null;
    protected $linePortDomain     = null;
    protected $populateContact    = null;
    protected $contactFormat      = null;
    protected $contactDomain      = null;
    protected $usersCreated       = null;
    protected $totalUsersToCreate = null;
    protected $errorCount         = null;
    protected $servicePackName    = null;
    protected $userServiceName    = null;
    protected $status             = null;
    protected $userCreationMode   = null;
    protected $taskSummary        = null;

    /**
     * @return GroupTrunkGroupUserCreationTaskGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * User Id format for Trunk Group User Creation.
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
    }

    /**
     * User Id format for Trunk Group User Creation.
     */
    public function getUserIdFormat()
    {
        return (!$this->userIdFormat) ?: $this->userIdFormat->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getUserIdDomain()
    {
        return (!$this->userIdDomain) ?: $this->userIdDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        $this->populateExtension = (boolean) $populateExtension;
    }

    /**
     * 
     */
    public function getPopulateExtension()
    {
        return (!$this->populateExtension) ?: $this->populateExtension;
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function getLinePortFormat()
    {
        return (!$this->linePortFormat) ?: $this->linePortFormat->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getLinePortDomain()
    {
        return (!$this->linePortDomain) ?: $this->linePortDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        $this->populateContact = (boolean) $populateContact;
    }

    /**
     * 
     */
    public function getPopulateContact()
    {
        return (!$this->populateContact) ?: $this->populateContact;
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function setContactFormat($contactFormat = null)
    {
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function getContactFormat()
    {
        return (!$this->contactFormat) ?: $this->contactFormat->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setContactDomain($contactDomain = null)
    {
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getContactDomain()
    {
        return (!$this->contactDomain) ?: $this->contactDomain->getValue();
    }

    /**
     * 
     */
    public function setUsersCreated($usersCreated = null)
    {
        $this->usersCreated = (int) $usersCreated;
    }

    /**
     * 
     */
    public function getUsersCreated()
    {
        return (!$this->usersCreated) ?: $this->usersCreated;
    }

    /**
     * 
     */
    public function setTotalUsersToCreate($totalUsersToCreate = null)
    {
        $this->totalUsersToCreate = (int) $totalUsersToCreate;
    }

    /**
     * 
     */
    public function getTotalUsersToCreate()
    {
        return (!$this->totalUsersToCreate) ?: $this->totalUsersToCreate;
    }

    /**
     * 
     */
    public function setErrorCount($errorCount = null)
    {
        $this->errorCount = (int) $errorCount;
    }

    /**
     * 
     */
    public function getErrorCount()
    {
        return (!$this->errorCount) ?: $this->errorCount;
    }

    /**
     * Service Pack name.
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->getValue();
    }

    /**
     * User level services.
     */
    public function setUserServiceName($userServiceName = null)
    {
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
    }

    /**
     * User level services.
     */
    public function getUserServiceName()
    {
        return (!$this->userServiceName) ?: $this->userServiceName->getValue();
    }

    /**
     * Trunk Group user creation task status.
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf TrunkGroupUserCreationTaskStatus)
             ? $status
             : new TrunkGroupUserCreationTaskStatus($status);
    }

    /**
     * Trunk Group user creation task status.
     */
    public function getStatus()
    {
        return (!$this->status) ?: $this->status->getValue();
    }

    /**
     * Trunk Group user creation mode.
     */
    public function setUserCreationMode($userCreationMode = null)
    {
        $this->userCreationMode = ($userCreationMode InstanceOf TrunkGroupUserCreationMode)
             ? $userCreationMode
             : new TrunkGroupUserCreationMode($userCreationMode);
    }

    /**
     * Trunk Group user creation mode.
     */
    public function getUserCreationMode()
    {
        return (!$this->userCreationMode) ?: $this->userCreationMode->getValue();
    }

    /**
     * 
     */
    public function setTaskSummary($taskSummary = null)
    {
        $this->taskSummary = (string) $taskSummary;
    }

    /**
     * 
     */
    public function getTaskSummary()
    {
        return (!$this->taskSummary) ?: $this->taskSummary;
    }
}

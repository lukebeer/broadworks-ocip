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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'GroupTrunkGroupUserCreationTaskGetResponse';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupUserCreationTaskGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        if (!$userIdFormat) return $this;
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
        $this->userIdFormat->setName('userIdFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationUserIdFormat $userIdFormat
     */
    public function getUserIdFormat()
    {
        return $this->userIdFormat->getValue();
    }

    /**
     * 
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        if (!$userIdDomain) return $this;
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
        $this->userIdDomain->setName('userIdDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $userIdDomain
     */
    public function getUserIdDomain()
    {
        return $this->userIdDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        if (!$populateExtension) return $this;
        $this->populateExtension = new PrimitiveType($populateExtension);
        $this->populateExtension->setName('populateExtension');
        return $this;
    }

    /**
     * 
     * @return boolean $populateExtension
     */
    public function getPopulateExtension()
    {
        return $this->populateExtension->getValue();
    }

    /**
     * 
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        if (!$linePortFormat) return $this;
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
        $this->linePortFormat->setName('linePortFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $linePortFormat
     */
    public function getLinePortFormat()
    {
        return $this->linePortFormat->getValue();
    }

    /**
     * 
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        if (!$linePortDomain) return $this;
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
        $this->linePortDomain->setName('linePortDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $linePortDomain
     */
    public function getLinePortDomain()
    {
        return $this->linePortDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        if (!$populateContact) return $this;
        $this->populateContact = new PrimitiveType($populateContact);
        $this->populateContact->setName('populateContact');
        return $this;
    }

    /**
     * 
     * @return boolean $populateContact
     */
    public function getPopulateContact()
    {
        return $this->populateContact->getValue();
    }

    /**
     * 
     */
    public function setContactFormat($contactFormat = null)
    {
        if (!$contactFormat) return $this;
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
        $this->contactFormat->setName('contactFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $contactFormat
     */
    public function getContactFormat()
    {
        return $this->contactFormat->getValue();
    }

    /**
     * 
     */
    public function setContactDomain($contactDomain = null)
    {
        if (!$contactDomain) return $this;
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
        $this->contactDomain->setName('contactDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $contactDomain
     */
    public function getContactDomain()
    {
        return $this->contactDomain->getValue();
    }

    /**
     * 
     */
    public function setUsersCreated($usersCreated = null)
    {
        if (!$usersCreated) return $this;
        $this->usersCreated = new PrimitiveType($usersCreated);
        $this->usersCreated->setName('usersCreated');
        return $this;
    }

    /**
     * 
     * @return int $usersCreated
     */
    public function getUsersCreated()
    {
        return $this->usersCreated->getValue();
    }

    /**
     * 
     */
    public function setTotalUsersToCreate($totalUsersToCreate = null)
    {
        if (!$totalUsersToCreate) return $this;
        $this->totalUsersToCreate = new PrimitiveType($totalUsersToCreate);
        $this->totalUsersToCreate->setName('totalUsersToCreate');
        return $this;
    }

    /**
     * 
     * @return int $totalUsersToCreate
     */
    public function getTotalUsersToCreate()
    {
        return $this->totalUsersToCreate->getValue();
    }

    /**
     * 
     */
    public function setErrorCount($errorCount = null)
    {
        if (!$errorCount) return $this;
        $this->errorCount = new PrimitiveType($errorCount);
        $this->errorCount->setName('errorCount');
        return $this;
    }

    /**
     * 
     * @return int $errorCount
     */
    public function getErrorCount()
    {
        return $this->errorCount->getValue();
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        if (!$servicePackName) return $this;
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }

    /**
     * 
     */
    public function setUserServiceName($userServiceName = null)
    {
        if (!$userServiceName) return $this;
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
        $this->userServiceName->setName('userServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $userServiceName
     */
    public function getUserServiceName()
    {
        return $this->userServiceName->getValue();
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        if (!$status) return $this;
        $this->status = ($status InstanceOf TrunkGroupUserCreationTaskStatus)
             ? $status
             : new TrunkGroupUserCreationTaskStatus($status);
        $this->status->setName('status');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskStatus $status
     */
    public function getStatus()
    {
        return $this->status->getValue();
    }

    /**
     * 
     */
    public function setUserCreationMode($userCreationMode = null)
    {
        if (!$userCreationMode) return $this;
        $this->userCreationMode = ($userCreationMode InstanceOf TrunkGroupUserCreationMode)
             ? $userCreationMode
             : new TrunkGroupUserCreationMode($userCreationMode);
        $this->userCreationMode->setName('userCreationMode');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationMode $userCreationMode
     */
    public function getUserCreationMode()
    {
        return $this->userCreationMode->getValue();
    }

    /**
     * 
     */
    public function setTaskSummary($taskSummary = null)
    {
        if (!$taskSummary) return $this;
        $this->taskSummary = new PrimitiveType($taskSummary);
        $this->taskSummary->setName('taskSummary');
        return $this;
    }

    /**
     * 
     * @return string $taskSummary
     */
    public function getTaskSummary()
    {
        return $this->taskSummary->getValue();
    }
}

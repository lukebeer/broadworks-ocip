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
    public    $name = 'GroupTrunkGroupUserCreationTaskGetResponse';
    protected $userIdFormat;
    protected $userIdDomain;
    protected $populateExtension;
    protected $linePortFormat;
    protected $linePortDomain;
    protected $populateContact;
    protected $contactFormat;
    protected $contactDomain;
    protected $usersCreated;
    protected $totalUsersToCreate;
    protected $errorCount;
    protected $servicePackName;
    protected $userServiceName;
    protected $status;
    protected $userCreationMode;
    protected $taskSummary;

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
        return ($this->userIdFormat) ? $this->userIdFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setUserIdDomain($userIdDomain = null)
    {
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
        return ($this->userIdDomain) ? $this->userIdDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
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
        return ($this->populateExtension) ? $this->populateExtension->getValue() : null;
    }

    /**
     * 
     */
    public function setLinePortFormat($linePortFormat = null)
    {
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
        return ($this->linePortFormat) ? $this->linePortFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setLinePortDomain($linePortDomain = null)
    {
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
        return ($this->linePortDomain) ? $this->linePortDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
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
        return ($this->populateContact) ? $this->populateContact->getValue() : null;
    }

    /**
     * 
     */
    public function setContactFormat($contactFormat = null)
    {
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
        return ($this->contactFormat) ? $this->contactFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setContactDomain($contactDomain = null)
    {
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
        return ($this->contactDomain) ? $this->contactDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setUsersCreated($usersCreated = null)
    {
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
        return ($this->usersCreated) ? $this->usersCreated->getValue() : null;
    }

    /**
     * 
     */
    public function setTotalUsersToCreate($totalUsersToCreate = null)
    {
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
        return ($this->totalUsersToCreate) ? $this->totalUsersToCreate->getValue() : null;
    }

    /**
     * 
     */
    public function setErrorCount($errorCount = null)
    {
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
        return ($this->errorCount) ? $this->errorCount->getValue() : null;
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
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
        return ($this->servicePackName) ? $this->servicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserServiceName($userServiceName = null)
    {
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
        return ($this->userServiceName) ? $this->userServiceName->getValue() : null;
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
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
        return ($this->status) ? $this->status->getValue() : null;
    }

    /**
     * 
     */
    public function setUserCreationMode($userCreationMode = null)
    {
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
        return ($this->userCreationMode) ? $this->userCreationMode->getValue() : null;
    }

    /**
     * 
     */
    public function setTaskSummary($taskSummary = null)
    {
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
        return ($this->taskSummary) ? $this->taskSummary->getValue() : null;
    }
}

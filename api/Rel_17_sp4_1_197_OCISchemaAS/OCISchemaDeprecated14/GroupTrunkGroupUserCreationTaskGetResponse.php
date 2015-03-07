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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $userIdFormat        = null;
    protected $userIdDomain        = null;
    protected $populateExtension   = null;
    protected $linePortFormat      = null;
    protected $linePortDomain      = null;
    protected $populateContact     = null;
    protected $contactFormat       = null;
    protected $contactDomain       = null;
    protected $usersCreated        = null;
    protected $totalUsersToCreate  = null;
    protected $errorCount          = null;
    protected $servicePackName     = null;
    protected $userServiceName     = null;
    protected $status              = null;
    protected $userCreationMode    = null;
    protected $taskSummary         = null;


    public function setUserIdFormat($userIdFormat = null)
    {
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
    }

    public function getUserIdFormat()
    {
        return (!$this->userIdFormat) ?: $this->userIdFormat->value();
    }

    public function setUserIdDomain($userIdDomain = null)
    {
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
    }

    public function getUserIdDomain()
    {
        return (!$this->userIdDomain) ?: $this->userIdDomain->value();
    }

    public function setPopulateExtension(xs:boolean $populateExtension = null)
    {
    }

    public function getPopulateExtension()
    {
        return (!$this->populateExtension) ?: $this->populateExtension->value();
    }

    public function setLinePortFormat($linePortFormat = null)
    {
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
    }

    public function getLinePortFormat()
    {
        return (!$this->linePortFormat) ?: $this->linePortFormat->value();
    }

    public function setLinePortDomain($linePortDomain = null)
    {
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
    }

    public function getLinePortDomain()
    {
        return (!$this->linePortDomain) ?: $this->linePortDomain->value();
    }

    public function setPopulateContact(xs:boolean $populateContact = null)
    {
    }

    public function getPopulateContact()
    {
        return (!$this->populateContact) ?: $this->populateContact->value();
    }

    public function setContactFormat($contactFormat = null)
    {
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
    }

    public function getContactFormat()
    {
        return (!$this->contactFormat) ?: $this->contactFormat->value();
    }

    public function setContactDomain($contactDomain = null)
    {
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
    }

    public function getContactDomain()
    {
        return (!$this->contactDomain) ?: $this->contactDomain->value();
    }

    public function setUsersCreated(xs:int $usersCreated = null)
    {
    }

    public function getUsersCreated()
    {
        return (!$this->usersCreated) ?: $this->usersCreated->value();
    }

    public function setTotalUsersToCreate(xs:int $totalUsersToCreate = null)
    {
    }

    public function getTotalUsersToCreate()
    {
        return (!$this->totalUsersToCreate) ?: $this->totalUsersToCreate->value();
    }

    public function setErrorCount(xs:int $errorCount = null)
    {
    }

    public function getErrorCount()
    {
        return (!$this->errorCount) ?: $this->errorCount->value();
    }

    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setUserServiceName($userServiceName = null)
    {
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
    }

    public function getUserServiceName()
    {
        return (!$this->userServiceName) ?: $this->userServiceName->value();
    }

    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf TrunkGroupUserCreationTaskStatus)
             ? $status
             : new TrunkGroupUserCreationTaskStatus($status);
    }

    public function getStatus()
    {
        return (!$this->status) ?: $this->status->value();
    }

    public function setUserCreationMode($userCreationMode = null)
    {
        $this->userCreationMode = ($userCreationMode InstanceOf TrunkGroupUserCreationMode)
             ? $userCreationMode
             : new TrunkGroupUserCreationMode($userCreationMode);
    }

    public function getUserCreationMode()
    {
        return (!$this->userCreationMode) ?: $this->userCreationMode->value();
    }

    public function setTaskSummary(xs:token $taskSummary = null)
    {
    }

    public function getTaskSummary()
    {
        return (!$this->taskSummary) ?: $this->taskSummary->value();
    }
}

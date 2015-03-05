<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationUserIdFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationSIPURIFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationTaskStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:token;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userIdFormat,
             $userIdDomain,
             $populateExtension,
             $linePortFormat,
             $linePortDomain,
             $populateContact,
             $contactFormat=null,
             $contactDomain=null,
             $usersCreated,
             $totalUsersToCreate,
             $errorCount,
             $servicePackName=null,
             $userServiceName=null,
             $status,
             $userCreationMode,
             $taskSummary
    ) {
        $this->userIdFormat       = $userIdFormat;
        $this->userIdDomain       = new NetAddress($userIdDomain);
        $this->populateExtension  = $populateExtension;
        $this->linePortFormat     = $linePortFormat;
        $this->linePortDomain     = new NetAddress($linePortDomain);
        $this->populateContact    = $populateContact;
        $this->contactFormat      = $contactFormat;
        $this->contactDomain      = new NetAddress($contactDomain);
        $this->usersCreated       = $usersCreated;
        $this->totalUsersToCreate = $totalUsersToCreate;
        $this->errorCount         = $errorCount;
        $this->servicePackName    = new ServicePackName($servicePackName);
        $this->userServiceName    = new UserService($userServiceName);
        $this->status             = $status;
        $this->userCreationMode   = $userCreationMode;
        $this->taskSummary        = $taskSummary;
        $this->args               = func_get_args();
    }

    public function setUserIdFormat($userIdFormat)
    {
        $userIdFormat and $this->userIdFormat = new TrunkGroupUserCreationUserIdFormat($userIdFormat);
    }

    public function getUserIdFormat()
    {
        return (!$this->userIdFormat) ?: $this->userIdFormat->value();
    }

    public function setUserIdDomain($userIdDomain)
    {
        $userIdDomain and $this->userIdDomain = new NetAddress($userIdDomain);
    }

    public function getUserIdDomain()
    {
        return (!$this->userIdDomain) ?: $this->userIdDomain->value();
    }

    public function setPopulateExtension($populateExtension)
    {
        $populateExtension and $this->populateExtension = new xs:boolean($populateExtension);
    }

    public function getPopulateExtension()
    {
        return (!$this->populateExtension) ?: $this->populateExtension->value();
    }

    public function setLinePortFormat($linePortFormat)
    {
        $linePortFormat and $this->linePortFormat = new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
    }

    public function getLinePortFormat()
    {
        return (!$this->linePortFormat) ?: $this->linePortFormat->value();
    }

    public function setLinePortDomain($linePortDomain)
    {
        $linePortDomain and $this->linePortDomain = new NetAddress($linePortDomain);
    }

    public function getLinePortDomain()
    {
        return (!$this->linePortDomain) ?: $this->linePortDomain->value();
    }

    public function setPopulateContact($populateContact)
    {
        $populateContact and $this->populateContact = new xs:boolean($populateContact);
    }

    public function getPopulateContact()
    {
        return (!$this->populateContact) ?: $this->populateContact->value();
    }

    public function setContactFormat($contactFormat)
    {
        $contactFormat and $this->contactFormat = new TrunkGroupUserCreationSIPURIFormat($contactFormat);
    }

    public function getContactFormat()
    {
        return (!$this->contactFormat) ?: $this->contactFormat->value();
    }

    public function setContactDomain($contactDomain)
    {
        $contactDomain and $this->contactDomain = new NetAddress($contactDomain);
    }

    public function getContactDomain()
    {
        return (!$this->contactDomain) ?: $this->contactDomain->value();
    }

    public function setUsersCreated($usersCreated)
    {
        $usersCreated and $this->usersCreated = new xs:int($usersCreated);
    }

    public function getUsersCreated()
    {
        return (!$this->usersCreated) ?: $this->usersCreated->value();
    }

    public function setTotalUsersToCreate($totalUsersToCreate)
    {
        $totalUsersToCreate and $this->totalUsersToCreate = new xs:int($totalUsersToCreate);
    }

    public function getTotalUsersToCreate()
    {
        return (!$this->totalUsersToCreate) ?: $this->totalUsersToCreate->value();
    }

    public function setErrorCount($errorCount)
    {
        $errorCount and $this->errorCount = new xs:int($errorCount);
    }

    public function getErrorCount()
    {
        return (!$this->errorCount) ?: $this->errorCount->value();
    }

    public function setServicePackName($servicePackName)
    {
        $servicePackName and $this->servicePackName = new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setUserServiceName($userServiceName)
    {
        $userServiceName and $this->userServiceName = new UserService($userServiceName);
    }

    public function getUserServiceName()
    {
        return (!$this->userServiceName) ?: $this->userServiceName->value();
    }

    public function setStatus($status)
    {
        $status and $this->status = new TrunkGroupUserCreationTaskStatus($status);
    }

    public function getStatus()
    {
        return (!$this->status) ?: $this->status->value();
    }

    public function setUserCreationMode($userCreationMode)
    {
        $userCreationMode and $this->userCreationMode = new TrunkGroupUserCreationMode($userCreationMode);
    }

    public function getUserCreationMode()
    {
        return (!$this->userCreationMode) ?: $this->userCreationMode->value();
    }

    public function setTaskSummary($taskSummary)
    {
        $taskSummary and $this->taskSummary = new xs:token($taskSummary);
    }

    public function getTaskSummary()
    {
        return (!$this->taskSummary) ?: $this->taskSummary->value();
    }
}

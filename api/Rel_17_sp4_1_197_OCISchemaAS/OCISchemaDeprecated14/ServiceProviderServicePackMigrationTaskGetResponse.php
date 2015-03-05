<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationMaxDurationHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationAbortErrorThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskUserSelectionType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetRequest.
 *         The groupTable column headings are: "Migrate", "Group Id", "Group Name", "User Count".
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetResponse14sp4
 */
class ServiceProviderServicePackMigrationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $taskName,
             $startTimestamp=null,
             $maxDurationHours,
             $sendReportEmail,
             $reportDeliveryEmailAddress=null,
             $abortOnError,
             $abortErrorThreshold=null,
             $reportAllUsers,
             $automaticallyIncrementServiceQuantity,
             $errorCount,
             $status,
             $groupsProcessed,
             $groupsTotal,
             $usersProcessed,
             $usersTotal,
             $userSelectionType,
             $reportFilePathName,
             $groupTable,
             $userSelectionServicePackName=null,
             $userSelectionServiceName=null,
             $removeServicePackName=null,
             $removeServiceName=null,
             $assignServicePackName=null,
             $assignServiceName=null
    ) {
        $this->taskName                              = $taskName;
        $this->startTimestamp                        = $startTimestamp;
        $this->maxDurationHours                      = $maxDurationHours;
        $this->sendReportEmail                       = $sendReportEmail;
        $this->reportDeliveryEmailAddress            = new EmailAddress($reportDeliveryEmailAddress);
        $this->abortOnError                          = $abortOnError;
        $this->abortErrorThreshold                   = $abortErrorThreshold;
        $this->reportAllUsers                        = $reportAllUsers;
        $this->automaticallyIncrementServiceQuantity = $automaticallyIncrementServiceQuantity;
        $this->errorCount                            = $errorCount;
        $this->status                                = $status;
        $this->groupsProcessed                       = $groupsProcessed;
        $this->groupsTotal                           = $groupsTotal;
        $this->usersProcessed                        = $usersProcessed;
        $this->usersTotal                            = $usersTotal;
        $this->userSelectionType                     = $userSelectionType;
        $this->reportFilePathName                    = new FileName($reportFilePathName);
        $this->groupTable                            = $groupTable;
        $this->userSelectionServicePackName          = new ServicePackName($userSelectionServicePackName);
        $this->userSelectionServiceName              = new UserService($userSelectionServiceName);
        $this->removeServicePackName                 = new ServicePackName($removeServicePackName);
        $this->removeServiceName                     = new UserService($removeServiceName);
        $this->assignServicePackName                 = new ServicePackName($assignServicePackName);
        $this->assignServiceName                     = new UserService($assignServiceName);
        $this->args                                  = func_get_args();
    }

    public function setTaskName($taskName)
    {
        $taskName and $this->taskName = new ServicePackMigrationTaskName($taskName);
    }

    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->value();
    }

    public function setStartTimestamp($startTimestamp)
    {
        $startTimestamp and $this->startTimestamp = new xs:dateTime($startTimestamp);
    }

    public function getStartTimestamp()
    {
        return (!$this->startTimestamp) ?: $this->startTimestamp->value();
    }

    public function setMaxDurationHours($maxDurationHours)
    {
        $maxDurationHours and $this->maxDurationHours = new ServicePackMigrationMaxDurationHours($maxDurationHours);
    }

    public function getMaxDurationHours()
    {
        return (!$this->maxDurationHours) ?: $this->maxDurationHours->value();
    }

    public function setSendReportEmail($sendReportEmail)
    {
        $sendReportEmail and $this->sendReportEmail = new xs:boolean($sendReportEmail);
    }

    public function getSendReportEmail()
    {
        return (!$this->sendReportEmail) ?: $this->sendReportEmail->value();
    }

    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $reportDeliveryEmailAddress and $this->reportDeliveryEmailAddress = new EmailAddress($reportDeliveryEmailAddress);
    }

    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->value();
    }

    public function setAbortOnError($abortOnError)
    {
        $abortOnError and $this->abortOnError = new xs:boolean($abortOnError);
    }

    public function getAbortOnError()
    {
        return (!$this->abortOnError) ?: $this->abortOnError->value();
    }

    public function setAbortErrorThreshold($abortErrorThreshold)
    {
        $abortErrorThreshold and $this->abortErrorThreshold = new ServicePackMigrationAbortErrorThreshold($abortErrorThreshold);
    }

    public function getAbortErrorThreshold()
    {
        return (!$this->abortErrorThreshold) ?: $this->abortErrorThreshold->value();
    }

    public function setReportAllUsers($reportAllUsers)
    {
        $reportAllUsers and $this->reportAllUsers = new xs:boolean($reportAllUsers);
    }

    public function getReportAllUsers()
    {
        return (!$this->reportAllUsers) ?: $this->reportAllUsers->value();
    }

    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity)
    {
        $automaticallyIncrementServiceQuantity and $this->automaticallyIncrementServiceQuantity = new xs:boolean($automaticallyIncrementServiceQuantity);
    }

    public function getAutomaticallyIncrementServiceQuantity()
    {
        return (!$this->automaticallyIncrementServiceQuantity) ?: $this->automaticallyIncrementServiceQuantity->value();
    }

    public function setErrorCount($errorCount)
    {
        $errorCount and $this->errorCount = new xs:int($errorCount);
    }

    public function getErrorCount()
    {
        return (!$this->errorCount) ?: $this->errorCount->value();
    }

    public function setStatus($status)
    {
        $status and $this->status = new ServicePackMigrationTaskStatus($status);
    }

    public function getStatus()
    {
        return (!$this->status) ?: $this->status->value();
    }

    public function setGroupsProcessed($groupsProcessed)
    {
        $groupsProcessed and $this->groupsProcessed = new xs:int($groupsProcessed);
    }

    public function getGroupsProcessed()
    {
        return (!$this->groupsProcessed) ?: $this->groupsProcessed->value();
    }

    public function setGroupsTotal($groupsTotal)
    {
        $groupsTotal and $this->groupsTotal = new xs:int($groupsTotal);
    }

    public function getGroupsTotal()
    {
        return (!$this->groupsTotal) ?: $this->groupsTotal->value();
    }

    public function setUsersProcessed($usersProcessed)
    {
        $usersProcessed and $this->usersProcessed = new xs:int($usersProcessed);
    }

    public function getUsersProcessed()
    {
        return (!$this->usersProcessed) ?: $this->usersProcessed->value();
    }

    public function setUsersTotal($usersTotal)
    {
        $usersTotal and $this->usersTotal = new xs:int($usersTotal);
    }

    public function getUsersTotal()
    {
        return (!$this->usersTotal) ?: $this->usersTotal->value();
    }

    public function setUserSelectionType($userSelectionType)
    {
        $userSelectionType and $this->userSelectionType = new ServicePackMigrationTaskUserSelectionType($userSelectionType);
    }

    public function getUserSelectionType()
    {
        return (!$this->userSelectionType) ?: $this->userSelectionType->value();
    }

    public function setReportFilePathName($reportFilePathName)
    {
        $reportFilePathName and $this->reportFilePathName = new FileName($reportFilePathName);
    }

    public function getReportFilePathName()
    {
        return (!$this->reportFilePathName) ?: $this->reportFilePathName->value();
    }

    public function setGroupTable($groupTable)
    {
        $groupTable and $this->groupTable = new core:OCITable($groupTable);
    }

    public function getGroupTable()
    {
        return (!$this->groupTable) ?: $this->groupTable->value();
    }

    public function setUserSelectionServicePackName($userSelectionServicePackName)
    {
        $userSelectionServicePackName and $this->userSelectionServicePackName = new ServicePackName($userSelectionServicePackName);
    }

    public function getUserSelectionServicePackName()
    {
        return (!$this->userSelectionServicePackName) ?: $this->userSelectionServicePackName->value();
    }

    public function setUserSelectionServiceName($userSelectionServiceName)
    {
        $userSelectionServiceName and $this->userSelectionServiceName = new UserService($userSelectionServiceName);
    }

    public function getUserSelectionServiceName()
    {
        return (!$this->userSelectionServiceName) ?: $this->userSelectionServiceName->value();
    }

    public function setRemoveServicePackName($removeServicePackName)
    {
        $removeServicePackName and $this->removeServicePackName = new ServicePackName($removeServicePackName);
    }

    public function getRemoveServicePackName()
    {
        return (!$this->removeServicePackName) ?: $this->removeServicePackName->value();
    }

    public function setRemoveServiceName($removeServiceName)
    {
        $removeServiceName and $this->removeServiceName = new UserService($removeServiceName);
    }

    public function getRemoveServiceName()
    {
        return (!$this->removeServiceName) ?: $this->removeServiceName->value();
    }

    public function setAssignServicePackName($assignServicePackName)
    {
        $assignServicePackName and $this->assignServicePackName = new ServicePackName($assignServicePackName);
    }

    public function getAssignServicePackName()
    {
        return (!$this->assignServicePackName) ?: $this->assignServicePackName->value();
    }

    public function setAssignServiceName($assignServiceName)
    {
        $assignServiceName and $this->assignServiceName = new UserService($assignServiceName);
    }

    public function getAssignServiceName()
    {
        return (!$this->assignServiceName) ?: $this->assignServiceName->value();
    }
}

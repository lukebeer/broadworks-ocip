<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskUserSelectionType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationAbortErrorThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationMaxDurationHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetRequest14sp4.
 *         The groupTable column headings are: "Group Id", "Group Name", "User Count".
 */
class ServiceProviderServicePackMigrationTaskGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $taskName                               = null;
    protected $startTimestamp                         = null;
    protected $maxDurationHours                       = null;
    protected $sendReportEmail                        = null;
    protected $reportDeliveryEmailAddress             = null;
    protected $abortOnError                           = null;
    protected $abortErrorThreshold                    = null;
    protected $reportAllUsers                         = null;
    protected $automaticallyIncrementServiceQuantity  = null;
    protected $errorCount                             = null;
    protected $status                                 = null;
    protected $groupsProcessed                        = null;
    protected $groupsTotal                            = null;
    protected $usersProcessed                         = null;
    protected $usersTotal                             = null;
    protected $userSelectionType                      = null;
    protected $reportFilePathName                     = null;
    protected $userSelectionServicePackName           = null;
    protected $userSelectionServiceName               = null;
    protected $removeServicePackName                  = null;
    protected $removeServiceName                      = null;
    protected $assignServicePackName                  = null;
    protected $assignServiceName                      = null;


    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
    }

    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->value();
    }

    public function setStartTimestamp(xs:dateTime $startTimestamp = null)
    {
    }

    public function getStartTimestamp()
    {
        return (!$this->startTimestamp) ?: $this->startTimestamp->value();
    }

    public function setMaxDurationHours($maxDurationHours = null)
    {
        $this->maxDurationHours = ($maxDurationHours InstanceOf ServicePackMigrationMaxDurationHours)
             ? $maxDurationHours
             : new ServicePackMigrationMaxDurationHours($maxDurationHours);
    }

    public function getMaxDurationHours()
    {
        return (!$this->maxDurationHours) ?: $this->maxDurationHours->value();
    }

    public function setSendReportEmail(xs:boolean $sendReportEmail = null)
    {
    }

    public function getSendReportEmail()
    {
        return (!$this->sendReportEmail) ?: $this->sendReportEmail->value();
    }

    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
    }

    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->value();
    }

    public function setAbortOnError(xs:boolean $abortOnError = null)
    {
    }

    public function getAbortOnError()
    {
        return (!$this->abortOnError) ?: $this->abortOnError->value();
    }

    public function setAbortErrorThreshold($abortErrorThreshold = null)
    {
        $this->abortErrorThreshold = ($abortErrorThreshold InstanceOf ServicePackMigrationAbortErrorThreshold)
             ? $abortErrorThreshold
             : new ServicePackMigrationAbortErrorThreshold($abortErrorThreshold);
    }

    public function getAbortErrorThreshold()
    {
        return (!$this->abortErrorThreshold) ?: $this->abortErrorThreshold->value();
    }

    public function setReportAllUsers(xs:boolean $reportAllUsers = null)
    {
    }

    public function getReportAllUsers()
    {
        return (!$this->reportAllUsers) ?: $this->reportAllUsers->value();
    }

    public function setAutomaticallyIncrementServiceQuantity(xs:boolean $automaticallyIncrementServiceQuantity = null)
    {
    }

    public function getAutomaticallyIncrementServiceQuantity()
    {
        return (!$this->automaticallyIncrementServiceQuantity) ?: $this->automaticallyIncrementServiceQuantity->value();
    }

    public function setErrorCount(xs:int $errorCount = null)
    {
    }

    public function getErrorCount()
    {
        return (!$this->errorCount) ?: $this->errorCount->value();
    }

    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf ServicePackMigrationTaskStatus)
             ? $status
             : new ServicePackMigrationTaskStatus($status);
    }

    public function getStatus()
    {
        return (!$this->status) ?: $this->status->value();
    }

    public function setGroupsProcessed(xs:int $groupsProcessed = null)
    {
    }

    public function getGroupsProcessed()
    {
        return (!$this->groupsProcessed) ?: $this->groupsProcessed->value();
    }

    public function setGroupsTotal(xs:int $groupsTotal = null)
    {
    }

    public function getGroupsTotal()
    {
        return (!$this->groupsTotal) ?: $this->groupsTotal->value();
    }

    public function setUsersProcessed(xs:int $usersProcessed = null)
    {
    }

    public function getUsersProcessed()
    {
        return (!$this->usersProcessed) ?: $this->usersProcessed->value();
    }

    public function setUsersTotal(xs:int $usersTotal = null)
    {
    }

    public function getUsersTotal()
    {
        return (!$this->usersTotal) ?: $this->usersTotal->value();
    }

    public function setUserSelectionType($userSelectionType = null)
    {
        $this->userSelectionType = ($userSelectionType InstanceOf ServicePackMigrationTaskUserSelectionType)
             ? $userSelectionType
             : new ServicePackMigrationTaskUserSelectionType($userSelectionType);
    }

    public function getUserSelectionType()
    {
        return (!$this->userSelectionType) ?: $this->userSelectionType->value();
    }

    public function setReportFilePathName($reportFilePathName = null)
    {
        $this->reportFilePathName = ($reportFilePathName InstanceOf FileName)
             ? $reportFilePathName
             : new FileName($reportFilePathName);
    }

    public function getReportFilePathName()
    {
        return (!$this->reportFilePathName) ?: $this->reportFilePathName->value();
    }

    public function setUserSelectionServicePackName($userSelectionServicePackName = null)
    {
        $this->userSelectionServicePackName = ($userSelectionServicePackName InstanceOf ServicePackName)
             ? $userSelectionServicePackName
             : new ServicePackName($userSelectionServicePackName);
    }

    public function getUserSelectionServicePackName()
    {
        return (!$this->userSelectionServicePackName) ?: $this->userSelectionServicePackName->value();
    }

    public function setUserSelectionServiceName($userSelectionServiceName = null)
    {
        $this->userSelectionServiceName = ($userSelectionServiceName InstanceOf UserService)
             ? $userSelectionServiceName
             : new UserService($userSelectionServiceName);
    }

    public function getUserSelectionServiceName()
    {
        return (!$this->userSelectionServiceName) ?: $this->userSelectionServiceName->value();
    }

    public function setRemoveServicePackName($removeServicePackName = null)
    {
        $this->removeServicePackName = ($removeServicePackName InstanceOf ServicePackName)
             ? $removeServicePackName
             : new ServicePackName($removeServicePackName);
    }

    public function getRemoveServicePackName()
    {
        return (!$this->removeServicePackName) ?: $this->removeServicePackName->value();
    }

    public function setRemoveServiceName($removeServiceName = null)
    {
        $this->removeServiceName = ($removeServiceName InstanceOf UserService)
             ? $removeServiceName
             : new UserService($removeServiceName);
    }

    public function getRemoveServiceName()
    {
        return (!$this->removeServiceName) ?: $this->removeServiceName->value();
    }

    public function setAssignServicePackName($assignServicePackName = null)
    {
        $this->assignServicePackName = ($assignServicePackName InstanceOf ServicePackName)
             ? $assignServicePackName
             : new ServicePackName($assignServicePackName);
    }

    public function getAssignServicePackName()
    {
        return (!$this->assignServicePackName) ?: $this->assignServicePackName->value();
    }

    public function setAssignServiceName($assignServiceName = null)
    {
        $this->assignServiceName = ($assignServiceName InstanceOf UserService)
             ? $assignServiceName
             : new UserService($assignServiceName);
    }

    public function getAssignServiceName()
    {
        return (!$this->assignServiceName) ?: $this->assignServiceName->value();
    }
}

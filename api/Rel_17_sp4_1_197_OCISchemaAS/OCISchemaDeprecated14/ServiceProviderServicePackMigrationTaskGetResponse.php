<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

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
     * Response to ServiceProviderServicePackMigrationTaskGetRequest.
 *         The groupTable column headings are: "Migrate", "Group Id", "Group Name", "User Count".
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetResponse14sp4
 */
class ServiceProviderServicePackMigrationTaskGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\ServiceProviderServicePackMigrationTaskGetResponse';
    public    $name                                  = __CLASS__;
    protected $taskName                              = null;
    protected $startTimestamp                        = null;
    protected $maxDurationHours                      = null;
    protected $sendReportEmail                       = null;
    protected $reportDeliveryEmailAddress            = null;
    protected $abortOnError                          = null;
    protected $abortErrorThreshold                   = null;
    protected $reportAllUsers                        = null;
    protected $automaticallyIncrementServiceQuantity = null;
    protected $errorCount                            = null;
    protected $status                                = null;
    protected $groupsProcessed                       = null;
    protected $groupsTotal                           = null;
    protected $usersProcessed                        = null;
    protected $usersTotal                            = null;
    protected $userSelectionType                     = null;
    protected $reportFilePathName                    = null;
    protected $groupTable                            = null;
    protected $userSelectionServicePackName          = null;
    protected $userSelectionServiceName              = null;
    protected $removeServicePackName                 = null;
    protected $removeServiceName                     = null;
    protected $assignServicePackName                 = null;
    protected $assignServiceName                     = null;


    /**
     * Service pack migration task name.
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
    }

    /**
     * Service pack migration task name.
     */
    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->getValue();
    }

    /**
     * 
     */
    public function setStartTimestamp(xs:dateTime $startTimestamp = null)
    {
        $this->startTimestamp = xs:dateTime $startTimestamp;
    }

    /**
     * 
     */
    public function getStartTimestamp()
    {
        return (!$this->startTimestamp) ?: $this->startTimestamp->getValue();
    }

    /**
     * The maximum duration of a service pack migration task.
     */
    public function setMaxDurationHours($maxDurationHours = null)
    {
        $this->maxDurationHours = ($maxDurationHours InstanceOf ServicePackMigrationMaxDurationHours)
             ? $maxDurationHours
             : new ServicePackMigrationMaxDurationHours($maxDurationHours);
    }

    /**
     * The maximum duration of a service pack migration task.
     */
    public function getMaxDurationHours()
    {
        return (!$this->maxDurationHours) ?: $this->maxDurationHours->getValue();
    }

    /**
     * 
     */
    public function setSendReportEmail($sendReportEmail = null)
    {
        $this->sendReportEmail = (boolean) $sendReportEmail;
    }

    /**
     * 
     */
    public function getSendReportEmail()
    {
        return (!$this->sendReportEmail) ?: $this->sendReportEmail->getValue();
    }

    /**
     * Email Address
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
    }

    /**
     * Email Address
     */
    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setAbortOnError($abortOnError = null)
    {
        $this->abortOnError = (boolean) $abortOnError;
    }

    /**
     * 
     */
    public function getAbortOnError()
    {
        return (!$this->abortOnError) ?: $this->abortOnError->getValue();
    }

    /**
     * The service pack migration task will be aborted if this many errors occurs.
     */
    public function setAbortErrorThreshold($abortErrorThreshold = null)
    {
        $this->abortErrorThreshold = ($abortErrorThreshold InstanceOf ServicePackMigrationAbortErrorThreshold)
             ? $abortErrorThreshold
             : new ServicePackMigrationAbortErrorThreshold($abortErrorThreshold);
    }

    /**
     * The service pack migration task will be aborted if this many errors occurs.
     */
    public function getAbortErrorThreshold()
    {
        return (!$this->abortErrorThreshold) ?: $this->abortErrorThreshold->getValue();
    }

    /**
     * 
     */
    public function setReportAllUsers($reportAllUsers = null)
    {
        $this->reportAllUsers = (boolean) $reportAllUsers;
    }

    /**
     * 
     */
    public function getReportAllUsers()
    {
        return (!$this->reportAllUsers) ?: $this->reportAllUsers->getValue();
    }

    /**
     * 
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity = null)
    {
        $this->automaticallyIncrementServiceQuantity = (boolean) $automaticallyIncrementServiceQuantity;
    }

    /**
     * 
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return (!$this->automaticallyIncrementServiceQuantity) ?: $this->automaticallyIncrementServiceQuantity->getValue();
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
        return (!$this->errorCount) ?: $this->errorCount->getValue();
    }

    /**
     * Possible status values of a service pack migration task.
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf ServicePackMigrationTaskStatus)
             ? $status
             : new ServicePackMigrationTaskStatus($status);
    }

    /**
     * Possible status values of a service pack migration task.
     */
    public function getStatus()
    {
        return (!$this->status) ?: $this->status->getValue();
    }

    /**
     * 
     */
    public function setGroupsProcessed($groupsProcessed = null)
    {
        $this->groupsProcessed = (int) $groupsProcessed;
    }

    /**
     * 
     */
    public function getGroupsProcessed()
    {
        return (!$this->groupsProcessed) ?: $this->groupsProcessed->getValue();
    }

    /**
     * 
     */
    public function setGroupsTotal($groupsTotal = null)
    {
        $this->groupsTotal = (int) $groupsTotal;
    }

    /**
     * 
     */
    public function getGroupsTotal()
    {
        return (!$this->groupsTotal) ?: $this->groupsTotal->getValue();
    }

    /**
     * 
     */
    public function setUsersProcessed($usersProcessed = null)
    {
        $this->usersProcessed = (int) $usersProcessed;
    }

    /**
     * 
     */
    public function getUsersProcessed()
    {
        return (!$this->usersProcessed) ?: $this->usersProcessed->getValue();
    }

    /**
     * 
     */
    public function setUsersTotal($usersTotal = null)
    {
        $this->usersTotal = (int) $usersTotal;
    }

    /**
     * 
     */
    public function getUsersTotal()
    {
        return (!$this->usersTotal) ?: $this->usersTotal->getValue();
    }

    /**
     * Possible status values of a service pack migration task.
     */
    public function setUserSelectionType($userSelectionType = null)
    {
        $this->userSelectionType = ($userSelectionType InstanceOf ServicePackMigrationTaskUserSelectionType)
             ? $userSelectionType
             : new ServicePackMigrationTaskUserSelectionType($userSelectionType);
    }

    /**
     * Possible status values of a service pack migration task.
     */
    public function getUserSelectionType()
    {
        return (!$this->userSelectionType) ?: $this->userSelectionType->getValue();
    }

    /**
     * Name of a file on the filesystem.
     */
    public function setReportFilePathName($reportFilePathName = null)
    {
        $this->reportFilePathName = ($reportFilePathName InstanceOf FileName)
             ? $reportFilePathName
             : new FileName($reportFilePathName);
    }

    /**
     * Name of a file on the filesystem.
     */
    public function getReportFilePathName()
    {
        return (!$this->reportFilePathName) ?: $this->reportFilePathName->getValue();
    }

    /**
     * 
     */
    public function setGroupTable(core:OCITable $groupTable = null)
    {
        $this->groupTable = core:OCITable $groupTable;
    }

    /**
     * 
     */
    public function getGroupTable()
    {
        return (!$this->groupTable) ?: $this->groupTable->getValue();
    }

    /**
     * Service Pack name.
     */
    public function setUserSelectionServicePackName($userSelectionServicePackName = null)
    {
        $this->userSelectionServicePackName = ($userSelectionServicePackName InstanceOf ServicePackName)
             ? $userSelectionServicePackName
             : new ServicePackName($userSelectionServicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getUserSelectionServicePackName()
    {
        return (!$this->userSelectionServicePackName) ?: $this->userSelectionServicePackName->getValue();
    }

    /**
     * User level services.
     */
    public function setUserSelectionServiceName($userSelectionServiceName = null)
    {
        $this->userSelectionServiceName = ($userSelectionServiceName InstanceOf UserService)
             ? $userSelectionServiceName
             : new UserService($userSelectionServiceName);
    }

    /**
     * User level services.
     */
    public function getUserSelectionServiceName()
    {
        return (!$this->userSelectionServiceName) ?: $this->userSelectionServiceName->getValue();
    }

    /**
     * Service Pack name.
     */
    public function setRemoveServicePackName($removeServicePackName = null)
    {
        $this->removeServicePackName = ($removeServicePackName InstanceOf ServicePackName)
             ? $removeServicePackName
             : new ServicePackName($removeServicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getRemoveServicePackName()
    {
        return (!$this->removeServicePackName) ?: $this->removeServicePackName->getValue();
    }

    /**
     * User level services.
     */
    public function setRemoveServiceName($removeServiceName = null)
    {
        $this->removeServiceName = ($removeServiceName InstanceOf UserService)
             ? $removeServiceName
             : new UserService($removeServiceName);
    }

    /**
     * User level services.
     */
    public function getRemoveServiceName()
    {
        return (!$this->removeServiceName) ?: $this->removeServiceName->getValue();
    }

    /**
     * Service Pack name.
     */
    public function setAssignServicePackName($assignServicePackName = null)
    {
        $this->assignServicePackName = ($assignServicePackName InstanceOf ServicePackName)
             ? $assignServicePackName
             : new ServicePackName($assignServicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getAssignServicePackName()
    {
        return (!$this->assignServicePackName) ?: $this->assignServicePackName->getValue();
    }

    /**
     * User level services.
     */
    public function setAssignServiceName($assignServiceName = null)
    {
        $this->assignServiceName = ($assignServiceName InstanceOf UserService)
             ? $assignServiceName
             : new UserService($assignServiceName);
    }

    /**
     * User level services.
     */
    public function getAssignServiceName()
    {
        return (!$this->assignServiceName) ?: $this->assignServiceName->getValue();
    }
}

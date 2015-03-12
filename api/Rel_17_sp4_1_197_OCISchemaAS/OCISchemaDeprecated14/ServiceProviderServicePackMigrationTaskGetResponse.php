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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetRequest.
 *         The groupTable column headings are: "Migrate", "Group Id", "Group Name", "User Count".
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetResponse14sp4
 */
class ServiceProviderServicePackMigrationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                  = 'ServiceProviderServicePackMigrationTaskGetResponse';
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
     * @return ServiceProviderServicePackMigrationTaskGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTaskName($taskName = null)
    {
        if (!$taskName) return $this;
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName
     */
    public function getTaskName()
    {
        return $this->taskName->getValue();
    }

    /**
     * 
     */
    public function setStartTimestamp(xs:dateTime $startTimestamp = null)
    {
        if (!$startTimestamp) return $this;
        $this->startTimestamp->setName('startTimestamp');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp->getValue();
    }

    /**
     * 
     */
    public function setMaxDurationHours($maxDurationHours = null)
    {
        if (!$maxDurationHours) return $this;
        $this->maxDurationHours = ($maxDurationHours InstanceOf ServicePackMigrationMaxDurationHours)
             ? $maxDurationHours
             : new ServicePackMigrationMaxDurationHours($maxDurationHours);
        $this->maxDurationHours->setName('maxDurationHours');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationMaxDurationHours
     */
    public function getMaxDurationHours()
    {
        return $this->maxDurationHours->getValue();
    }

    /**
     * 
     */
    public function setSendReportEmail($sendReportEmail = null)
    {
        if (!$sendReportEmail) return $this;
        $this->sendReportEmail = new PrimitiveType($sendReportEmail);
        $this->sendReportEmail->setName('sendReportEmail');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSendReportEmail()
    {
        return $this->sendReportEmail->getValue();
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        if (!$reportDeliveryEmailAddress) return $this;
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setAbortOnError($abortOnError = null)
    {
        if (!$abortOnError) return $this;
        $this->abortOnError = new PrimitiveType($abortOnError);
        $this->abortOnError->setName('abortOnError');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAbortOnError()
    {
        return $this->abortOnError->getValue();
    }

    /**
     * 
     */
    public function setAbortErrorThreshold($abortErrorThreshold = null)
    {
        if (!$abortErrorThreshold) return $this;
        $this->abortErrorThreshold = ($abortErrorThreshold InstanceOf ServicePackMigrationAbortErrorThreshold)
             ? $abortErrorThreshold
             : new ServicePackMigrationAbortErrorThreshold($abortErrorThreshold);
        $this->abortErrorThreshold->setName('abortErrorThreshold');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationAbortErrorThreshold
     */
    public function getAbortErrorThreshold()
    {
        return $this->abortErrorThreshold->getValue();
    }

    /**
     * 
     */
    public function setReportAllUsers($reportAllUsers = null)
    {
        if (!$reportAllUsers) return $this;
        $this->reportAllUsers = new PrimitiveType($reportAllUsers);
        $this->reportAllUsers->setName('reportAllUsers');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getReportAllUsers()
    {
        return $this->reportAllUsers->getValue();
    }

    /**
     * 
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity = null)
    {
        if (!$automaticallyIncrementServiceQuantity) return $this;
        $this->automaticallyIncrementServiceQuantity = new PrimitiveType($automaticallyIncrementServiceQuantity);
        $this->automaticallyIncrementServiceQuantity->setName('automaticallyIncrementServiceQuantity');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return $this->automaticallyIncrementServiceQuantity->getValue();
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
     * @return xs:int
     */
    public function getErrorCount()
    {
        return $this->errorCount->getValue();
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        if (!$status) return $this;
        $this->status = ($status InstanceOf ServicePackMigrationTaskStatus)
             ? $status
             : new ServicePackMigrationTaskStatus($status);
        $this->status->setName('status');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskStatus
     */
    public function getStatus()
    {
        return $this->status->getValue();
    }

    /**
     * 
     */
    public function setGroupsProcessed($groupsProcessed = null)
    {
        if (!$groupsProcessed) return $this;
        $this->groupsProcessed = new PrimitiveType($groupsProcessed);
        $this->groupsProcessed->setName('groupsProcessed');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getGroupsProcessed()
    {
        return $this->groupsProcessed->getValue();
    }

    /**
     * 
     */
    public function setGroupsTotal($groupsTotal = null)
    {
        if (!$groupsTotal) return $this;
        $this->groupsTotal = new PrimitiveType($groupsTotal);
        $this->groupsTotal->setName('groupsTotal');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getGroupsTotal()
    {
        return $this->groupsTotal->getValue();
    }

    /**
     * 
     */
    public function setUsersProcessed($usersProcessed = null)
    {
        if (!$usersProcessed) return $this;
        $this->usersProcessed = new PrimitiveType($usersProcessed);
        $this->usersProcessed->setName('usersProcessed');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getUsersProcessed()
    {
        return $this->usersProcessed->getValue();
    }

    /**
     * 
     */
    public function setUsersTotal($usersTotal = null)
    {
        if (!$usersTotal) return $this;
        $this->usersTotal = new PrimitiveType($usersTotal);
        $this->usersTotal->setName('usersTotal');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getUsersTotal()
    {
        return $this->usersTotal->getValue();
    }

    /**
     * 
     */
    public function setUserSelectionType($userSelectionType = null)
    {
        if (!$userSelectionType) return $this;
        $this->userSelectionType = ($userSelectionType InstanceOf ServicePackMigrationTaskUserSelectionType)
             ? $userSelectionType
             : new ServicePackMigrationTaskUserSelectionType($userSelectionType);
        $this->userSelectionType->setName('userSelectionType');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskUserSelectionType
     */
    public function getUserSelectionType()
    {
        return $this->userSelectionType->getValue();
    }

    /**
     * 
     */
    public function setReportFilePathName($reportFilePathName = null)
    {
        if (!$reportFilePathName) return $this;
        $this->reportFilePathName = ($reportFilePathName InstanceOf FileName)
             ? $reportFilePathName
             : new FileName($reportFilePathName);
        $this->reportFilePathName->setName('reportFilePathName');
        return $this;
    }

    /**
     * 
     * @return FileName
     */
    public function getReportFilePathName()
    {
        return $this->reportFilePathName->getValue();
    }

    /**
     * 
     */
    public function setGroupTable(TableType $groupTable = null)
    {
        if (!$groupTable) return $this;
        $this->groupTable = $groupTable;
        $this->groupTable->setName('groupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }

    /**
     * 
     */
    public function setUserSelectionServicePackName($userSelectionServicePackName = null)
    {
        if (!$userSelectionServicePackName) return $this;
        $this->userSelectionServicePackName = ($userSelectionServicePackName InstanceOf ServicePackName)
             ? $userSelectionServicePackName
             : new ServicePackName($userSelectionServicePackName);
        $this->userSelectionServicePackName->setName('userSelectionServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName
     */
    public function getUserSelectionServicePackName()
    {
        return $this->userSelectionServicePackName->getValue();
    }

    /**
     * 
     */
    public function setUserSelectionServiceName($userSelectionServiceName = null)
    {
        if (!$userSelectionServiceName) return $this;
        $this->userSelectionServiceName = ($userSelectionServiceName InstanceOf UserService)
             ? $userSelectionServiceName
             : new UserService($userSelectionServiceName);
        $this->userSelectionServiceName->setName('userSelectionServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService
     */
    public function getUserSelectionServiceName()
    {
        return $this->userSelectionServiceName->getValue();
    }

    /**
     * 
     */
    public function setRemoveServicePackName($removeServicePackName = null)
    {
        if (!$removeServicePackName) return $this;
        $this->removeServicePackName = ($removeServicePackName InstanceOf ServicePackName)
             ? $removeServicePackName
             : new ServicePackName($removeServicePackName);
        $this->removeServicePackName->setName('removeServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName
     */
    public function getRemoveServicePackName()
    {
        return $this->removeServicePackName->getValue();
    }

    /**
     * 
     */
    public function setRemoveServiceName($removeServiceName = null)
    {
        if (!$removeServiceName) return $this;
        $this->removeServiceName = ($removeServiceName InstanceOf UserService)
             ? $removeServiceName
             : new UserService($removeServiceName);
        $this->removeServiceName->setName('removeServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService
     */
    public function getRemoveServiceName()
    {
        return $this->removeServiceName->getValue();
    }

    /**
     * 
     */
    public function setAssignServicePackName($assignServicePackName = null)
    {
        if (!$assignServicePackName) return $this;
        $this->assignServicePackName = ($assignServicePackName InstanceOf ServicePackName)
             ? $assignServicePackName
             : new ServicePackName($assignServicePackName);
        $this->assignServicePackName->setName('assignServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName
     */
    public function getAssignServicePackName()
    {
        return $this->assignServicePackName->getValue();
    }

    /**
     * 
     */
    public function setAssignServiceName($assignServiceName = null)
    {
        if (!$assignServiceName) return $this;
        $this->assignServiceName = ($assignServiceName InstanceOf UserService)
             ? $assignServiceName
             : new UserService($assignServiceName);
        $this->assignServiceName->setName('assignServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService
     */
    public function getAssignServiceName()
    {
        return $this->assignServiceName->getValue();
    }
}

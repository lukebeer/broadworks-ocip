<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskUserSelectionType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationAbortErrorThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationMaxDurationHours;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskStatus;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetRequest.
 *         The groupTable column headings are: "Migrate", "Group Id", "Group Name", "User Count".
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetResponse14sp4
 */
class ServiceProviderServicePackMigrationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackMigrationTaskGetResponse';
    protected $taskName;
    protected $startTimestamp;
    protected $maxDurationHours;
    protected $sendReportEmail;
    protected $reportDeliveryEmailAddress;
    protected $abortOnError;
    protected $abortErrorThreshold;
    protected $reportAllUsers;
    protected $automaticallyIncrementServiceQuantity;
    protected $errorCount;
    protected $status;
    protected $groupsProcessed;
    protected $groupsTotal;
    protected $usersProcessed;
    protected $usersTotal;
    protected $userSelectionType;
    protected $reportFilePathName;
    protected $groupTable;
    protected $userSelectionServicePackName;
    protected $userSelectionServiceName;
    protected $removeServicePackName;
    protected $removeServiceName;
    protected $assignServicePackName;
    protected $assignServiceName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\ServiceProviderServicePackMigrationTaskGetResponse $response
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
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
        $this->taskName->setElementName('taskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName)
            ? $this->taskName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartTimestamp($startTimestamp = null)
    {
        $this->startTimestamp = new PrimitiveType($startTimestamp);
        $this->startTimestamp->setElementName('startTimestamp');
        return $this;
    }

    /**
     * 
     * @return string $startTimestamp
     */
    public function getStartTimestamp()
    {
        return ($this->startTimestamp)
            ? $this->startTimestamp->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxDurationHours($maxDurationHours = null)
    {
        $this->maxDurationHours = ($maxDurationHours InstanceOf ServicePackMigrationMaxDurationHours)
             ? $maxDurationHours
             : new ServicePackMigrationMaxDurationHours($maxDurationHours);
        $this->maxDurationHours->setElementName('maxDurationHours');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationMaxDurationHours $maxDurationHours
     */
    public function getMaxDurationHours()
    {
        return ($this->maxDurationHours)
            ? $this->maxDurationHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendReportEmail($sendReportEmail = null)
    {
        $this->sendReportEmail = new PrimitiveType($sendReportEmail);
        $this->sendReportEmail->setElementName('sendReportEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendReportEmail
     */
    public function getSendReportEmail()
    {
        return ($this->sendReportEmail)
            ? $this->sendReportEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setElementName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportDeliveryEmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return ($this->reportDeliveryEmailAddress)
            ? $this->reportDeliveryEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbortOnError($abortOnError = null)
    {
        $this->abortOnError = new PrimitiveType($abortOnError);
        $this->abortOnError->setElementName('abortOnError');
        return $this;
    }

    /**
     * 
     * @return boolean $abortOnError
     */
    public function getAbortOnError()
    {
        return ($this->abortOnError)
            ? $this->abortOnError->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbortErrorThreshold($abortErrorThreshold = null)
    {
        $this->abortErrorThreshold = ($abortErrorThreshold InstanceOf ServicePackMigrationAbortErrorThreshold)
             ? $abortErrorThreshold
             : new ServicePackMigrationAbortErrorThreshold($abortErrorThreshold);
        $this->abortErrorThreshold->setElementName('abortErrorThreshold');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationAbortErrorThreshold $abortErrorThreshold
     */
    public function getAbortErrorThreshold()
    {
        return ($this->abortErrorThreshold)
            ? $this->abortErrorThreshold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportAllUsers($reportAllUsers = null)
    {
        $this->reportAllUsers = new PrimitiveType($reportAllUsers);
        $this->reportAllUsers->setElementName('reportAllUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $reportAllUsers
     */
    public function getReportAllUsers()
    {
        return ($this->reportAllUsers)
            ? $this->reportAllUsers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity = null)
    {
        $this->automaticallyIncrementServiceQuantity = new PrimitiveType($automaticallyIncrementServiceQuantity);
        $this->automaticallyIncrementServiceQuantity->setElementName('automaticallyIncrementServiceQuantity');
        return $this;
    }

    /**
     * 
     * @return boolean $automaticallyIncrementServiceQuantity
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return ($this->automaticallyIncrementServiceQuantity)
            ? $this->automaticallyIncrementServiceQuantity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setErrorCount($errorCount = null)
    {
        $this->errorCount = new PrimitiveType($errorCount);
        $this->errorCount->setElementName('errorCount');
        return $this;
    }

    /**
     * 
     * @return int $errorCount
     */
    public function getErrorCount()
    {
        return ($this->errorCount)
            ? $this->errorCount->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf ServicePackMigrationTaskStatus)
             ? $status
             : new ServicePackMigrationTaskStatus($status);
        $this->status->setElementName('status');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskStatus $status
     */
    public function getStatus()
    {
        return ($this->status)
            ? $this->status->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupsProcessed($groupsProcessed = null)
    {
        $this->groupsProcessed = new PrimitiveType($groupsProcessed);
        $this->groupsProcessed->setElementName('groupsProcessed');
        return $this;
    }

    /**
     * 
     * @return int $groupsProcessed
     */
    public function getGroupsProcessed()
    {
        return ($this->groupsProcessed)
            ? $this->groupsProcessed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupsTotal($groupsTotal = null)
    {
        $this->groupsTotal = new PrimitiveType($groupsTotal);
        $this->groupsTotal->setElementName('groupsTotal');
        return $this;
    }

    /**
     * 
     * @return int $groupsTotal
     */
    public function getGroupsTotal()
    {
        return ($this->groupsTotal)
            ? $this->groupsTotal->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUsersProcessed($usersProcessed = null)
    {
        $this->usersProcessed = new PrimitiveType($usersProcessed);
        $this->usersProcessed->setElementName('usersProcessed');
        return $this;
    }

    /**
     * 
     * @return int $usersProcessed
     */
    public function getUsersProcessed()
    {
        return ($this->usersProcessed)
            ? $this->usersProcessed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUsersTotal($usersTotal = null)
    {
        $this->usersTotal = new PrimitiveType($usersTotal);
        $this->usersTotal->setElementName('usersTotal');
        return $this;
    }

    /**
     * 
     * @return int $usersTotal
     */
    public function getUsersTotal()
    {
        return ($this->usersTotal)
            ? $this->usersTotal->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserSelectionType($userSelectionType = null)
    {
        $this->userSelectionType = ($userSelectionType InstanceOf ServicePackMigrationTaskUserSelectionType)
             ? $userSelectionType
             : new ServicePackMigrationTaskUserSelectionType($userSelectionType);
        $this->userSelectionType->setElementName('userSelectionType');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskUserSelectionType $userSelectionType
     */
    public function getUserSelectionType()
    {
        return ($this->userSelectionType)
            ? $this->userSelectionType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportFilePathName($reportFilePathName = null)
    {
        $this->reportFilePathName = ($reportFilePathName InstanceOf FileName)
             ? $reportFilePathName
             : new FileName($reportFilePathName);
        $this->reportFilePathName->setElementName('reportFilePathName');
        return $this;
    }

    /**
     * 
     * @return FileName $reportFilePathName
     */
    public function getReportFilePathName()
    {
        return ($this->reportFilePathName)
            ? $this->reportFilePathName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupTable(TableType $groupTable = null)
    {
        $this->groupTable = $groupTable;
        $this->groupTable->setElementName('groupTable');
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
        $this->userSelectionServicePackName = ($userSelectionServicePackName InstanceOf ServicePackName)
             ? $userSelectionServicePackName
             : new ServicePackName($userSelectionServicePackName);
        $this->userSelectionServicePackName->setElementName('userSelectionServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $userSelectionServicePackName
     */
    public function getUserSelectionServicePackName()
    {
        return ($this->userSelectionServicePackName)
            ? $this->userSelectionServicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserSelectionServiceName($userSelectionServiceName = null)
    {
        $this->userSelectionServiceName = ($userSelectionServiceName InstanceOf UserService)
             ? $userSelectionServiceName
             : new UserService($userSelectionServiceName);
        $this->userSelectionServiceName->setElementName('userSelectionServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $userSelectionServiceName
     */
    public function getUserSelectionServiceName()
    {
        return ($this->userSelectionServiceName)
            ? $this->userSelectionServiceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoveServicePackName($removeServicePackName = null)
    {
        $this->removeServicePackName = ($removeServicePackName InstanceOf ServicePackName)
             ? $removeServicePackName
             : new ServicePackName($removeServicePackName);
        $this->removeServicePackName->setElementName('removeServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $removeServicePackName
     */
    public function getRemoveServicePackName()
    {
        return ($this->removeServicePackName)
            ? $this->removeServicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoveServiceName($removeServiceName = null)
    {
        $this->removeServiceName = ($removeServiceName InstanceOf UserService)
             ? $removeServiceName
             : new UserService($removeServiceName);
        $this->removeServiceName->setElementName('removeServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $removeServiceName
     */
    public function getRemoveServiceName()
    {
        return ($this->removeServiceName)
            ? $this->removeServiceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAssignServicePackName($assignServicePackName = null)
    {
        $this->assignServicePackName = ($assignServicePackName InstanceOf ServicePackName)
             ? $assignServicePackName
             : new ServicePackName($assignServicePackName);
        $this->assignServicePackName->setElementName('assignServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $assignServicePackName
     */
    public function getAssignServicePackName()
    {
        return ($this->assignServicePackName)
            ? $this->assignServicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAssignServiceName($assignServiceName = null)
    {
        $this->assignServiceName = ($assignServiceName InstanceOf UserService)
             ? $assignServiceName
             : new UserService($assignServiceName);
        $this->assignServiceName->setElementName('assignServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $assignServiceName
     */
    public function getAssignServiceName()
    {
        return ($this->assignServiceName)
            ? $this->assignServiceName->getElementValue()
            : null;
    }
}

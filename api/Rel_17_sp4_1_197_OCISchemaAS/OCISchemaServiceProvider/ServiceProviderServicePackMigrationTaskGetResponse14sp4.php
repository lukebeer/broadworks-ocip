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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetRequest14sp4.
 *         The groupTable column headings are: "Group Id", "Group Name", "User Count".
 */
class ServiceProviderServicePackMigrationTaskGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderServicePackMigrationTaskGetResponse14sp4';
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
    protected $userSelectionServicePackName;
    protected $userSelectionServiceName;
    protected $removeServicePackName;
    protected $removeServiceName;
    protected $assignServicePackName;
    protected $assignServiceName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackMigrationTaskGetResponse14sp4 $response
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
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName) ? $this->taskName->getValue() : null;
    }

    /**
     * 
     */
    public function setStartTimestamp(xs:dateTime $startTimestamp = null)
    {
        $this->startTimestamp->setName('startTimestamp');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $startTimestamp
     */
    public function getStartTimestamp()
    {
        return ($this->startTimestamp) ? $this->startTimestamp->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxDurationHours($maxDurationHours = null)
    {
        $this->maxDurationHours = ($maxDurationHours InstanceOf ServicePackMigrationMaxDurationHours)
             ? $maxDurationHours
             : new ServicePackMigrationMaxDurationHours($maxDurationHours);
        $this->maxDurationHours->setName('maxDurationHours');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationMaxDurationHours $maxDurationHours
     */
    public function getMaxDurationHours()
    {
        return ($this->maxDurationHours) ? $this->maxDurationHours->getValue() : null;
    }

    /**
     * 
     */
    public function setSendReportEmail($sendReportEmail = null)
    {
        $this->sendReportEmail = new PrimitiveType($sendReportEmail);
        $this->sendReportEmail->setName('sendReportEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendReportEmail
     */
    public function getSendReportEmail()
    {
        return ($this->sendReportEmail) ? $this->sendReportEmail->getValue() : null;
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportDeliveryEmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return ($this->reportDeliveryEmailAddress) ? $this->reportDeliveryEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setAbortOnError($abortOnError = null)
    {
        $this->abortOnError = new PrimitiveType($abortOnError);
        $this->abortOnError->setName('abortOnError');
        return $this;
    }

    /**
     * 
     * @return boolean $abortOnError
     */
    public function getAbortOnError()
    {
        return ($this->abortOnError) ? $this->abortOnError->getValue() : null;
    }

    /**
     * 
     */
    public function setAbortErrorThreshold($abortErrorThreshold = null)
    {
        $this->abortErrorThreshold = ($abortErrorThreshold InstanceOf ServicePackMigrationAbortErrorThreshold)
             ? $abortErrorThreshold
             : new ServicePackMigrationAbortErrorThreshold($abortErrorThreshold);
        $this->abortErrorThreshold->setName('abortErrorThreshold');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationAbortErrorThreshold $abortErrorThreshold
     */
    public function getAbortErrorThreshold()
    {
        return ($this->abortErrorThreshold) ? $this->abortErrorThreshold->getValue() : null;
    }

    /**
     * 
     */
    public function setReportAllUsers($reportAllUsers = null)
    {
        $this->reportAllUsers = new PrimitiveType($reportAllUsers);
        $this->reportAllUsers->setName('reportAllUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $reportAllUsers
     */
    public function getReportAllUsers()
    {
        return ($this->reportAllUsers) ? $this->reportAllUsers->getValue() : null;
    }

    /**
     * 
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity = null)
    {
        $this->automaticallyIncrementServiceQuantity = new PrimitiveType($automaticallyIncrementServiceQuantity);
        $this->automaticallyIncrementServiceQuantity->setName('automaticallyIncrementServiceQuantity');
        return $this;
    }

    /**
     * 
     * @return boolean $automaticallyIncrementServiceQuantity
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return ($this->automaticallyIncrementServiceQuantity) ? $this->automaticallyIncrementServiceQuantity->getValue() : null;
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
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf ServicePackMigrationTaskStatus)
             ? $status
             : new ServicePackMigrationTaskStatus($status);
        $this->status->setName('status');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskStatus $status
     */
    public function getStatus()
    {
        return ($this->status) ? $this->status->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupsProcessed($groupsProcessed = null)
    {
        $this->groupsProcessed = new PrimitiveType($groupsProcessed);
        $this->groupsProcessed->setName('groupsProcessed');
        return $this;
    }

    /**
     * 
     * @return int $groupsProcessed
     */
    public function getGroupsProcessed()
    {
        return ($this->groupsProcessed) ? $this->groupsProcessed->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupsTotal($groupsTotal = null)
    {
        $this->groupsTotal = new PrimitiveType($groupsTotal);
        $this->groupsTotal->setName('groupsTotal');
        return $this;
    }

    /**
     * 
     * @return int $groupsTotal
     */
    public function getGroupsTotal()
    {
        return ($this->groupsTotal) ? $this->groupsTotal->getValue() : null;
    }

    /**
     * 
     */
    public function setUsersProcessed($usersProcessed = null)
    {
        $this->usersProcessed = new PrimitiveType($usersProcessed);
        $this->usersProcessed->setName('usersProcessed');
        return $this;
    }

    /**
     * 
     * @return int $usersProcessed
     */
    public function getUsersProcessed()
    {
        return ($this->usersProcessed) ? $this->usersProcessed->getValue() : null;
    }

    /**
     * 
     */
    public function setUsersTotal($usersTotal = null)
    {
        $this->usersTotal = new PrimitiveType($usersTotal);
        $this->usersTotal->setName('usersTotal');
        return $this;
    }

    /**
     * 
     * @return int $usersTotal
     */
    public function getUsersTotal()
    {
        return ($this->usersTotal) ? $this->usersTotal->getValue() : null;
    }

    /**
     * 
     */
    public function setUserSelectionType($userSelectionType = null)
    {
        $this->userSelectionType = ($userSelectionType InstanceOf ServicePackMigrationTaskUserSelectionType)
             ? $userSelectionType
             : new ServicePackMigrationTaskUserSelectionType($userSelectionType);
        $this->userSelectionType->setName('userSelectionType');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskUserSelectionType $userSelectionType
     */
    public function getUserSelectionType()
    {
        return ($this->userSelectionType) ? $this->userSelectionType->getValue() : null;
    }

    /**
     * 
     */
    public function setReportFilePathName($reportFilePathName = null)
    {
        $this->reportFilePathName = ($reportFilePathName InstanceOf FileName)
             ? $reportFilePathName
             : new FileName($reportFilePathName);
        $this->reportFilePathName->setName('reportFilePathName');
        return $this;
    }

    /**
     * 
     * @return FileName $reportFilePathName
     */
    public function getReportFilePathName()
    {
        return ($this->reportFilePathName) ? $this->reportFilePathName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserSelectionServicePackName($userSelectionServicePackName = null)
    {
        $this->userSelectionServicePackName = ($userSelectionServicePackName InstanceOf ServicePackName)
             ? $userSelectionServicePackName
             : new ServicePackName($userSelectionServicePackName);
        $this->userSelectionServicePackName->setName('userSelectionServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $userSelectionServicePackName
     */
    public function getUserSelectionServicePackName()
    {
        return ($this->userSelectionServicePackName) ? $this->userSelectionServicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserSelectionServiceName($userSelectionServiceName = null)
    {
        $this->userSelectionServiceName = ($userSelectionServiceName InstanceOf UserService)
             ? $userSelectionServiceName
             : new UserService($userSelectionServiceName);
        $this->userSelectionServiceName->setName('userSelectionServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $userSelectionServiceName
     */
    public function getUserSelectionServiceName()
    {
        return ($this->userSelectionServiceName) ? $this->userSelectionServiceName->getValue() : null;
    }

    /**
     * 
     */
    public function setRemoveServicePackName($removeServicePackName = null)
    {
        $this->removeServicePackName = ($removeServicePackName InstanceOf ServicePackName)
             ? $removeServicePackName
             : new ServicePackName($removeServicePackName);
        $this->removeServicePackName->setName('removeServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $removeServicePackName
     */
    public function getRemoveServicePackName()
    {
        return ($this->removeServicePackName) ? $this->removeServicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setRemoveServiceName($removeServiceName = null)
    {
        $this->removeServiceName = ($removeServiceName InstanceOf UserService)
             ? $removeServiceName
             : new UserService($removeServiceName);
        $this->removeServiceName->setName('removeServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $removeServiceName
     */
    public function getRemoveServiceName()
    {
        return ($this->removeServiceName) ? $this->removeServiceName->getValue() : null;
    }

    /**
     * 
     */
    public function setAssignServicePackName($assignServicePackName = null)
    {
        $this->assignServicePackName = ($assignServicePackName InstanceOf ServicePackName)
             ? $assignServicePackName
             : new ServicePackName($assignServicePackName);
        $this->assignServicePackName->setName('assignServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $assignServicePackName
     */
    public function getAssignServicePackName()
    {
        return ($this->assignServicePackName) ? $this->assignServicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setAssignServiceName($assignServiceName = null)
    {
        $this->assignServiceName = ($assignServiceName InstanceOf UserService)
             ? $assignServiceName
             : new UserService($assignServiceName);
        $this->assignServiceName->setName('assignServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $assignServiceName
     */
    public function getAssignServiceName()
    {
        return ($this->assignServiceName) ? $this->assignServiceName->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationAbortErrorThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationMaxDurationHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the properties of a specified service pack migration task.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $serviceProviderId                      = null;
    protected $taskName                               = null;
    protected $newTaskName                            = null;
    protected $startTimestamp                         = null;
    protected $maxDurationHours                       = null;
    protected $sendReportEmail                        = null;
    protected $reportDeliveryEmailAddress             = null;
    protected $abortOnError                           = null;
    protected $abortErrorThreshold                    = null;
    protected $reportAllUsers                         = null;
    protected $automaticallyIncrementServiceQuantity  = null;

    public function __construct(
         $serviceProviderId,
         $taskName,
         $newTaskName = null,
         $startTimestamp = null,
         $maxDurationHours = null,
         $sendReportEmail = null,
         $reportDeliveryEmailAddress = null,
         $abortOnError = null,
         $abortErrorThreshold = null,
         $reportAllUsers = null,
         $automaticallyIncrementServiceQuantity = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setTaskName($taskName);
        $this->setNewTaskName($newTaskName);
        $this->setStartTimestamp($startTimestamp);
        $this->setMaxDurationHours($maxDurationHours);
        $this->setSendReportEmail($sendReportEmail);
        $this->setReportDeliveryEmailAddress($reportDeliveryEmailAddress);
        $this->setAbortOnError($abortOnError);
        $this->setAbortErrorThreshold($abortErrorThreshold);
        $this->setReportAllUsers($reportAllUsers);
        $this->setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

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

    public function setNewTaskName($newTaskName = null)
    {
        $this->newTaskName = ($newTaskName InstanceOf ServicePackMigrationTaskName)
             ? $newTaskName
             : new ServicePackMigrationTaskName($newTaskName);
    }

    public function getNewTaskName()
    {
        return (!$this->newTaskName) ?: $this->newTaskName->value();
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
}

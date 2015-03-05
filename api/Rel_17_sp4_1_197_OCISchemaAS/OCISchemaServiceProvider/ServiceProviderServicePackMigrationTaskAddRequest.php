<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationMaxDurationHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationAbortErrorThreshold;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the properties of a specified service pack migration task.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $taskName,
             $startTimestamp,
             $maxDurationHours,
             $sendReportEmail,
             $reportDeliveryEmailAddress=null,
             $abortOnError,
             $abortErrorThreshold=null,
             $reportAllUsers,
             $automaticallyIncrementServiceQuantity
    ) {
        $this->serviceProviderId                     = new ServiceProviderId($serviceProviderId);
        $this->taskName                              = $taskName;
        $this->startTimestamp                        = $startTimestamp;
        $this->maxDurationHours                      = $maxDurationHours;
        $this->sendReportEmail                       = $sendReportEmail;
        $this->reportDeliveryEmailAddress            = new EmailAddress($reportDeliveryEmailAddress);
        $this->abortOnError                          = $abortOnError;
        $this->abortErrorThreshold                   = $abortErrorThreshold;
        $this->reportAllUsers                        = $reportAllUsers;
        $this->automaticallyIncrementServiceQuantity = $automaticallyIncrementServiceQuantity;
        $this->args                                  = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
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
}

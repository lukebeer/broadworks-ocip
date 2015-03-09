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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackMigrationTaskAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the properties of a specified service pack migration task.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $serviceProviderId                     = null;
    protected $taskName                              = null;
    protected $startTimestamp                        = null;
    protected $maxDurationHours                      = null;
    protected $sendReportEmail                       = null;
    protected $reportDeliveryEmailAddress            = null;
    protected $abortOnError                          = null;
    protected $abortErrorThreshold                   = null;
    protected $reportAllUsers                        = null;
    protected $automaticallyIncrementServiceQuantity = null;

    public function __construct(
         $serviceProviderId,
         $taskName,
         $startTimestamp,
         $maxDurationHours,
         $sendReportEmail,
         $reportDeliveryEmailAddress = null,
         $abortOnError,
         $abortErrorThreshold = null,
         $reportAllUsers,
         $automaticallyIncrementServiceQuantity
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setTaskName($taskName);
        $this->setStartTimestamp($startTimestamp);
        $this->setMaxDurationHours($maxDurationHours);
        $this->setSendReportEmail($sendReportEmail);
        $this->setReportDeliveryEmailAddress($reportDeliveryEmailAddress);
        $this->setAbortOnError($abortOnError);
        $this->setAbortErrorThreshold($abortErrorThreshold);
        $this->setReportAllUsers($reportAllUsers);
        $this->setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity);
    }

    /**
     * @return ServiceProviderServicePackMigrationTaskAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

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
        $this->startTimestamp =  $startTimestamp;
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
        return (!$this->sendReportEmail) ?: $this->sendReportEmail;
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
        return (!$this->abortOnError) ?: $this->abortOnError;
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
        return (!$this->reportAllUsers) ?: $this->reportAllUsers;
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
        return (!$this->automaticallyIncrementServiceQuantity) ?: $this->automaticallyIncrementServiceQuantity;
    }
}

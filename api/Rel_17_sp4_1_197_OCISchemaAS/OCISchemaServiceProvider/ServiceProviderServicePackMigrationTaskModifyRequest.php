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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the properties of a specified service pack migration task.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderServicePackMigrationTaskModifyRequest';
    protected $serviceProviderId;
    protected $taskName;
    protected $newTaskName;
    protected $startTimestamp;
    protected $maxDurationHours;
    protected $sendReportEmail;
    protected $reportDeliveryEmailAddress;
    protected $abortOnError;
    protected $abortErrorThreshold;
    protected $reportAllUsers;
    protected $automaticallyIncrementServiceQuantity;

    public function __construct(
         $serviceProviderId = '',
         $taskName = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
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
    public function setNewTaskName($newTaskName = null)
    {
        $this->newTaskName = ($newTaskName InstanceOf ServicePackMigrationTaskName)
             ? $newTaskName
             : new ServicePackMigrationTaskName($newTaskName);
        $this->newTaskName->setName('newTaskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName $newTaskName
     */
    public function getNewTaskName()
    {
        return ($this->newTaskName) ? $this->newTaskName->getValue() : null;
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
}

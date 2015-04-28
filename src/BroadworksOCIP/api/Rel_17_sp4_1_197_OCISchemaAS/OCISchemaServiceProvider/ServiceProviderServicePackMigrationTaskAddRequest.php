<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationAbortErrorThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationMaxDurationHours;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the properties of a specified service pack migration task.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackMigrationTaskAddRequest';
    protected $serviceProviderId;
    protected $taskName;
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
         $startTimestamp = '',
         $maxDurationHours = '',
         $sendReportEmail = '',
         $reportDeliveryEmailAddress = null,
         $abortOnError = '',
         $abortErrorThreshold = null,
         $reportAllUsers = '',
         $automaticallyIncrementServiceQuantity = ''
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
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
}

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
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                                  = 'ServiceProviderServicePackMigrationTaskAddRequest';
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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
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
     * @return ServicePackMigrationTaskName $taskName
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
     * @return xs:dateTime $startTimestamp
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
     * @return ServicePackMigrationMaxDurationHours $maxDurationHours
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
     * @return boolean $sendReportEmail
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
     * @return EmailAddress $reportDeliveryEmailAddress
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
     * @return boolean $abortOnError
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
     * @return ServicePackMigrationAbortErrorThreshold $abortErrorThreshold
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
     * @return boolean $reportAllUsers
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
     * @return boolean $automaticallyIncrementServiceQuantity
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return $this->automaticallyIncrementServiceQuantity->getValue();
    }
}

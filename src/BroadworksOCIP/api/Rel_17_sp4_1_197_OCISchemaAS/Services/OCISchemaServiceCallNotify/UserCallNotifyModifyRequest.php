<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallNotify; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's call notify service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallNotifyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallNotifyModifyRequest';
    protected $userId;
    protected $callNotifyEmailAddress;
    protected $criteriaActivation;

    public function __construct(
         $userId = '',
         $callNotifyEmailAddress = null,
         $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setCallNotifyEmailAddress($callNotifyEmailAddress);
        $this->setCriteriaActivation($criteriaActivation);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress = null)
    {
        $this->callNotifyEmailAddress = ($callNotifyEmailAddress InstanceOf EmailAddress)
             ? $callNotifyEmailAddress
             : new EmailAddress($callNotifyEmailAddress);
        $this->callNotifyEmailAddress->setElementName('callNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $callNotifyEmailAddress
     */
    public function getCallNotifyEmailAddress()
    {
        return ($this->callNotifyEmailAddress)
            ? $this->callNotifyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        $this->criteriaActivation = ($criteriaActivation InstanceOf CriteriaActivation)
             ? $criteriaActivation
             : new CriteriaActivation($criteriaActivation);
        $this->criteriaActivation->setElementName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation $criteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}

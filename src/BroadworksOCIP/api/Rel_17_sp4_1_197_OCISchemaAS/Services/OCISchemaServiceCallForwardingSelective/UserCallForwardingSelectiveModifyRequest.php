<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's call forwarding selective service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallForwardingSelectiveModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallForwardingSelectiveModifyRequest';
    protected $userId;
    protected $isActive;
    protected $defaultForwardToPhoneNumber;
    protected $playRingReminder;
    protected $criteriaActivation;

    public function __construct(
         $userId = '',
         $isActive = null,
         $defaultForwardToPhoneNumber = null,
         $playRingReminder = null,
         $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber);
        $this->setPlayRingReminder($playRingReminder);
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
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber = null)
    {
        $this->defaultForwardToPhoneNumber = ($defaultForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $defaultForwardToPhoneNumber
             : new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
        $this->defaultForwardToPhoneNumber->setElementName('defaultForwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $defaultForwardToPhoneNumber
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return ($this->defaultForwardToPhoneNumber)
            ? $this->defaultForwardToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayRingReminder($playRingReminder = null)
    {
        $this->playRingReminder = new PrimitiveType($playRingReminder);
        $this->playRingReminder->setElementName('playRingReminder');
        return $this;
    }

    /**
     * 
     * @return boolean $playRingReminder
     */
    public function getPlayRingReminder()
    {
        return ($this->playRingReminder)
            ? $this->playRingReminder->getElementValue()
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

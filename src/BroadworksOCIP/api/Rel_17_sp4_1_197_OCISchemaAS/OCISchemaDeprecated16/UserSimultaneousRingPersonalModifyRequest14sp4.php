<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's simultaneous ring personal service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingPersonalModifyRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSimultaneousRingPersonalModifyRequest14sp4';
    protected $userId;
    protected $isActive;
    protected $incomingCalls;

    public function __construct(
         $userId = '',
         $isActive = null,
         $incomingCalls = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setIncomingCalls($incomingCalls);
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
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
        $this->incomingCalls->setElementName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingSelection $incomingCalls
     */
    public function getIncomingCalls()
    {
        return ($this->incomingCalls)
            ? $this->incomingCalls->getElementValue()
            : null;
    }
}

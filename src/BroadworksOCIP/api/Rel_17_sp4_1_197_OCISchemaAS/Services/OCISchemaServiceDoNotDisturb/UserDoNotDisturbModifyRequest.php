<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDoNotDisturb; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Do Not Disturb.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserDoNotDisturbModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDoNotDisturbModifyRequest';
    protected $userId;
    protected $isActive;
    protected $ringSplash;

    public function __construct(
         $userId = '',
         $isActive = null,
         $ringSplash = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setRingSplash($ringSplash);
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
    public function setRingSplash($ringSplash = null)
    {
        $this->ringSplash = new PrimitiveType($ringSplash);
        $this->ringSplash->setElementName('ringSplash');
        return $this;
    }

    /**
     * 
     * @return boolean $ringSplash
     */
    public function getRingSplash()
    {
        return ($this->ringSplash)
            ? $this->ringSplash->getElementValue()
            : null;
    }
}

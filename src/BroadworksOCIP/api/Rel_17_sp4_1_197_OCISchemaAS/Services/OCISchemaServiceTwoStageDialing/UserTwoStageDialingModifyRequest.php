<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Two Stage Dialing.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class UserTwoStageDialingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserTwoStageDialingModifyRequest';
    protected $userId;
    protected $isActive;
    protected $allowActivationWithUserAddresses;

    public function __construct(
         $userId = '',
         $isActive = null,
         $allowActivationWithUserAddresses = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAllowActivationWithUserAddresses($allowActivationWithUserAddresses);
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
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses = null)
    {
        $this->allowActivationWithUserAddresses = new PrimitiveType($allowActivationWithUserAddresses);
        $this->allowActivationWithUserAddresses->setElementName('allowActivationWithUserAddresses');
        return $this;
    }

    /**
     * 
     * @return boolean $allowActivationWithUserAddresses
     */
    public function getAllowActivationWithUserAddresses()
    {
        return ($this->allowActivationWithUserAddresses)
            ? $this->allowActivationWithUserAddresses->getElementValue()
            : null;
    }
}

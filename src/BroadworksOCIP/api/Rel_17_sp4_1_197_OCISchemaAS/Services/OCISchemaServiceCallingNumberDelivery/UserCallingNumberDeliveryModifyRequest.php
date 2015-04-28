<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNumberDelivery; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Calling Number Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallingNumberDeliveryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallingNumberDeliveryModifyRequest';
    protected $userId;
    protected $isActiveForExternalCalls;
    protected $isActiveForInternalCalls;

    public function __construct(
         $userId = '',
         $isActiveForExternalCalls = null,
         $isActiveForInternalCalls = null
    ) {
        $this->setUserId($userId);
        $this->setIsActiveForExternalCalls($isActiveForExternalCalls);
        $this->setIsActiveForInternalCalls($isActiveForInternalCalls);
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
    public function setIsActiveForExternalCalls($isActiveForExternalCalls = null)
    {
        $this->isActiveForExternalCalls = new PrimitiveType($isActiveForExternalCalls);
        $this->isActiveForExternalCalls->setElementName('isActiveForExternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveForExternalCalls
     */
    public function getIsActiveForExternalCalls()
    {
        return ($this->isActiveForExternalCalls)
            ? $this->isActiveForExternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls = null)
    {
        $this->isActiveForInternalCalls = new PrimitiveType($isActiveForInternalCalls);
        $this->isActiveForInternalCalls->setElementName('isActiveForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveForInternalCalls
     */
    public function getIsActiveForInternalCalls()
    {
        return ($this->isActiveForInternalCalls)
            ? $this->isActiveForInternalCalls->getElementValue()
            : null;
    }
}

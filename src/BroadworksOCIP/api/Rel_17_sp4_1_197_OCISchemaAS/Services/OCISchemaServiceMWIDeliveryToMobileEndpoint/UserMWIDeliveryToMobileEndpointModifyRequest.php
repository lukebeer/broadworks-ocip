<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMWIDeliveryToMobileEndpoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the user level data associated with MWI Delivery to Mobile Endpoint service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserMWIDeliveryToMobileEndpointModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMWIDeliveryToMobileEndpointModifyRequest';
    protected $userId;
    protected $isActive;
    protected $mobilePhoneNumber;

    public function __construct(
         $userId = '',
         $isActive = null,
         $mobilePhoneNumber = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setMobilePhoneNumber($mobilePhoneNumber);
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
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setElementName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $mobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
        return ($this->mobilePhoneNumber)
            ? $this->mobilePhoneNumber->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Advice of Charge.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAdviceOfChargeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAdviceOfChargeModifyRequest';
    protected $userId;
    protected $isActive;
    protected $aocType;

    public function __construct(
         $userId = '',
         $isActive = null,
         $aocType = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAocType($aocType);
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
    public function setAocType($aocType = null)
    {
        $this->aocType = ($aocType InstanceOf AdviceOfChargeType)
             ? $aocType
             : new AdviceOfChargeType($aocType);
        $this->aocType->setElementName('aocType');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeType $aocType
     */
    public function getAocType()
    {
        return ($this->aocType)
            ? $this->aocType->getElementValue()
            : null;
    }
}

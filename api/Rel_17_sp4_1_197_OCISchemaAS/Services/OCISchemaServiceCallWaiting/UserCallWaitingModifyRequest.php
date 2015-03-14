<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Waiting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 */
class UserCallWaitingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'UserCallWaitingModifyRequest';
    protected $userId                       = null;
    protected $isActive                     = null;
    protected $disableCallingLineIdDelivery = null;

    public function __construct(
         $userId,
         $isActive = null,
         $disableCallingLineIdDelivery = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setDisableCallingLineIdDelivery($disableCallingLineIdDelivery);
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setDisableCallingLineIdDelivery($disableCallingLineIdDelivery = null)
    {
        if (!$disableCallingLineIdDelivery) return $this;
        $this->disableCallingLineIdDelivery = new PrimitiveType($disableCallingLineIdDelivery);
        $this->disableCallingLineIdDelivery->setName('disableCallingLineIdDelivery');
        return $this;
    }

    /**
     * 
     * @return boolean $disableCallingLineIdDelivery
     */
    public function getDisableCallingLineIdDelivery()
    {
        return $this->disableCallingLineIdDelivery->getValue();
    }
}

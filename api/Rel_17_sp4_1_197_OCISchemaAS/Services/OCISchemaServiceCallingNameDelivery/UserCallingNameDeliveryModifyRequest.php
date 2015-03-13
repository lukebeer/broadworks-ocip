<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameDelivery; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Calling Name Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallingNameDeliveryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'UserCallingNameDeliveryModifyRequest';
    protected $userId                   = null;
    protected $isActiveForExternalCalls = null;
    protected $isActiveForInternalCalls = null;

    public function __construct(
         $userId,
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
    public function setIsActiveForExternalCalls($isActiveForExternalCalls = null)
    {
        if (!$isActiveForExternalCalls) return $this;
        $this->isActiveForExternalCalls = new PrimitiveType($isActiveForExternalCalls);
        $this->isActiveForExternalCalls->setName('isActiveForExternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveForExternalCalls
     */
    public function getIsActiveForExternalCalls()
    {
        return $this->isActiveForExternalCalls->getValue();
    }

    /**
     * 
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls = null)
    {
        if (!$isActiveForInternalCalls) return $this;
        $this->isActiveForInternalCalls = new PrimitiveType($isActiveForInternalCalls);
        $this->isActiveForInternalCalls->setName('isActiveForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveForInternalCalls
     */
    public function getIsActiveForInternalCalls()
    {
        return $this->isActiveForInternalCalls->getValue();
    }
}

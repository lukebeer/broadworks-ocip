<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingNumberDelivery; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingNumberDelivery\UserCallingNumberDeliveryGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallingNumberDeliveryGetRequest.
 */
class UserCallingNumberDeliveryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $isActiveForExternalCalls = null;
    protected $isActiveForInternalCalls = null;

    /**
     * @return UserCallingNumberDeliveryGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActiveForExternalCalls($isActiveForExternalCalls = null)
    {
        $this->isActiveForExternalCalls = (boolean) $isActiveForExternalCalls;
    }

    /**
     * 
     */
    public function getIsActiveForExternalCalls()
    {
        return (!$this->isActiveForExternalCalls) ?: $this->isActiveForExternalCalls;
    }

    /**
     * 
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls = null)
    {
        $this->isActiveForInternalCalls = (boolean) $isActiveForInternalCalls;
    }

    /**
     * 
     */
    public function getIsActiveForInternalCalls()
    {
        return (!$this->isActiveForInternalCalls) ?: $this->isActiveForInternalCalls;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameDelivery; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallingNameDeliveryGetRequest.
 */
class UserCallingNameDeliveryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallingNameDeliveryGetResponse';
    protected $isActiveForExternalCalls;
    protected $isActiveForInternalCalls;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameDelivery\UserCallingNameDeliveryGetResponse $response
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
        return ($this->isActiveForExternalCalls) ? $this->isActiveForExternalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls = null)
    {
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
        return ($this->isActiveForInternalCalls) ? $this->isActiveForInternalCalls->getValue() : null;
    }
}

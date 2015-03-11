<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNumberDelivery; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallingNumberDeliveryGetRequest.
 */
class UserCallingNumberDeliveryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'UserCallingNumberDeliveryGetResponse';
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
        if (!$isActiveForExternalCalls) return $this;
        $this->isActiveForExternalCalls = new PrimitiveType($isActiveForExternalCalls);
        $this->isActiveForExternalCalls->setName('isActiveForExternalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getIsActiveForInternalCalls()
    {
        return $this->isActiveForInternalCalls->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting\UserCallWaitingGetResponse17sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallWaitingGetRequest17sp4.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 */
class UserCallWaitingGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $isActive                     = null;
    protected $disableCallingLineIdDelivery = null;

    /**
     * @return UserCallWaitingGetResponse17sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * 
     */
    public function setDisableCallingLineIdDelivery($disableCallingLineIdDelivery = null)
    {
        $this->disableCallingLineIdDelivery = (boolean) $disableCallingLineIdDelivery;
    }

    /**
     * 
     */
    public function getDisableCallingLineIdDelivery()
    {
        return (!$this->disableCallingLineIdDelivery) ?: $this->disableCallingLineIdDelivery;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                         = 'UserCallWaitingGetResponse17sp4';
    protected $isActive                     = null;
    protected $disableCallingLineIdDelivery = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting\UserCallWaitingGetResponse17sp4 $response
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

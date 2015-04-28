<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallWaitingGetRequest17sp4.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 */
class UserCallWaitingGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallWaitingGetResponse17sp4';
    protected $isActive;
    protected $disableCallingLineIdDelivery;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting\UserCallWaitingGetResponse17sp4 $response
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
    public function setDisableCallingLineIdDelivery($disableCallingLineIdDelivery = null)
    {
        $this->disableCallingLineIdDelivery = new PrimitiveType($disableCallingLineIdDelivery);
        $this->disableCallingLineIdDelivery->setElementName('disableCallingLineIdDelivery');
        return $this;
    }

    /**
     * 
     * @return boolean $disableCallingLineIdDelivery
     */
    public function getDisableCallingLineIdDelivery()
    {
        return ($this->disableCallingLineIdDelivery)
            ? $this->disableCallingLineIdDelivery->getElementValue()
            : null;
    }
}

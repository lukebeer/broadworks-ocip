<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDoNotDisturb; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserDoNotDisturbGetRequest.
 */
class UserDoNotDisturbGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDoNotDisturbGetResponse';
    protected $isActive;
    protected $ringSplash;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDoNotDisturb\UserDoNotDisturbGetResponse $response
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
    public function setRingSplash($ringSplash = null)
    {
        $this->ringSplash = new PrimitiveType($ringSplash);
        $this->ringSplash->setElementName('ringSplash');
        return $this;
    }

    /**
     * 
     * @return boolean $ringSplash
     */
    public function getRingSplash()
    {
        return ($this->ringSplash)
            ? $this->ringSplash->getElementValue()
            : null;
    }
}

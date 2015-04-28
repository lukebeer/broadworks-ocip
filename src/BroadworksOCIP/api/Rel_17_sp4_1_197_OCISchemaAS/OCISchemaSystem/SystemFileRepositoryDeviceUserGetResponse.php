<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 */
class SystemFileRepositoryDeviceUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemFileRepositoryDeviceUserGetResponse';
    protected $allowPut;
    protected $allowDelete;
    protected $allowGet;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceUserGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAllowPut($allowPut = null)
    {
        $this->allowPut = new PrimitiveType($allowPut);
        $this->allowPut->setElementName('allowPut');
        return $this;
    }

    /**
     * 
     * @return boolean $allowPut
     */
    public function getAllowPut()
    {
        return ($this->allowPut)
            ? $this->allowPut->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        $this->allowDelete = new PrimitiveType($allowDelete);
        $this->allowDelete->setElementName('allowDelete');
        return $this;
    }

    /**
     * 
     * @return boolean $allowDelete
     */
    public function getAllowDelete()
    {
        return ($this->allowDelete)
            ? $this->allowDelete->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        $this->allowGet = new PrimitiveType($allowGet);
        $this->allowGet->setElementName('allowGet');
        return $this;
    }

    /**
     * 
     * @return boolean $allowGet
     */
    public function getAllowGet()
    {
        return ($this->allowGet)
            ? $this->allowGet->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 */
class SystemFileRepositoryDeviceUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemFileRepositoryDeviceUserGetResponse';
    protected $allowPut;
    protected $allowDelete;
    protected $allowGet;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceUserGetResponse $response
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
        $this->allowPut->setName('allowPut');
        return $this;
    }

    /**
     * 
     * @return boolean $allowPut
     */
    public function getAllowPut()
    {
        return ($this->allowPut) ? $this->allowPut->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        $this->allowDelete = new PrimitiveType($allowDelete);
        $this->allowDelete->setName('allowDelete');
        return $this;
    }

    /**
     * 
     * @return boolean $allowDelete
     */
    public function getAllowDelete()
    {
        return ($this->allowDelete) ? $this->allowDelete->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        $this->allowGet = new PrimitiveType($allowGet);
        $this->allowGet->setName('allowGet');
        return $this;
    }

    /**
     * 
     * @return boolean $allowGet
     */
    public function getAllowGet()
    {
        return ($this->allowGet) ? $this->allowGet->getValue() : null;
    }
}

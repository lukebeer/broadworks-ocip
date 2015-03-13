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
    public    $name        = 'SystemFileRepositoryDeviceUserGetResponse';
    protected $allowPut    = null;
    protected $allowDelete = null;
    protected $allowGet    = null;

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
        if (!$allowPut) return $this;
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
        return $this->allowPut->getValue();
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        if (!$allowDelete) return $this;
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
        return $this->allowDelete->getValue();
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        if (!$allowGet) return $this;
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
        return $this->allowGet->getValue();
    }
}

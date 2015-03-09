<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceUserGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 */
class SystemFileRepositoryDeviceUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $allowPut    = null;
    protected $allowDelete = null;
    protected $allowGet    = null;

    /**
     * @return SystemFileRepositoryDeviceUserGetResponse
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
        $this->allowPut = (boolean) $allowPut;
    }

    /**
     * 
     */
    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut;
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        $this->allowDelete = (boolean) $allowDelete;
    }

    /**
     * 
     */
    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete;
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        $this->allowGet = (boolean) $allowGet;
    }

    /**
     * 
     */
    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet;
    }
}

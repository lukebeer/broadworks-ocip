<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Access device end point in the context of a delete command.
 */
class AccessDeviceEndpointKey extends ComplexType implements ComplexInterface
{
    public    $name         = 'AccessDeviceEndpointKey';
    protected $accessDevice = null;
    protected $linePort     = null;

    public function __construct(
         $accessDevice,
         $linePort
    ) {
        $this->setAccessDevice($accessDevice);
        $this->setLinePort($linePort);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessDevice($accessDevice = null)
    {
        if (!$accessDevice) return $this;
        $this->accessDevice = new SimpleContent($accessDevice);
        $this->accessDevice->setName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice->getValue();
    }

    /**
     * 
     */
    public function setLinePort($linePort = null)
    {
        if (!$linePort) return $this;
        $this->linePort = new SimpleContent($linePort);
        $this->linePort->setName('linePort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $linePort
     */
    public function getLinePort()
    {
        return $this->linePort->getValue();
    }
}

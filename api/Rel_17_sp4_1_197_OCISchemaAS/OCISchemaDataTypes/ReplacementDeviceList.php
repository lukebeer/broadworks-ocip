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
 * A list of devices that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementDeviceList extends ComplexType implements ComplexInterface
{
    public    $name   = 'ReplacementDeviceList';
    protected $device = null;

    public function __construct(
         $device = null
    ) {
        $this->setDevice($device);
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
    public function setDevice($device = null)
    {
        if (!$device) return $this;
        $this->device = new SimpleContent($device);
        $this->device->setName('device');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $device
     */
    public function getDevice()
    {
        return $this->device->getValue();
    }
}

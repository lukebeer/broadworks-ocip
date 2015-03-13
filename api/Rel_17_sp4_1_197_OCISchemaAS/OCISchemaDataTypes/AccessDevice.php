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
 * Uniquely identifies an Identity/device profile created anywhere in the system.
 */
class AccessDevice extends ComplexType implements ComplexInterface
{
    public    $name        = 'AccessDevice';
    protected $deviceLevel = null;
    protected $deviceName  = null;

    public function __construct(
         $deviceLevel,
         $deviceName
    ) {
        $this->setDeviceLevel($deviceLevel);
        $this->setDeviceName($deviceName);
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
    public function setDeviceLevel($deviceLevel = null)
    {
        if (!$deviceLevel) return $this;
        $this->deviceLevel = new SimpleContent($deviceLevel);
        $this->deviceLevel->setName('deviceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceLevel
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel->getValue();
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        if (!$deviceName) return $this;
        $this->deviceName = new SimpleContent($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName->getValue();
    }
}

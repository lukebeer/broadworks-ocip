<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Uniquely identifies an Identity/device profile created anywhere in the system.
 */
class AccessDevice extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AccessDevice';
    protected $deviceLevel;
    protected $deviceName;

    public function __construct(
         $deviceLevel = '',
         $deviceName = ''
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
        $this->deviceLevel = new SimpleContent($deviceLevel);
        $this->deviceLevel->setElementName('deviceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceLevel
     */
    public function getDeviceLevel()
    {
        return ($this->deviceLevel)
            ? $this->deviceLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = new SimpleContent($deviceName);
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }
}

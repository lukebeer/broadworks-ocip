<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemSpeedDial100GetRequest17sp1.
 */
class SystemSpeedDial100GetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSpeedDial100GetResponse17sp1';
    protected $prefix;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SystemSpeedDial100GetResponse17sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf SpeedDialPrefix)
             ? $prefix
             : new SpeedDialPrefix($prefix);
        $this->prefix->setElementName('prefix');
        return $this;
    }

    /**
     * 
     * @return SpeedDialPrefix $prefix
     */
    public function getPrefix()
    {
        return ($this->prefix)
            ? $this->prefix->getElementValue()
            : null;
    }
}

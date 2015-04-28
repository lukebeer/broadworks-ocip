<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SpeedDial100Entry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSpeedDial100GetListRequest.
 */
class UserSpeedDial100GetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSpeedDial100GetListResponse';
    protected $prefix;
    protected $speedDialEntry;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserSpeedDial100GetListResponse $response
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

    /**
     * 
     */
    public function setSpeedDialEntry(SpeedDial100Entry $speedDialEntry = null)
    {
        $this->speedDialEntry = ($speedDialEntry InstanceOf SpeedDial100Entry)
             ? $speedDialEntry
             : new SpeedDial100Entry($speedDialEntry);
        $this->speedDialEntry->setElementName('speedDialEntry');
        return $this;
    }

    /**
     * 
     * @return SpeedDial100Entry $speedDialEntry
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8\SpeedDial8Entry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSpeedDial8GetListRequest.
 */
class UserSpeedDial8GetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSpeedDial8GetListResponse';
    protected $speedDialEntry;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8\UserSpeedDial8GetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSpeedDialEntry(SpeedDial8Entry $speedDialEntry = null)
    {
        $this->speedDialEntry = ($speedDialEntry InstanceOf SpeedDial8Entry)
             ? $speedDialEntry
             : new SpeedDial8Entry($speedDialEntry);
        $this->speedDialEntry->setElementName('speedDialEntry');
        return $this;
    }

    /**
     * 
     * @return SpeedDial8Entry $speedDialEntry
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry;
    }
}

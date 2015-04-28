<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SpeedDial100Entry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add one or more speed dial 100 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSpeedDial100AddListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSpeedDial100AddListRequest';
    protected $userId;
    protected $speedDialEntry;

    public function __construct(
         $userId = '',
         $speedDialEntry = null
    ) {
        $this->setUserId($userId);
        $this->setSpeedDialEntry($speedDialEntry);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
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

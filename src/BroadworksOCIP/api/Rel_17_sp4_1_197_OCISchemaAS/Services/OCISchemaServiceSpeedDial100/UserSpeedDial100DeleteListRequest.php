<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SpeedDial100Code;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete one or more speed dial 100 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSpeedDial100DeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSpeedDial100DeleteListRequest';
    protected $userId;
    protected $speedCode;

    public function __construct(
         $userId = '',
         $speedCode = null
    ) {
        $this->setUserId($userId);
        $this->setSpeedCode($speedCode);
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
    public function setSpeedCode($speedCode = null)
    {
        $this->speedCode = ($speedCode InstanceOf SpeedDial100Code)
             ? $speedCode
             : new SpeedDial100Code($speedCode);
        $this->speedCode->setElementName('speedCode');
        return $this;
    }

    /**
     * 
     * @return SpeedDial100Code $speedCode
     */
    public function getSpeedCode()
    {
        return ($this->speedCode)
            ? $this->speedCode->getElementValue()
            : null;
    }
}

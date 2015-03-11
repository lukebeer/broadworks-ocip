<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SpeedDial100Code;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete one or more speed dial 100 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSpeedDial100DeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name      = 'UserSpeedDial100DeleteListRequest';
    protected $userId    = null;
    protected $speedCode = null;

    public function __construct(
         $userId,
         $speedCode = null
    ) {
        $this->setUserId($userId);
        $this->setSpeedCode($speedCode);
    }

    /**
     * @return 
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setSpeedCode($speedCode = null)
    {
        if (!$speedCode) return $this;
        $this->speedCode = ($speedCode InstanceOf SpeedDial100Code)
             ? $speedCode
             : new SpeedDial100Code($speedCode);
        $this->speedCode->setName('speedCode');
        return $this;
    }

    /**
     * 
     * @return SpeedDial100Code
     */
    public function getSpeedCode()
    {
        return $this->speedCode->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8\SpeedDial8Entry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the speed dial 8 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserSpeedDial8ModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name           = 'UserSpeedDial8ModifyListRequest';
    protected $userId         = null;
    protected $speedDialEntry = null;

    public function __construct(
         $userId,
         SpeedDial8Entry $speedDialEntry = null
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setSpeedDialEntry(SpeedDial8Entry $speedDialEntry = null)
    {
        if (!$speedDialEntry) return $this;
        $this->speedDialEntry = $speedDialEntry;
        $this->speedDialEntry->setName('speedDialEntry');
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

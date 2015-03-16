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
 * Get speed dial 100 settings for a speed code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSpeedDial100GetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\UserSpeedDial100GetResponse';
    public    $name = 'UserSpeedDial100GetRequest';
    protected $userId;
    protected $speedCode;

    public function __construct(
         $userId = '',
         $speedCode = ''
    ) {
        $this->setUserId($userId);
        $this->setSpeedCode($speedCode);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\UserSpeedDial100GetResponse $response
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setSpeedCode($speedCode = null)
    {
        $this->speedCode = ($speedCode InstanceOf SpeedDial100Code)
             ? $speedCode
             : new SpeedDial100Code($speedCode);
        $this->speedCode->setName('speedCode');
        return $this;
    }

    /**
     * 
     * @return SpeedDial100Code $speedCode
     */
    public function getSpeedCode()
    {
        return ($this->speedCode) ? $this->speedCode->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenterMonitoring; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's Call Center Monitoring settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterMonitoringModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallCenterMonitoringModifyRequest';
    protected $userId;
    protected $playToneToAgentForSilentMonitoring;

    public function __construct(
         $userId = '',
         $playToneToAgentForSilentMonitoring = null
    ) {
        $this->setUserId($userId);
        $this->setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring);
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
    public function setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring = null)
    {
        $this->playToneToAgentForSilentMonitoring = new PrimitiveType($playToneToAgentForSilentMonitoring);
        $this->playToneToAgentForSilentMonitoring->setName('playToneToAgentForSilentMonitoring');
        return $this;
    }

    /**
     * 
     * @return boolean $playToneToAgentForSilentMonitoring
     */
    public function getPlayToneToAgentForSilentMonitoring()
    {
        return ($this->playToneToAgentForSilentMonitoring) ? $this->playToneToAgentForSilentMonitoring->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenterMonitoring; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallCenterMonitoringGetRequest.
 */
class UserCallCenterMonitoringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                               = 'UserCallCenterMonitoringGetResponse';
    protected $playToneToAgentForSilentMonitoring = null;

    /**
     * @return UserCallCenterMonitoringGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring = null)
    {
        if (!$playToneToAgentForSilentMonitoring) return $this;
        $this->playToneToAgentForSilentMonitoring = new PrimitiveType($playToneToAgentForSilentMonitoring);
        $this->playToneToAgentForSilentMonitoring->setName('playToneToAgentForSilentMonitoring');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayToneToAgentForSilentMonitoring()
    {
        return $this->playToneToAgentForSilentMonitoring->getValue();
    }
}

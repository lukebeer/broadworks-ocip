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
    public    $elementName = 'UserCallCenterMonitoringGetResponse';
    protected $playToneToAgentForSilentMonitoring;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenterMonitoring\UserCallCenterMonitoringGetResponse $response
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
        $this->playToneToAgentForSilentMonitoring = new PrimitiveType($playToneToAgentForSilentMonitoring);
        $this->playToneToAgentForSilentMonitoring->setElementName('playToneToAgentForSilentMonitoring');
        return $this;
    }

    /**
     * 
     * @return boolean $playToneToAgentForSilentMonitoring
     */
    public function getPlayToneToAgentForSilentMonitoring()
    {
        return ($this->playToneToAgentForSilentMonitoring)
            ? $this->playToneToAgentForSilentMonitoring->getElementValue()
            : null;
    }
}

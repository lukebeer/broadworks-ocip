<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains Call Center statistics for a specified agent.
 */
class CallCenterAgentStatistics14sp9 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAgentStatistics14sp9';
    protected $agentUserId;
    protected $agentDisplayNames;
    protected $available;
    protected $statistics;

    public function __construct(
         $agentUserId = '',
         $agentDisplayNames = '',
         $available = '',
         $statistics = ''
    ) {
        $this->setAgentUserId($agentUserId);
        $this->setAgentDisplayNames($agentDisplayNames);
        $this->setAvailable($available);
        $this->setStatistics($statistics);
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
    public function setAgentUserId($agentUserId = null)
    {
        $this->agentUserId = new SimpleContent($agentUserId);
        $this->agentUserId->setElementName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $agentUserId
     */
    public function getAgentUserId()
    {
        return ($this->agentUserId)
            ? $this->agentUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentDisplayNames($agentDisplayNames = null)
    {
        $this->agentDisplayNames = new SimpleContent($agentDisplayNames);
        $this->agentDisplayNames->setElementName('agentDisplayNames');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $agentDisplayNames
     */
    public function getAgentDisplayNames()
    {
        return ($this->agentDisplayNames)
            ? $this->agentDisplayNames->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAvailable($available = null)
    {
        $this->available = new SimpleContent($available);
        $this->available->setElementName('available');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $available
     */
    public function getAvailable()
    {
        return ($this->available)
            ? $this->available->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatistics($statistics = null)
    {
        $this->statistics = new SimpleContent($statistics);
        $this->statistics->setElementName('statistics');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $statistics
     */
    public function getStatistics()
    {
        return ($this->statistics)
            ? $this->statistics->getElementValue()
            : null;
    }
}

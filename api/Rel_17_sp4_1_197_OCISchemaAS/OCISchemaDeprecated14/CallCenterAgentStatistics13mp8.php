<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center statistics for a specified agent.
 */
class CallCenterAgentStatistics13mp8 extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterAgentStatistics13mp8';
    protected $agentUserId;
    protected $agentDisplayNames;
    protected $available;
    protected $statisticsYesterday;
    protected $statisticsToday;

    public function __construct(
         $agentUserId = '',
         $agentDisplayNames = '',
         $available = '',
         $statisticsYesterday = '',
         $statisticsToday = ''
    ) {
        $this->setAgentUserId($agentUserId);
        $this->setAgentDisplayNames($agentDisplayNames);
        $this->setAvailable($available);
        $this->setStatisticsYesterday($statisticsYesterday);
        $this->setStatisticsToday($statisticsToday);
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
        $this->agentUserId->setName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $agentUserId
     */
    public function getAgentUserId()
    {
        return ($this->agentUserId) ? $this->agentUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setAgentDisplayNames($agentDisplayNames = null)
    {
        $this->agentDisplayNames = new SimpleContent($agentDisplayNames);
        $this->agentDisplayNames->setName('agentDisplayNames');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $agentDisplayNames
     */
    public function getAgentDisplayNames()
    {
        return ($this->agentDisplayNames) ? $this->agentDisplayNames->getValue() : null;
    }

    /**
     * 
     */
    public function setAvailable($available = null)
    {
        $this->available = new SimpleContent($available);
        $this->available->setName('available');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $available
     */
    public function getAvailable()
    {
        return ($this->available) ? $this->available->getValue() : null;
    }

    /**
     * 
     */
    public function setStatisticsYesterday($statisticsYesterday = null)
    {
        $this->statisticsYesterday = new SimpleContent($statisticsYesterday);
        $this->statisticsYesterday->setName('statisticsYesterday');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $statisticsYesterday
     */
    public function getStatisticsYesterday()
    {
        return ($this->statisticsYesterday) ? $this->statisticsYesterday->getValue() : null;
    }

    /**
     * 
     */
    public function setStatisticsToday($statisticsToday = null)
    {
        $this->statisticsToday = new SimpleContent($statisticsToday);
        $this->statisticsToday->setName('statisticsToday');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $statisticsToday
     */
    public function getStatisticsToday()
    {
        return ($this->statisticsToday) ? $this->statisticsToday->getValue() : null;
    }
}

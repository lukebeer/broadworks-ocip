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
    public    $name                = 'CallCenterAgentStatistics13mp8';
    protected $agentUserId         = null;
    protected $agentDisplayNames   = null;
    protected $available           = null;
    protected $statisticsYesterday = null;
    protected $statisticsToday     = null;

    public function __construct(
         $agentUserId,
         $agentDisplayNames,
         $available,
         $statisticsYesterday,
         $statisticsToday
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
        if (!$agentUserId) return $this;
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
        return $this->agentUserId->getValue();
    }

    /**
     * 
     */
    public function setAgentDisplayNames($agentDisplayNames = null)
    {
        if (!$agentDisplayNames) return $this;
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
        return $this->agentDisplayNames->getValue();
    }

    /**
     * 
     */
    public function setAvailable($available = null)
    {
        if (!$available) return $this;
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
        return $this->available->getValue();
    }

    /**
     * 
     */
    public function setStatisticsYesterday($statisticsYesterday = null)
    {
        if (!$statisticsYesterday) return $this;
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
        return $this->statisticsYesterday->getValue();
    }

    /**
     * 
     */
    public function setStatisticsToday($statisticsToday = null)
    {
        if (!$statisticsToday) return $this;
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
        return $this->statisticsToday->getValue();
    }
}

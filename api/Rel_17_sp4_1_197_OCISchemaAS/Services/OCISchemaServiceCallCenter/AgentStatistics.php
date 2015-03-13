<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center Agent statistics for a given time frame.
 */
class AgentStatistics extends ComplexType implements ComplexInterface
{
    public    $name                    = 'AgentStatistics';
    protected $numberOfCallsHandled    = null;
    protected $numberOfCallsUnanswered = null;
    protected $averageCallSeconds      = null;
    protected $totalTalkSeconds        = null;
    protected $totalStaffedSeconds     = null;

    public function __construct(
         $numberOfCallsHandled,
         $numberOfCallsUnanswered,
         $averageCallSeconds,
         $totalTalkSeconds,
         $totalStaffedSeconds
    ) {
        $this->setNumberOfCallsHandled($numberOfCallsHandled);
        $this->setNumberOfCallsUnanswered($numberOfCallsUnanswered);
        $this->setAverageCallSeconds($averageCallSeconds);
        $this->setTotalTalkSeconds($totalTalkSeconds);
        $this->setTotalStaffedSeconds($totalStaffedSeconds);
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
    public function setNumberOfCallsHandled($numberOfCallsHandled = null)
    {
        if (!$numberOfCallsHandled) return $this;
        $this->numberOfCallsHandled = new SimpleContent($numberOfCallsHandled);
        $this->numberOfCallsHandled->setName('numberOfCallsHandled');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsHandled
     */
    public function getNumberOfCallsHandled()
    {
        return $this->numberOfCallsHandled->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsUnanswered($numberOfCallsUnanswered = null)
    {
        if (!$numberOfCallsUnanswered) return $this;
        $this->numberOfCallsUnanswered = new SimpleContent($numberOfCallsUnanswered);
        $this->numberOfCallsUnanswered->setName('numberOfCallsUnanswered');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsUnanswered
     */
    public function getNumberOfCallsUnanswered()
    {
        return $this->numberOfCallsUnanswered->getValue();
    }

    /**
     * 
     */
    public function setAverageCallSeconds($averageCallSeconds = null)
    {
        if (!$averageCallSeconds) return $this;
        $this->averageCallSeconds = new SimpleContent($averageCallSeconds);
        $this->averageCallSeconds->setName('averageCallSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageCallSeconds
     */
    public function getAverageCallSeconds()
    {
        return $this->averageCallSeconds->getValue();
    }

    /**
     * 
     */
    public function setTotalTalkSeconds($totalTalkSeconds = null)
    {
        if (!$totalTalkSeconds) return $this;
        $this->totalTalkSeconds = new SimpleContent($totalTalkSeconds);
        $this->totalTalkSeconds->setName('totalTalkSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $totalTalkSeconds
     */
    public function getTotalTalkSeconds()
    {
        return $this->totalTalkSeconds->getValue();
    }

    /**
     * 
     */
    public function setTotalStaffedSeconds($totalStaffedSeconds = null)
    {
        if (!$totalStaffedSeconds) return $this;
        $this->totalStaffedSeconds = new SimpleContent($totalStaffedSeconds);
        $this->totalStaffedSeconds->setName('totalStaffedSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $totalStaffedSeconds
     */
    public function getTotalStaffedSeconds()
    {
        return $this->totalStaffedSeconds->getValue();
    }
}

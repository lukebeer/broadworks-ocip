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
 * Contains Call Center Queue statistics.
 */
class CallCenterQueueStatistics13mp8 extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'CallCenterQueueStatistics13mp8';
    protected $numberOfIncomingCalls                = null;
    protected $numberOfCallsQueued                  = null;
    protected $numberOfBusyOverflows                = null;
    protected $numberOfCallsAnswered                = null;
    protected $averageTimeWithAgentSeconds          = null;
    protected $averageTimeInQueueSeconds            = null;
    protected $averageNumberOfAgentsBusy            = null;
    protected $averageNumberOfAgentsLoggedOff       = null;
    protected $averageHoldTimeBeforeCallLossSeconds = null;

    public function __construct(
         $numberOfIncomingCalls,
         $numberOfCallsQueued,
         $numberOfBusyOverflows,
         $numberOfCallsAnswered,
         $averageTimeWithAgentSeconds,
         $averageTimeInQueueSeconds,
         $averageNumberOfAgentsBusy,
         $averageNumberOfAgentsLoggedOff,
         $averageHoldTimeBeforeCallLossSeconds
    ) {
        $this->setNumberOfIncomingCalls($numberOfIncomingCalls);
        $this->setNumberOfCallsQueued($numberOfCallsQueued);
        $this->setNumberOfBusyOverflows($numberOfBusyOverflows);
        $this->setNumberOfCallsAnswered($numberOfCallsAnswered);
        $this->setAverageTimeWithAgentSeconds($averageTimeWithAgentSeconds);
        $this->setAverageTimeInQueueSeconds($averageTimeInQueueSeconds);
        $this->setAverageNumberOfAgentsBusy($averageNumberOfAgentsBusy);
        $this->setAverageNumberOfAgentsLoggedOff($averageNumberOfAgentsLoggedOff);
        $this->setAverageHoldTimeBeforeCallLossSeconds($averageHoldTimeBeforeCallLossSeconds);
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
    public function setNumberOfIncomingCalls($numberOfIncomingCalls = null)
    {
        if (!$numberOfIncomingCalls) return $this;
        $this->numberOfIncomingCalls = new SimpleContent($numberOfIncomingCalls);
        $this->numberOfIncomingCalls->setName('numberOfIncomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfIncomingCalls
     */
    public function getNumberOfIncomingCalls()
    {
        return $this->numberOfIncomingCalls->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsQueued($numberOfCallsQueued = null)
    {
        if (!$numberOfCallsQueued) return $this;
        $this->numberOfCallsQueued = new SimpleContent($numberOfCallsQueued);
        $this->numberOfCallsQueued->setName('numberOfCallsQueued');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsQueued
     */
    public function getNumberOfCallsQueued()
    {
        return $this->numberOfCallsQueued->getValue();
    }

    /**
     * 
     */
    public function setNumberOfBusyOverflows($numberOfBusyOverflows = null)
    {
        if (!$numberOfBusyOverflows) return $this;
        $this->numberOfBusyOverflows = new SimpleContent($numberOfBusyOverflows);
        $this->numberOfBusyOverflows->setName('numberOfBusyOverflows');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfBusyOverflows
     */
    public function getNumberOfBusyOverflows()
    {
        return $this->numberOfBusyOverflows->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsAnswered($numberOfCallsAnswered = null)
    {
        if (!$numberOfCallsAnswered) return $this;
        $this->numberOfCallsAnswered = new SimpleContent($numberOfCallsAnswered);
        $this->numberOfCallsAnswered->setName('numberOfCallsAnswered');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsAnswered
     */
    public function getNumberOfCallsAnswered()
    {
        return $this->numberOfCallsAnswered->getValue();
    }

    /**
     * 
     */
    public function setAverageTimeWithAgentSeconds($averageTimeWithAgentSeconds = null)
    {
        if (!$averageTimeWithAgentSeconds) return $this;
        $this->averageTimeWithAgentSeconds = new SimpleContent($averageTimeWithAgentSeconds);
        $this->averageTimeWithAgentSeconds->setName('averageTimeWithAgentSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageTimeWithAgentSeconds
     */
    public function getAverageTimeWithAgentSeconds()
    {
        return $this->averageTimeWithAgentSeconds->getValue();
    }

    /**
     * 
     */
    public function setAverageTimeInQueueSeconds($averageTimeInQueueSeconds = null)
    {
        if (!$averageTimeInQueueSeconds) return $this;
        $this->averageTimeInQueueSeconds = new SimpleContent($averageTimeInQueueSeconds);
        $this->averageTimeInQueueSeconds->setName('averageTimeInQueueSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageTimeInQueueSeconds
     */
    public function getAverageTimeInQueueSeconds()
    {
        return $this->averageTimeInQueueSeconds->getValue();
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsBusy($averageNumberOfAgentsBusy = null)
    {
        if (!$averageNumberOfAgentsBusy) return $this;
        $this->averageNumberOfAgentsBusy = new SimpleContent($averageNumberOfAgentsBusy);
        $this->averageNumberOfAgentsBusy->setName('averageNumberOfAgentsBusy');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageNumberOfAgentsBusy
     */
    public function getAverageNumberOfAgentsBusy()
    {
        return $this->averageNumberOfAgentsBusy->getValue();
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsLoggedOff($averageNumberOfAgentsLoggedOff = null)
    {
        if (!$averageNumberOfAgentsLoggedOff) return $this;
        $this->averageNumberOfAgentsLoggedOff = new SimpleContent($averageNumberOfAgentsLoggedOff);
        $this->averageNumberOfAgentsLoggedOff->setName('averageNumberOfAgentsLoggedOff');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageNumberOfAgentsLoggedOff
     */
    public function getAverageNumberOfAgentsLoggedOff()
    {
        return $this->averageNumberOfAgentsLoggedOff->getValue();
    }

    /**
     * 
     */
    public function setAverageHoldTimeBeforeCallLossSeconds($averageHoldTimeBeforeCallLossSeconds = null)
    {
        if (!$averageHoldTimeBeforeCallLossSeconds) return $this;
        $this->averageHoldTimeBeforeCallLossSeconds = new SimpleContent($averageHoldTimeBeforeCallLossSeconds);
        $this->averageHoldTimeBeforeCallLossSeconds->setName('averageHoldTimeBeforeCallLossSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageHoldTimeBeforeCallLossSeconds
     */
    public function getAverageHoldTimeBeforeCallLossSeconds()
    {
        return $this->averageHoldTimeBeforeCallLossSeconds->getValue();
    }
}

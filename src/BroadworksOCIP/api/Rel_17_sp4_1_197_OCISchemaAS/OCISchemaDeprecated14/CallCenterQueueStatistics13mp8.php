<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains Call Center Queue statistics.
 */
class CallCenterQueueStatistics13mp8 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterQueueStatistics13mp8';
    protected $numberOfIncomingCalls;
    protected $numberOfCallsQueued;
    protected $numberOfBusyOverflows;
    protected $numberOfCallsAnswered;
    protected $averageTimeWithAgentSeconds;
    protected $averageTimeInQueueSeconds;
    protected $averageNumberOfAgentsBusy;
    protected $averageNumberOfAgentsLoggedOff;
    protected $averageHoldTimeBeforeCallLossSeconds;

    public function __construct(
         $numberOfIncomingCalls = '',
         $numberOfCallsQueued = '',
         $numberOfBusyOverflows = '',
         $numberOfCallsAnswered = '',
         $averageTimeWithAgentSeconds = '',
         $averageTimeInQueueSeconds = '',
         $averageNumberOfAgentsBusy = '',
         $averageNumberOfAgentsLoggedOff = '',
         $averageHoldTimeBeforeCallLossSeconds = ''
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
        $this->numberOfIncomingCalls = new SimpleContent($numberOfIncomingCalls);
        $this->numberOfIncomingCalls->setElementName('numberOfIncomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfIncomingCalls
     */
    public function getNumberOfIncomingCalls()
    {
        return ($this->numberOfIncomingCalls)
            ? $this->numberOfIncomingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsQueued($numberOfCallsQueued = null)
    {
        $this->numberOfCallsQueued = new SimpleContent($numberOfCallsQueued);
        $this->numberOfCallsQueued->setElementName('numberOfCallsQueued');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsQueued
     */
    public function getNumberOfCallsQueued()
    {
        return ($this->numberOfCallsQueued)
            ? $this->numberOfCallsQueued->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfBusyOverflows($numberOfBusyOverflows = null)
    {
        $this->numberOfBusyOverflows = new SimpleContent($numberOfBusyOverflows);
        $this->numberOfBusyOverflows->setElementName('numberOfBusyOverflows');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfBusyOverflows
     */
    public function getNumberOfBusyOverflows()
    {
        return ($this->numberOfBusyOverflows)
            ? $this->numberOfBusyOverflows->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsAnswered($numberOfCallsAnswered = null)
    {
        $this->numberOfCallsAnswered = new SimpleContent($numberOfCallsAnswered);
        $this->numberOfCallsAnswered->setElementName('numberOfCallsAnswered');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsAnswered
     */
    public function getNumberOfCallsAnswered()
    {
        return ($this->numberOfCallsAnswered)
            ? $this->numberOfCallsAnswered->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageTimeWithAgentSeconds($averageTimeWithAgentSeconds = null)
    {
        $this->averageTimeWithAgentSeconds = new SimpleContent($averageTimeWithAgentSeconds);
        $this->averageTimeWithAgentSeconds->setElementName('averageTimeWithAgentSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageTimeWithAgentSeconds
     */
    public function getAverageTimeWithAgentSeconds()
    {
        return ($this->averageTimeWithAgentSeconds)
            ? $this->averageTimeWithAgentSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageTimeInQueueSeconds($averageTimeInQueueSeconds = null)
    {
        $this->averageTimeInQueueSeconds = new SimpleContent($averageTimeInQueueSeconds);
        $this->averageTimeInQueueSeconds->setElementName('averageTimeInQueueSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageTimeInQueueSeconds
     */
    public function getAverageTimeInQueueSeconds()
    {
        return ($this->averageTimeInQueueSeconds)
            ? $this->averageTimeInQueueSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsBusy($averageNumberOfAgentsBusy = null)
    {
        $this->averageNumberOfAgentsBusy = new SimpleContent($averageNumberOfAgentsBusy);
        $this->averageNumberOfAgentsBusy->setElementName('averageNumberOfAgentsBusy');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageNumberOfAgentsBusy
     */
    public function getAverageNumberOfAgentsBusy()
    {
        return ($this->averageNumberOfAgentsBusy)
            ? $this->averageNumberOfAgentsBusy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsLoggedOff($averageNumberOfAgentsLoggedOff = null)
    {
        $this->averageNumberOfAgentsLoggedOff = new SimpleContent($averageNumberOfAgentsLoggedOff);
        $this->averageNumberOfAgentsLoggedOff->setElementName('averageNumberOfAgentsLoggedOff');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageNumberOfAgentsLoggedOff
     */
    public function getAverageNumberOfAgentsLoggedOff()
    {
        return ($this->averageNumberOfAgentsLoggedOff)
            ? $this->averageNumberOfAgentsLoggedOff->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageHoldTimeBeforeCallLossSeconds($averageHoldTimeBeforeCallLossSeconds = null)
    {
        $this->averageHoldTimeBeforeCallLossSeconds = new SimpleContent($averageHoldTimeBeforeCallLossSeconds);
        $this->averageHoldTimeBeforeCallLossSeconds->setElementName('averageHoldTimeBeforeCallLossSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageHoldTimeBeforeCallLossSeconds
     */
    public function getAverageHoldTimeBeforeCallLossSeconds()
    {
        return ($this->averageHoldTimeBeforeCallLossSeconds)
            ? $this->averageHoldTimeBeforeCallLossSeconds->getElementValue()
            : null;
    }
}

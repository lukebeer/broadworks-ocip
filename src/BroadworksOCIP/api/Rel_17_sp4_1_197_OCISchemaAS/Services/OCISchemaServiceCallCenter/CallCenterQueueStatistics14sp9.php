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
 * Contains Call Center Queue statistics.
 */
class CallCenterQueueStatistics14sp9 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterQueueStatistics14sp9';
    protected $numberOfBusyOverflows;
    protected $numberOfCallsAnswered;
    protected $numberOfCallsAbandoned;
    protected $numberOfCallsTransferred;
    protected $numberOfCallsTimedout;
    protected $averageNumberOfAgentsTalking;
    protected $averageNumberOfAgentsStaffed;
    protected $averageWaitSeconds;
    protected $averageAbandonmentSeconds;

    public function __construct(
         $numberOfBusyOverflows = '',
         $numberOfCallsAnswered = '',
         $numberOfCallsAbandoned = '',
         $numberOfCallsTransferred = '',
         $numberOfCallsTimedout = '',
         $averageNumberOfAgentsTalking = '',
         $averageNumberOfAgentsStaffed = '',
         $averageWaitSeconds = '',
         $averageAbandonmentSeconds = ''
    ) {
        $this->setNumberOfBusyOverflows($numberOfBusyOverflows);
        $this->setNumberOfCallsAnswered($numberOfCallsAnswered);
        $this->setNumberOfCallsAbandoned($numberOfCallsAbandoned);
        $this->setNumberOfCallsTransferred($numberOfCallsTransferred);
        $this->setNumberOfCallsTimedout($numberOfCallsTimedout);
        $this->setAverageNumberOfAgentsTalking($averageNumberOfAgentsTalking);
        $this->setAverageNumberOfAgentsStaffed($averageNumberOfAgentsStaffed);
        $this->setAverageWaitSeconds($averageWaitSeconds);
        $this->setAverageAbandonmentSeconds($averageAbandonmentSeconds);
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
    public function setNumberOfCallsAbandoned($numberOfCallsAbandoned = null)
    {
        $this->numberOfCallsAbandoned = new SimpleContent($numberOfCallsAbandoned);
        $this->numberOfCallsAbandoned->setElementName('numberOfCallsAbandoned');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsAbandoned
     */
    public function getNumberOfCallsAbandoned()
    {
        return ($this->numberOfCallsAbandoned)
            ? $this->numberOfCallsAbandoned->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsTransferred($numberOfCallsTransferred = null)
    {
        $this->numberOfCallsTransferred = new SimpleContent($numberOfCallsTransferred);
        $this->numberOfCallsTransferred->setElementName('numberOfCallsTransferred');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsTransferred
     */
    public function getNumberOfCallsTransferred()
    {
        return ($this->numberOfCallsTransferred)
            ? $this->numberOfCallsTransferred->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsTimedout($numberOfCallsTimedout = null)
    {
        $this->numberOfCallsTimedout = new SimpleContent($numberOfCallsTimedout);
        $this->numberOfCallsTimedout->setElementName('numberOfCallsTimedout');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsTimedout
     */
    public function getNumberOfCallsTimedout()
    {
        return ($this->numberOfCallsTimedout)
            ? $this->numberOfCallsTimedout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsTalking($averageNumberOfAgentsTalking = null)
    {
        $this->averageNumberOfAgentsTalking = new SimpleContent($averageNumberOfAgentsTalking);
        $this->averageNumberOfAgentsTalking->setElementName('averageNumberOfAgentsTalking');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageNumberOfAgentsTalking
     */
    public function getAverageNumberOfAgentsTalking()
    {
        return ($this->averageNumberOfAgentsTalking)
            ? $this->averageNumberOfAgentsTalking->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsStaffed($averageNumberOfAgentsStaffed = null)
    {
        $this->averageNumberOfAgentsStaffed = new SimpleContent($averageNumberOfAgentsStaffed);
        $this->averageNumberOfAgentsStaffed->setElementName('averageNumberOfAgentsStaffed');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageNumberOfAgentsStaffed
     */
    public function getAverageNumberOfAgentsStaffed()
    {
        return ($this->averageNumberOfAgentsStaffed)
            ? $this->averageNumberOfAgentsStaffed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageWaitSeconds($averageWaitSeconds = null)
    {
        $this->averageWaitSeconds = new SimpleContent($averageWaitSeconds);
        $this->averageWaitSeconds->setElementName('averageWaitSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageWaitSeconds
     */
    public function getAverageWaitSeconds()
    {
        return ($this->averageWaitSeconds)
            ? $this->averageWaitSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageAbandonmentSeconds($averageAbandonmentSeconds = null)
    {
        $this->averageAbandonmentSeconds = new SimpleContent($averageAbandonmentSeconds);
        $this->averageAbandonmentSeconds->setElementName('averageAbandonmentSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageAbandonmentSeconds
     */
    public function getAverageAbandonmentSeconds()
    {
        return ($this->averageAbandonmentSeconds)
            ? $this->averageAbandonmentSeconds->getElementValue()
            : null;
    }
}

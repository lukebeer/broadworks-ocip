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
 * Contains Call Center Agent statistics for a given time frame.
 */
class AgentStatistics extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AgentStatistics';
    protected $numberOfCallsHandled;
    protected $numberOfCallsUnanswered;
    protected $averageCallSeconds;
    protected $totalTalkSeconds;
    protected $totalStaffedSeconds;

    public function __construct(
         $numberOfCallsHandled = '',
         $numberOfCallsUnanswered = '',
         $averageCallSeconds = '',
         $totalTalkSeconds = '',
         $totalStaffedSeconds = ''
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
        $this->numberOfCallsHandled = new SimpleContent($numberOfCallsHandled);
        $this->numberOfCallsHandled->setElementName('numberOfCallsHandled');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsHandled
     */
    public function getNumberOfCallsHandled()
    {
        return ($this->numberOfCallsHandled)
            ? $this->numberOfCallsHandled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsUnanswered($numberOfCallsUnanswered = null)
    {
        $this->numberOfCallsUnanswered = new SimpleContent($numberOfCallsUnanswered);
        $this->numberOfCallsUnanswered->setElementName('numberOfCallsUnanswered');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsUnanswered
     */
    public function getNumberOfCallsUnanswered()
    {
        return ($this->numberOfCallsUnanswered)
            ? $this->numberOfCallsUnanswered->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAverageCallSeconds($averageCallSeconds = null)
    {
        $this->averageCallSeconds = new SimpleContent($averageCallSeconds);
        $this->averageCallSeconds->setElementName('averageCallSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageCallSeconds
     */
    public function getAverageCallSeconds()
    {
        return ($this->averageCallSeconds)
            ? $this->averageCallSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTotalTalkSeconds($totalTalkSeconds = null)
    {
        $this->totalTalkSeconds = new SimpleContent($totalTalkSeconds);
        $this->totalTalkSeconds->setElementName('totalTalkSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $totalTalkSeconds
     */
    public function getTotalTalkSeconds()
    {
        return ($this->totalTalkSeconds)
            ? $this->totalTalkSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTotalStaffedSeconds($totalStaffedSeconds = null)
    {
        $this->totalStaffedSeconds = new SimpleContent($totalStaffedSeconds);
        $this->totalStaffedSeconds->setElementName('totalStaffedSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $totalStaffedSeconds
     */
    public function getTotalStaffedSeconds()
    {
        return ($this->totalStaffedSeconds)
            ? $this->totalStaffedSeconds->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueStatistics14sp9;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center Queue statistics.
 */
class CallCenterQueueStatistics14sp9 extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueStatistics14sp9';
    public    $name                         = 'CallCenterQueueStatistics14sp9';
    protected $numberOfBusyOverflows        = null;
    protected $numberOfCallsAnswered        = null;
    protected $numberOfCallsAbandoned       = null;
    protected $numberOfCallsTransferred     = null;
    protected $numberOfCallsTimedout        = null;
    protected $averageNumberOfAgentsTalking = null;
    protected $averageNumberOfAgentsStaffed = null;
    protected $averageWaitSeconds           = null;
    protected $averageAbandonmentSeconds    = null;

    public function __construct(
         $numberOfBusyOverflows,
         $numberOfCallsAnswered,
         $numberOfCallsAbandoned,
         $numberOfCallsTransferred,
         $numberOfCallsTimedout,
         $averageNumberOfAgentsTalking,
         $averageNumberOfAgentsStaffed,
         $averageWaitSeconds,
         $averageAbandonmentSeconds
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
     * @return CallCenterQueueStatistics14sp9
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
        if (!$numberOfBusyOverflows) return $this;
        $this->numberOfBusyOverflows = new SimpleContent($numberOfBusyOverflows);
        $this->numberOfBusyOverflows->setName('numberOfBusyOverflows');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
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
     * @return SimpleContent
     */
    public function getNumberOfCallsAnswered()
    {
        return $this->numberOfCallsAnswered->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsAbandoned($numberOfCallsAbandoned = null)
    {
        if (!$numberOfCallsAbandoned) return $this;
        $this->numberOfCallsAbandoned = new SimpleContent($numberOfCallsAbandoned);
        $this->numberOfCallsAbandoned->setName('numberOfCallsAbandoned');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNumberOfCallsAbandoned()
    {
        return $this->numberOfCallsAbandoned->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsTransferred($numberOfCallsTransferred = null)
    {
        if (!$numberOfCallsTransferred) return $this;
        $this->numberOfCallsTransferred = new SimpleContent($numberOfCallsTransferred);
        $this->numberOfCallsTransferred->setName('numberOfCallsTransferred');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNumberOfCallsTransferred()
    {
        return $this->numberOfCallsTransferred->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsTimedout($numberOfCallsTimedout = null)
    {
        if (!$numberOfCallsTimedout) return $this;
        $this->numberOfCallsTimedout = new SimpleContent($numberOfCallsTimedout);
        $this->numberOfCallsTimedout->setName('numberOfCallsTimedout');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNumberOfCallsTimedout()
    {
        return $this->numberOfCallsTimedout->getValue();
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsTalking($averageNumberOfAgentsTalking = null)
    {
        if (!$averageNumberOfAgentsTalking) return $this;
        $this->averageNumberOfAgentsTalking = new SimpleContent($averageNumberOfAgentsTalking);
        $this->averageNumberOfAgentsTalking->setName('averageNumberOfAgentsTalking');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAverageNumberOfAgentsTalking()
    {
        return $this->averageNumberOfAgentsTalking->getValue();
    }

    /**
     * 
     */
    public function setAverageNumberOfAgentsStaffed($averageNumberOfAgentsStaffed = null)
    {
        if (!$averageNumberOfAgentsStaffed) return $this;
        $this->averageNumberOfAgentsStaffed = new SimpleContent($averageNumberOfAgentsStaffed);
        $this->averageNumberOfAgentsStaffed->setName('averageNumberOfAgentsStaffed');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAverageNumberOfAgentsStaffed()
    {
        return $this->averageNumberOfAgentsStaffed->getValue();
    }

    /**
     * 
     */
    public function setAverageWaitSeconds($averageWaitSeconds = null)
    {
        if (!$averageWaitSeconds) return $this;
        $this->averageWaitSeconds = new SimpleContent($averageWaitSeconds);
        $this->averageWaitSeconds->setName('averageWaitSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAverageWaitSeconds()
    {
        return $this->averageWaitSeconds->getValue();
    }

    /**
     * 
     */
    public function setAverageAbandonmentSeconds($averageAbandonmentSeconds = null)
    {
        if (!$averageAbandonmentSeconds) return $this;
        $this->averageAbandonmentSeconds = new SimpleContent($averageAbandonmentSeconds);
        $this->averageAbandonmentSeconds->setName('averageAbandonmentSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAverageAbandonmentSeconds()
    {
        return $this->averageAbandonmentSeconds->getValue();
    }
}

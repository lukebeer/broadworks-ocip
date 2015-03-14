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
 * Contains Call Center Agent statistics for one day.
 */
class CallCenterAgentDailyStatistics13mp8 extends ComplexType implements ComplexInterface
{
    public    $name                       = 'CallCenterAgentDailyStatistics13mp8';
    protected $numberOfCallsReceived      = null;
    protected $numberOfCallsNotAnswered   = null;
    protected $averageTimePerCallSeconds  = null;
    protected $timeInCallsSeconds         = null;
    protected $timeLoggedOffSeconds       = null;
    protected $timeLoggedOnAndIdleSeconds = null;

    public function __construct(
         $numberOfCallsReceived,
         $numberOfCallsNotAnswered,
         $averageTimePerCallSeconds,
         $timeInCallsSeconds,
         $timeLoggedOffSeconds,
         $timeLoggedOnAndIdleSeconds
    ) {
        $this->setNumberOfCallsReceived($numberOfCallsReceived);
        $this->setNumberOfCallsNotAnswered($numberOfCallsNotAnswered);
        $this->setAverageTimePerCallSeconds($averageTimePerCallSeconds);
        $this->setTimeInCallsSeconds($timeInCallsSeconds);
        $this->setTimeLoggedOffSeconds($timeLoggedOffSeconds);
        $this->setTimeLoggedOnAndIdleSeconds($timeLoggedOnAndIdleSeconds);
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
    public function setNumberOfCallsReceived($numberOfCallsReceived = null)
    {
        if (!$numberOfCallsReceived) return $this;
        $this->numberOfCallsReceived = new SimpleContent($numberOfCallsReceived);
        $this->numberOfCallsReceived->setName('numberOfCallsReceived');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsReceived
     */
    public function getNumberOfCallsReceived()
    {
        return $this->numberOfCallsReceived->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsNotAnswered($numberOfCallsNotAnswered = null)
    {
        if (!$numberOfCallsNotAnswered) return $this;
        $this->numberOfCallsNotAnswered = new SimpleContent($numberOfCallsNotAnswered);
        $this->numberOfCallsNotAnswered->setName('numberOfCallsNotAnswered');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfCallsNotAnswered
     */
    public function getNumberOfCallsNotAnswered()
    {
        return $this->numberOfCallsNotAnswered->getValue();
    }

    /**
     * 
     */
    public function setAverageTimePerCallSeconds($averageTimePerCallSeconds = null)
    {
        if (!$averageTimePerCallSeconds) return $this;
        $this->averageTimePerCallSeconds = new SimpleContent($averageTimePerCallSeconds);
        $this->averageTimePerCallSeconds->setName('averageTimePerCallSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $averageTimePerCallSeconds
     */
    public function getAverageTimePerCallSeconds()
    {
        return $this->averageTimePerCallSeconds->getValue();
    }

    /**
     * 
     */
    public function setTimeInCallsSeconds($timeInCallsSeconds = null)
    {
        if (!$timeInCallsSeconds) return $this;
        $this->timeInCallsSeconds = new SimpleContent($timeInCallsSeconds);
        $this->timeInCallsSeconds->setName('timeInCallsSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeInCallsSeconds
     */
    public function getTimeInCallsSeconds()
    {
        return $this->timeInCallsSeconds->getValue();
    }

    /**
     * 
     */
    public function setTimeLoggedOffSeconds($timeLoggedOffSeconds = null)
    {
        if (!$timeLoggedOffSeconds) return $this;
        $this->timeLoggedOffSeconds = new SimpleContent($timeLoggedOffSeconds);
        $this->timeLoggedOffSeconds->setName('timeLoggedOffSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeLoggedOffSeconds
     */
    public function getTimeLoggedOffSeconds()
    {
        return $this->timeLoggedOffSeconds->getValue();
    }

    /**
     * 
     */
    public function setTimeLoggedOnAndIdleSeconds($timeLoggedOnAndIdleSeconds = null)
    {
        if (!$timeLoggedOnAndIdleSeconds) return $this;
        $this->timeLoggedOnAndIdleSeconds = new SimpleContent($timeLoggedOnAndIdleSeconds);
        $this->timeLoggedOnAndIdleSeconds->setName('timeLoggedOnAndIdleSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeLoggedOnAndIdleSeconds
     */
    public function getTimeLoggedOnAndIdleSeconds()
    {
        return $this->timeLoggedOnAndIdleSeconds->getValue();
    }
}

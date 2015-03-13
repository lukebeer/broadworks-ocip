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
 * The call center enhanced reporting scheduled report modified inclusions related to the Service Level thresholds
 */
class CallCenterScheduledReportServiceLevelInclusionsModify extends ComplexType implements ComplexInterface
{
    public    $name                                        = 'CallCenterScheduledReportServiceLevelInclusionsModify';
    protected $includeOverflowTimeTransferedInServiceLevel = null;
    protected $includeOtherTransfersInServiceLevel         = null;
    protected $abandonedCallsInServiceLevel                = null;
    protected $abandonedCallIntervalSeconds                = null;

    public function __construct(
         $includeOverflowTimeTransferedInServiceLevel = null,
         $includeOtherTransfersInServiceLevel = null,
         $abandonedCallsInServiceLevel = null,
         $abandonedCallIntervalSeconds = null
    ) {
        $this->setIncludeOverflowTimeTransferedInServiceLevel($includeOverflowTimeTransferedInServiceLevel);
        $this->setIncludeOtherTransfersInServiceLevel($includeOtherTransfersInServiceLevel);
        $this->setAbandonedCallsInServiceLevel($abandonedCallsInServiceLevel);
        $this->setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds);
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
    public function setIncludeOverflowTimeTransferedInServiceLevel($includeOverflowTimeTransferedInServiceLevel = null)
    {
        if (!$includeOverflowTimeTransferedInServiceLevel) return $this;
        $this->includeOverflowTimeTransferedInServiceLevel = new SimpleContent($includeOverflowTimeTransferedInServiceLevel);
        $this->includeOverflowTimeTransferedInServiceLevel->setName('includeOverflowTimeTransferedInServiceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeOverflowTimeTransferedInServiceLevel
     */
    public function getIncludeOverflowTimeTransferedInServiceLevel()
    {
        return $this->includeOverflowTimeTransferedInServiceLevel->getValue();
    }

    /**
     * 
     */
    public function setIncludeOtherTransfersInServiceLevel($includeOtherTransfersInServiceLevel = null)
    {
        if (!$includeOtherTransfersInServiceLevel) return $this;
        $this->includeOtherTransfersInServiceLevel = new SimpleContent($includeOtherTransfersInServiceLevel);
        $this->includeOtherTransfersInServiceLevel->setName('includeOtherTransfersInServiceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeOtherTransfersInServiceLevel
     */
    public function getIncludeOtherTransfersInServiceLevel()
    {
        return $this->includeOtherTransfersInServiceLevel->getValue();
    }

    /**
     * 
     */
    public function setAbandonedCallsInServiceLevel($abandonedCallsInServiceLevel = null)
    {
        if (!$abandonedCallsInServiceLevel) return $this;
        $this->abandonedCallsInServiceLevel = new SimpleContent($abandonedCallsInServiceLevel);
        $this->abandonedCallsInServiceLevel->setName('abandonedCallsInServiceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $abandonedCallsInServiceLevel
     */
    public function getAbandonedCallsInServiceLevel()
    {
        return $this->abandonedCallsInServiceLevel->getValue();
    }

    /**
     * 
     */
    public function setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds = null)
    {
        if (!$abandonedCallIntervalSeconds) return $this;
        $this->abandonedCallIntervalSeconds = new SimpleContent($abandonedCallIntervalSeconds);
        $this->abandonedCallIntervalSeconds->setName('abandonedCallIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $abandonedCallIntervalSeconds
     */
    public function getAbandonedCallIntervalSeconds()
    {
        return $this->abandonedCallIntervalSeconds->getValue();
    }
}

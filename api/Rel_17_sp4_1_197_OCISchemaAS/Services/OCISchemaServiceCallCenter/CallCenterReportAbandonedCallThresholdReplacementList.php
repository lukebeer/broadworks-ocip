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
 * A list of call center reporting abandoned call threshold seconds that replaces a previously configured list.
 */
class CallCenterReportAbandonedCallThresholdReplacementList extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterReportAbandonedCallThresholdReplacementList';
    protected $abandonedCallThresholdSeconds;

    public function __construct(
         $abandonedCallThresholdSeconds = null
    ) {
        $this->setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds);
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
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds = new SimpleContent($abandonedCallThresholdSeconds);
        $this->abandonedCallThresholdSeconds->setName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $abandonedCallThresholdSeconds
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return ($this->abandonedCallThresholdSeconds) ? $this->abandonedCallThresholdSeconds->getValue() : null;
    }
}

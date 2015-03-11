<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportAbandonedCallThresholdReplacementList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of call center reporting abandoned call threshold seconds that replaces a previously configured list.
 */
class CallCenterReportAbandonedCallThresholdReplacementList extends ComplexType implements ComplexInterface
{
    public    $responseType                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportAbandonedCallThresholdReplacementList';
    public    $name                          = 'CallCenterReportAbandonedCallThresholdReplacementList';
    protected $abandonedCallThresholdSeconds = null;

    public function __construct(
         $abandonedCallThresholdSeconds = null
    ) {
        $this->setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds);
    }

    /**
     * @return CallCenterReportAbandonedCallThresholdReplacementList
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
        if (!$abandonedCallThresholdSeconds) return $this;
        $this->abandonedCallThresholdSeconds = new SimpleContent($abandonedCallThresholdSeconds);
        $this->abandonedCallThresholdSeconds->setName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds->getValue();
    }
}

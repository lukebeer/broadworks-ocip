<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Either all agents or 2 list of agents: one for current and one for past (deleted) agents. 
 *          This is used when an admin reads a Scheduled Report.
 *          Each agent table has the following column headings:
 *          "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class CallCenterScheduledReportAgentSelectionAdminRead extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterScheduledReportAgentSelectionAdminRead';

    public function __construct(    ) {
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}

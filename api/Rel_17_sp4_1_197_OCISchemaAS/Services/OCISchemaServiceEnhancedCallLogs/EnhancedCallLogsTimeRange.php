<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Time range used to filter call logs.
 */
class EnhancedCallLogsTimeRange extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange';
    public    $name          = 'EnhancedCallLogsTimeRange';
    protected $startDateTime = null;
    protected $endDateTime   = null;

    public function __construct(
         $startDateTime,
         $endDateTime
    ) {
        $this->setStartDateTime($startDateTime);
        $this->setEndDateTime($endDateTime);
    }

    /**
     * @return EnhancedCallLogsTimeRange
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStartDateTime($startDateTime = null)
    {
        if (!$startDateTime) return $this;
        $this->startDateTime = new SimpleContent($startDateTime);
        $this->startDateTime->setName('startDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartDateTime()
    {
        return $this->startDateTime->getValue();
    }

    /**
     * 
     */
    public function setEndDateTime($endDateTime = null)
    {
        if (!$endDateTime) return $this;
        $this->endDateTime = new SimpleContent($endDateTime);
        $this->endDateTime->setName('endDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndDateTime()
    {
        return $this->endDateTime->getValue();
    }
}

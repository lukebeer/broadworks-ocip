<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Malicious Call Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class MaliciousCallTraceTimePeriod extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod';
    public    $name          = 'MaliciousCallTraceTimePeriod';
    protected $startDateTime = null;
    protected $stopDateTime  = null;

    public function __construct(
         $startDateTime,
         $stopDateTime
    ) {
        $this->setStartDateTime($startDateTime);
        $this->setStopDateTime($stopDateTime);
    }

    /**
     * @return MaliciousCallTraceTimePeriod
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
    public function setStopDateTime($stopDateTime = null)
    {
        if (!$stopDateTime) return $this;
        $this->stopDateTime = new SimpleContent($stopDateTime);
        $this->stopDateTime->setName('stopDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStopDateTime()
    {
        return $this->stopDateTime->getValue();
    }
}

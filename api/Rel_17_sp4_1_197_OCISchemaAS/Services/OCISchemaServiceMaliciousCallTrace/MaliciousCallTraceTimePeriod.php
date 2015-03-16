<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
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
    public    $elementName = 'MaliciousCallTraceTimePeriod';
    protected $startDateTime;
    protected $stopDateTime;

    public function __construct(
         $startDateTime = '',
         $stopDateTime = ''
    ) {
        $this->setStartDateTime($startDateTime);
        $this->setStopDateTime($stopDateTime);
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
    public function setStartDateTime($startDateTime = null)
    {
        $this->startDateTime = new SimpleContent($startDateTime);
        $this->startDateTime->setElementName('startDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startDateTime
     */
    public function getStartDateTime()
    {
        return ($this->startDateTime)
            ? $this->startDateTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStopDateTime($stopDateTime = null)
    {
        $this->stopDateTime = new SimpleContent($stopDateTime);
        $this->stopDateTime->setElementName('stopDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $stopDateTime
     */
    public function getStopDateTime()
    {
        return ($this->stopDateTime)
            ? $this->stopDateTime->getElementValue()
            : null;
    }
}

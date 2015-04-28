<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCustomerOriginatedTrace; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Customer Originated Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCustomerOriginatedTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCustomerOriginatedTraceModifyRequest';
    protected $screenMaliciousCallers;

    public function __construct(
         $screenMaliciousCallers = null
    ) {
        $this->setScreenMaliciousCallers($screenMaliciousCallers);
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
    public function setScreenMaliciousCallers($screenMaliciousCallers = null)
    {
        $this->screenMaliciousCallers = new PrimitiveType($screenMaliciousCallers);
        $this->screenMaliciousCallers->setElementName('screenMaliciousCallers');
        return $this;
    }

    /**
     * 
     * @return boolean $screenMaliciousCallers
     */
    public function getScreenMaliciousCallers()
    {
        return ($this->screenMaliciousCallers)
            ? $this->screenMaliciousCallers->getElementValue()
            : null;
    }
}

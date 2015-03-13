<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCustomerOriginatedTrace; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Customer Originated Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCustomerOriginatedTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemCustomerOriginatedTraceModifyRequest';
    protected $screenMaliciousCallers = null;

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
        if (!$screenMaliciousCallers) return $this;
        $this->screenMaliciousCallers = new PrimitiveType($screenMaliciousCallers);
        $this->screenMaliciousCallers->setName('screenMaliciousCallers');
        return $this;
    }

    /**
     * 
     * @return boolean $screenMaliciousCallers
     */
    public function getScreenMaliciousCallers()
    {
        return $this->screenMaliciousCallers->getValue();
    }
}

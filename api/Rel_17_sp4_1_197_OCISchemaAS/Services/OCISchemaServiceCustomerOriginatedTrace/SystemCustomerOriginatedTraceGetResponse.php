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
 * Response to SystemCustomerOriginatedTraceGetRequest.
 */
class SystemCustomerOriginatedTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemCustomerOriginatedTraceGetResponse';
    protected $screenMaliciousCallers = null;

    /**
     * @return SystemCustomerOriginatedTraceGetResponse
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
     * @return xs:boolean
     */
    public function getScreenMaliciousCallers()
    {
        return $this->screenMaliciousCallers->getValue();
    }
}

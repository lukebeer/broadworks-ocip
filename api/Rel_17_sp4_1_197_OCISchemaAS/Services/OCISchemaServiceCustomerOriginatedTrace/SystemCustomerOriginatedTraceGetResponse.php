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
    public    $name = 'SystemCustomerOriginatedTraceGetResponse';
    protected $screenMaliciousCallers;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCustomerOriginatedTrace\SystemCustomerOriginatedTraceGetResponse $response
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
        $this->screenMaliciousCallers->setName('screenMaliciousCallers');
        return $this;
    }

    /**
     * 
     * @return boolean $screenMaliciousCallers
     */
    public function getScreenMaliciousCallers()
    {
        return ($this->screenMaliciousCallers) ? $this->screenMaliciousCallers->getValue() : null;
    }
}

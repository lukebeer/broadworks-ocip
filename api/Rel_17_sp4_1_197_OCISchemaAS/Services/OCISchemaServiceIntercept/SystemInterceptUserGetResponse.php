<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemInterceptUserGetRequest.
 */
class SystemInterceptUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = 'SystemInterceptUserGetResponse';
    protected $emergencyAndRepairIntercept = null;

    /**
     * @return SystemInterceptUserGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept = null)
    {
        if (!$emergencyAndRepairIntercept) return $this;
        $this->emergencyAndRepairIntercept = new PrimitiveType($emergencyAndRepairIntercept);
        $this->emergencyAndRepairIntercept->setName('emergencyAndRepairIntercept');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEmergencyAndRepairIntercept()
    {
        return $this->emergencyAndRepairIntercept->getValue();
    }
}

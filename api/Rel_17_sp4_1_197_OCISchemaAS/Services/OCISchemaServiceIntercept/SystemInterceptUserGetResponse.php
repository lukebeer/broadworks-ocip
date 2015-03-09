<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept\SystemInterceptUserGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemInterceptUserGetRequest.
 */
class SystemInterceptUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
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
        $this->emergencyAndRepairIntercept = (boolean) $emergencyAndRepairIntercept;
    }

    /**
     * 
     */
    public function getEmergencyAndRepairIntercept()
    {
        return (!$this->emergencyAndRepairIntercept) ?: $this->emergencyAndRepairIntercept;
    }
}

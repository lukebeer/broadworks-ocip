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
 * Modify the system-level intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemInterceptUserModifyRequest';
    protected $emergencyAndRepairIntercept;

    public function __construct(
         $emergencyAndRepairIntercept = null
    ) {
        $this->setEmergencyAndRepairIntercept($emergencyAndRepairIntercept);
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
    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept = null)
    {
        $this->emergencyAndRepairIntercept = new PrimitiveType($emergencyAndRepairIntercept);
        $this->emergencyAndRepairIntercept->setName('emergencyAndRepairIntercept');
        return $this;
    }

    /**
     * 
     * @return boolean $emergencyAndRepairIntercept
     */
    public function getEmergencyAndRepairIntercept()
    {
        return ($this->emergencyAndRepairIntercept) ? $this->emergencyAndRepairIntercept->getValue() : null;
    }
}

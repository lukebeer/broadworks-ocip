<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePhysicalLocation; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify Physical Location system parameters.
 *          The response is either SuccessResponse or ErrorResponse.
 */
class SystemPhysicalLocationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPhysicalLocationModifyRequest';
    protected $alwaysAllowEmergencyCalls;

    public function __construct(
         $alwaysAllowEmergencyCalls = null
    ) {
        $this->setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls);
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
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls = null)
    {
        $this->alwaysAllowEmergencyCalls = new PrimitiveType($alwaysAllowEmergencyCalls);
        $this->alwaysAllowEmergencyCalls->setElementName('alwaysAllowEmergencyCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysAllowEmergencyCalls
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return ($this->alwaysAllowEmergencyCalls)
            ? $this->alwaysAllowEmergencyCalls->getElementValue()
            : null;
    }
}

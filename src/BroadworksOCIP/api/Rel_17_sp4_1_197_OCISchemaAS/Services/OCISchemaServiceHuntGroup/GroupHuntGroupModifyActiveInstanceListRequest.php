<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceActivation;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to set the active status of Hunt Group instances.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupHuntGroupModifyActiveInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupHuntGroupModifyActiveInstanceListRequest';
    protected $serviceActivation;

    public function __construct(
         $serviceActivation = null
    ) {
        $this->setServiceActivation($serviceActivation);
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
    public function setServiceActivation(ServiceActivation $serviceActivation = null)
    {
        $this->serviceActivation = ($serviceActivation InstanceOf ServiceActivation)
             ? $serviceActivation
             : new ServiceActivation($serviceActivation);
        $this->serviceActivation->setElementName('serviceActivation');
        return $this;
    }

    /**
     * 
     * @return ServiceActivation $serviceActivation
     */
    public function getServiceActivation()
    {
        return $this->serviceActivation;
    }
}

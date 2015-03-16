<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to set the active status of Instant Conferencing instances.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantConferencingModifyActiveInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantConferencingModifyActiveInstanceListRequest';
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

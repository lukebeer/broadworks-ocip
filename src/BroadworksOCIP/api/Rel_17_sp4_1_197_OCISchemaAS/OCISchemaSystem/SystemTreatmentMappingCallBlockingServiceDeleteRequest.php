<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CallBlockingService;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingCallBlockingServiceDeleteRequest';
    protected $callBlockingService;

    public function __construct(
         $callBlockingService = ''
    ) {
        $this->setCallBlockingService($callBlockingService);
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
    public function setCallBlockingService($callBlockingService = null)
    {
        $this->callBlockingService = ($callBlockingService InstanceOf CallBlockingService)
             ? $callBlockingService
             : new CallBlockingService($callBlockingService);
        $this->callBlockingService->setElementName('callBlockingService');
        return $this;
    }

    /**
     * 
     * @return CallBlockingService $callBlockingService
     */
    public function getCallBlockingService()
    {
        return ($this->callBlockingService)
            ? $this->callBlockingService->getElementValue()
            : null;
    }
}

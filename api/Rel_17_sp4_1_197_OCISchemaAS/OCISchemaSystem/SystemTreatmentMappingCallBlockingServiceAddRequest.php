<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemTreatmentMappingCallBlockingServiceAddRequest';
    protected $callBlockingService = null;
    protected $treatmentId         = null;

    public function __construct(
         $callBlockingService,
         $treatmentId
    ) {
        $this->setCallBlockingService($callBlockingService);
        $this->setTreatmentId($treatmentId);
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
        if (!$callBlockingService) return $this;
        $this->callBlockingService = ($callBlockingService InstanceOf CallBlockingService)
             ? $callBlockingService
             : new CallBlockingService($callBlockingService);
        $this->callBlockingService->setName('callBlockingService');
        return $this;
    }

    /**
     * 
     * @return CallBlockingService $callBlockingService
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService->getValue();
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        if (!$treatmentId) return $this;
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $treatmentId
     */
    public function getTreatmentId()
    {
        return $this->treatmentId->getValue();
    }
}

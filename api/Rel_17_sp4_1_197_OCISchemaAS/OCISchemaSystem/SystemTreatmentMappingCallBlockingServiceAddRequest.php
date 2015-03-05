<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallBlockingService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callBlockingService,
             $treatmentId
    ) {
        $this->callBlockingService = $callBlockingService;
        $this->treatmentId         = new TreatmentId($treatmentId);
        $this->args                = func_get_args();
    }

    public function setCallBlockingService($callBlockingService)
    {
        $callBlockingService and $this->callBlockingService = new CallBlockingService($callBlockingService);
    }

    public function getCallBlockingService()
    {
        return (!$this->callBlockingService) ?: $this->callBlockingService->value();
    }

    public function setTreatmentId($treatmentId)
    {
        $treatmentId and $this->treatmentId = new TreatmentId($treatmentId);
    }

    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->value();
    }
}

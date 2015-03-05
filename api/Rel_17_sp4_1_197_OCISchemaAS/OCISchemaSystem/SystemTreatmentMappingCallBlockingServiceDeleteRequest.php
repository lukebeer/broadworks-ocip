<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallBlockingService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callBlockingService
    ) {
        $this->callBlockingService = $callBlockingService;
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
}

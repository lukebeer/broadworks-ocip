<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkServerTreatment;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a NS Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $nsTreatment
    ) {
        $this->nsTreatment = $nsTreatment;
        $this->args        = func_get_args();
    }

    public function setNsTreatment($nsTreatment)
    {
        $nsTreatment and $this->nsTreatment = new NetworkServerTreatment($nsTreatment);
    }

    public function getNsTreatment()
    {
        return (!$this->nsTreatment) ?: $this->nsTreatment->value();
    }
}

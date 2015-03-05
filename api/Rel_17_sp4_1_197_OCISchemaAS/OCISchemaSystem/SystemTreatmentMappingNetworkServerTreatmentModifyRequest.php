<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkServerTreatment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the fields for a Network Server Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $nsTreatment,
             $treatmentId=null
    ) {
        $this->nsTreatment = $nsTreatment;
        $this->treatmentId = new TreatmentId($treatmentId);
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

    public function setTreatmentId($treatmentId)
    {
        $treatmentId and $this->treatmentId = new TreatmentId($treatmentId);
    }

    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->value();
    }
}

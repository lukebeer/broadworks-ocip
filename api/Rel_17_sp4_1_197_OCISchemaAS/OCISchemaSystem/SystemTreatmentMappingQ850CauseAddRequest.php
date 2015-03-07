<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseAddRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $q850CauseValue  = null;
    protected $treatmentId     = null;

    public function __construct(
         $q850CauseValue,
         $treatmentId
    ) {
        $this->setQ850CauseValue($q850CauseValue);
        $this->setTreatmentId($treatmentId);
    }

    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
    }

    public function getQ850CauseValue()
    {
        return (!$this->q850CauseValue) ?: $this->q850CauseValue->value();
    }

    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
    }

    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->value();
    }
}

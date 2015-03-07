<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get all the attributes of a configurable treatment.
 *             The response is either a SystemConfigurableTreatmentGetResponse or an ErrorResponse.
 *             Replaced By: SystemConfigurableTreatmentGetRequest16
 */
class SystemConfigurableTreatmentGetRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $treatmentId  = null;

    public function __construct(
         $treatmentId
    ) {
        $this->setTreatmentId($treatmentId);
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

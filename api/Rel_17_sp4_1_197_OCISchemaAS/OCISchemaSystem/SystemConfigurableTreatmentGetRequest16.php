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


/**
     * Get all the attributes of a configurable treatment.
 *         The response is either a SystemConfigurableTreatmentGetResponse16 or an ErrorResponse.
 */
class SystemConfigurableTreatmentGetRequest16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableTreatmentGetResponse16';
    public    $name        = __CLASS__;
    protected $treatmentId = null;

    public function __construct(
         $treatmentId
    ) {
        $this->setTreatmentId($treatmentId);
    }

    /**
     * Configurable Treatment Name
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
    }

    /**
     * Configurable Treatment Name
     */
    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->getValue();
    }
}

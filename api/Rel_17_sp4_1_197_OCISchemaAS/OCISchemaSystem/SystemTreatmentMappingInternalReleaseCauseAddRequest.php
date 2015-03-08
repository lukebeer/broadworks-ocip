<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\InternalReleaseCause16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingInternalReleaseCauseAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $internalReleaseCause = null;
    protected $treatmentId          = null;

    public function __construct(
         $internalReleaseCause,
         $treatmentId
    ) {
        $this->setInternalReleaseCause($internalReleaseCause);
        $this->setTreatmentId($treatmentId);
    }

    /**
     * Possible values for the protocol-neutral internal release cause.
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
    }

    /**
     * Possible values for the protocol-neutral internal release cause.
     */
    public function getInternalReleaseCause()
    {
        return (!$this->internalReleaseCause) ?: $this->internalReleaseCause->getValue();
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

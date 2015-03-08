<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPFailureStatusCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the fields for a Network SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkSIPStatusModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $sipStatusCode = null;
    protected $treatmentId   = null;

    public function __construct(
         $sipStatusCode,
         $treatmentId = null
    ) {
        $this->setSipStatusCode($sipStatusCode);
        $this->setTreatmentId($treatmentId);
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function setSipStatusCode($sipStatusCode = null)
    {
        $this->sipStatusCode = ($sipStatusCode InstanceOf SIPFailureStatusCode)
             ? $sipStatusCode
             : new SIPFailureStatusCode($sipStatusCode);
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function getSipStatusCode()
    {
        return (!$this->sipStatusCode) ?: $this->sipStatusCode->getValue();
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

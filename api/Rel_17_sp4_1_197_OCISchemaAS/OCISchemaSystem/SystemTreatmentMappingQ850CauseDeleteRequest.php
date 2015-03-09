<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingQ850CauseDeleteResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $q850CauseValue = null;

    public function __construct(
         $q850CauseValue
    ) {
        $this->setQ850CauseValue($q850CauseValue);
    }

    /**
     * @return SystemTreatmentMappingQ850CauseDeleteResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * The possible range values for Q850 Cause Value.
     */
    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
    }

    /**
     * The possible range values for Q850 Cause Value.
     */
    public function getQ850CauseValue()
    {
        return (!$this->q850CauseValue) ?: $this->q850CauseValue->getValue();
    }
}

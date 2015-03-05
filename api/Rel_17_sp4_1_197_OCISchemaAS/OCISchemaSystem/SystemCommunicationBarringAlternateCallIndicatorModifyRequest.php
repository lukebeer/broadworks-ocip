<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Communication Barring Alternate Call Indicator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringAlternateCallIndicatorModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $alternateCallIndicator,
             $networkServerAlternateCallIndicator=null
    ) {
        $this->alternateCallIndicator              = new CommunicationBarringAlternateCallIndicator($alternateCallIndicator);
        $this->networkServerAlternateCallIndicator = $networkServerAlternateCallIndicator;
        $this->args                                = func_get_args();
    }

    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $alternateCallIndicator and $this->alternateCallIndicator = new CommunicationBarringAlternateCallIndicator($alternateCallIndicator);
    }

    public function getAlternateCallIndicator()
    {
        return (!$this->alternateCallIndicator) ?: $this->alternateCallIndicator->value();
    }

    public function setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator)
    {
        $networkServerAlternateCallIndicator and $this->networkServerAlternateCallIndicator = new NetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator);
    }

    public function getNetworkServerAlternateCallIndicator()
    {
        return (!$this->networkServerAlternateCallIndicator) ?: $this->networkServerAlternateCallIndicator->value();
    }
}

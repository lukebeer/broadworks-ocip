<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Communication Barring Alternate Call Indicator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringAlternateCallIndicatorModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $alternateCallIndicator               = null;
    protected $networkServerAlternateCallIndicator  = null;

    public function __construct(
         $alternateCallIndicator,
         $networkServerAlternateCallIndicator = null
    ) {
        $this->setAlternateCallIndicator($alternateCallIndicator);
        $this->setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator);
    }

    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $alternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($alternateCallIndicator);
    }

    public function getAlternateCallIndicator()
    {
        return (!$this->alternateCallIndicator) ?: $this->alternateCallIndicator->value();
    }

    public function setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator = null)
    {
        $this->networkServerAlternateCallIndicator = ($networkServerAlternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $networkServerAlternateCallIndicator
             : new NetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator);
    }

    public function getNetworkServerAlternateCallIndicator()
    {
        return (!$this->networkServerAlternateCallIndicator) ?: $this->networkServerAlternateCallIndicator->value();
    }
}

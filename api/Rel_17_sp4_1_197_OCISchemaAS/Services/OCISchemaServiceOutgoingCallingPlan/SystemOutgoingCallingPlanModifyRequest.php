<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Outgoing Calling Plan.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOutgoingCallingPlanModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $directTransferScreening=null,
             $enableEnhancedTollCallTyping=null
    ) {
        $this->directTransferScreening      = $directTransferScreening;
        $this->enableEnhancedTollCallTyping = $enableEnhancedTollCallTyping;
        $this->args                         = func_get_args();
    }

    public function setDirectTransferScreening($directTransferScreening)
    {
        $directTransferScreening and $this->directTransferScreening = new xs:boolean($directTransferScreening);
    }

    public function getDirectTransferScreening()
    {
        return (!$this->directTransferScreening) ?: $this->directTransferScreening->value();
    }

    public function setEnableEnhancedTollCallTyping($enableEnhancedTollCallTyping)
    {
        $enableEnhancedTollCallTyping and $this->enableEnhancedTollCallTyping = new xs:boolean($enableEnhancedTollCallTyping);
    }

    public function getEnableEnhancedTollCallTyping()
    {
        return (!$this->enableEnhancedTollCallTyping) ?: $this->enableEnhancedTollCallTyping->value();
    }
}

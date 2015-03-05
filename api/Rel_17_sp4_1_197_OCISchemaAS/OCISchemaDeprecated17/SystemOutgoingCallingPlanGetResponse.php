<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemOutgoingCallingPlanGetRequest.
 */
class SystemOutgoingCallingPlanGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $directTransferScreening
    ) {
        $this->directTransferScreening = $directTransferScreening;
        $this->args                    = func_get_args();
    }

    public function setDirectTransferScreening($directTransferScreening)
    {
        $directTransferScreening and $this->directTransferScreening = new xs:boolean($directTransferScreening);
    }

    public function getDirectTransferScreening()
    {
        return (!$this->directTransferScreening) ?: $this->directTransferScreening->value();
    }
}

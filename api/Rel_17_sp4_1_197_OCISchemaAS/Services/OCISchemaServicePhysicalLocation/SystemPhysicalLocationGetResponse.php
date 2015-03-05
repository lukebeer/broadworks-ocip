<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePhysicalLocation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemPhysicalLocationGetRequest.
 *         Contains a list of system Physical Location parameters.
 */
class SystemPhysicalLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $alwaysAllowEmergencyCalls
    ) {
        $this->alwaysAllowEmergencyCalls = $alwaysAllowEmergencyCalls;
        $this->args                      = func_get_args();
    }

    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls)
    {
        $alwaysAllowEmergencyCalls and $this->alwaysAllowEmergencyCalls = new xs:boolean($alwaysAllowEmergencyCalls);
    }

    public function getAlwaysAllowEmergencyCalls()
    {
        return (!$this->alwaysAllowEmergencyCalls) ?: $this->alwaysAllowEmergencyCalls->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePhysicalLocation; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify Physical Location system parameters.
 *          The response is either SuccessResponse or ErrorResponse.
 */
class SystemPhysicalLocationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $alwaysAllowEmergencyCalls = null;

    public function __construct(
         $alwaysAllowEmergencyCalls = null
    ) {
        $this->setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls);
    }

    /**
     * 
     */
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls = null)
    {
        $this->alwaysAllowEmergencyCalls = (boolean) $alwaysAllowEmergencyCalls;
    }

    /**
     * 
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return (!$this->alwaysAllowEmergencyCalls) ?: $this->alwaysAllowEmergencyCalls->getValue();
    }
}

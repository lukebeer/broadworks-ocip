<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to set the active status of Route Point instances.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointModifyActiveInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceActivation  = null;

    public function __construct(
         ServiceActivation $serviceActivation = null
    ) {
        $this->setServiceActivation($serviceActivation);
    }

    public function setServiceActivation(ServiceActivation $serviceActivation = null)
    {
    }

    public function getServiceActivation()
    {
        return (!$this->serviceActivation) ?: $this->serviceActivation->value();
    }
}

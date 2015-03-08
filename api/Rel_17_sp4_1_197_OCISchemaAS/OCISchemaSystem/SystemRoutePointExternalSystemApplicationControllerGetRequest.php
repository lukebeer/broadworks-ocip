<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get a list of Application Controllers assigned to the Route Point External Systems specified.
 *       The response is either SystemRoutePointExternalSystemApplicationControllerGetResponse or ErrorResponse.
 */
class SystemRoutePointExternalSystemApplicationControllerGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemApplicationControllerGetResponse';
    public    $name           = __CLASS__;
    protected $externalSystem = null;

    public function __construct(
         $externalSystem
    ) {
        $this->setExternalSystem($externalSystem);
    }

    /**
     * The Route Point External System's name.
     */
    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
    }

    /**
     * The Route Point External System's name.
     */
    public function getExternalSystem()
    {
        return (!$this->externalSystem) ?: $this->externalSystem->getValue();
    }
}

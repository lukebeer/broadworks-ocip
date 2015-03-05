<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationControllerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add an application controller to Route Point External System.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutePointExternalSystemApplicationControllerAddListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $applicationController=null
    ) {
        $this->name                  = new RoutePointExternalSystem($name);
        $this->applicationController = $applicationController;
        $this->args                  = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new RoutePointExternalSystem($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setApplicationController($applicationController)
    {
        $applicationController and $this->applicationController = new ApplicationControllerName($applicationController);
    }

    public function getApplicationController()
    {
        return (!$this->applicationController) ?: $this->applicationController->value();
    }
}

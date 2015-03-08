<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExternalSystemDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add an Route Point External System, which is a cluster of Application 
 *       Controllers.     
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutePointExternalSystemAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $name        = null;
    protected $description = null;

    public function __construct(
         $name,
         $description = null
    ) {
        $this->setName($name);
        $this->setDescription($description);
    }

    /**
     * The Route Point External System's name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf RoutePointExternalSystem)
             ? $name
             : new RoutePointExternalSystem($name);
    }

    /**
     * The Route Point External System's name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * The Route Point External System's description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ExternalSystemDescription)
             ? $description
             : new ExternalSystemDescription($description);
    }

    /**
     * The Route Point External System's description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}

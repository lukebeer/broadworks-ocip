<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a digit routing table entry in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingModifyTranslationRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $digits     = null;
    protected $routeName  = null;

    public function __construct(
         $digits,
         $routeName = null
    ) {
        $this->setDigits($digits);
        $this->setRouteName($routeName);
    }

    public function setDigits($digits = null)
    {
        $this->digits = ($digits InstanceOf RoutingDigits)
             ? $digits
             : new RoutingDigits($digits);
    }

    public function getDigits()
    {
        return (!$this->digits) ?: $this->digits->value();
    }

    public function setRouteName($routeName = null)
    {
        $this->routeName = ($routeName InstanceOf RouteName)
             ? $routeName
             : new RouteName($routeName);
    }

    public function getRouteName()
    {
        return (!$this->routeName) ?: $this->routeName->value();
    }
}

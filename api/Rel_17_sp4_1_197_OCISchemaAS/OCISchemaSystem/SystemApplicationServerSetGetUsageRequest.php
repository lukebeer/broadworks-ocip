<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get list of enterprises, service providers, and service provider groups currently associated to the specified Application Server set.
 *         The response is either SystemApplicationServerSetGetUsageResponse or ErrorResponse.
 */
class SystemApplicationServerSetGetUsageRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name
    ) {
        $this->name = new ApplicationServerSetName($name);
        $this->args = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new ApplicationServerSetName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}

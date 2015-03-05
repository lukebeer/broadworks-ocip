<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupSpeedDial100GetRequest.
 */
class GroupSpeedDial100GetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $prefix
    ) {
        $this->prefix = new SpeedDialPrefix($prefix);
        $this->args   = func_get_args();
    }

    public function setPrefix($prefix)
    {
        $prefix and $this->prefix = new SpeedDialPrefix($prefix);
    }

    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->value();
    }
}

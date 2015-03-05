<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDial100Entry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSpeedDial100GetListRequest.
 */
class UserSpeedDial100GetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $prefix,
             $speedDialEntry=null
    ) {
        $this->prefix         = new SpeedDialPrefix($prefix);
        $this->speedDialEntry = $speedDialEntry;
        $this->args           = func_get_args();
    }

    public function setPrefix($prefix)
    {
        $prefix and $this->prefix = new SpeedDialPrefix($prefix);
    }

    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->value();
    }

    public function setSpeedDialEntry($speedDialEntry)
    {
        $speedDialEntry and $this->speedDialEntry = new SpeedDial100Entry($speedDialEntry);
    }

    public function getSpeedDialEntry()
    {
        return (!$this->speedDialEntry) ?: $this->speedDialEntry->value();
    }
}

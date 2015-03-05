<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBasicCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserBasicCallLogsGetListRequest14sp4.
 */
class UserBasicCallLogsGetListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             CallLogsEntry $placed=null,
             CallLogsEntry $received=null,
             CallLogsEntry $missed=null
    ) {
        $this->placed   = $placed;
        $this->received = $received;
        $this->missed   = $missed;
        $this->args     = func_get_args();
    }

    public function setPlaced($placed)
    {
        $placed and $this->placed = new CallLogsEntry($placed);
    }

    public function getPlaced()
    {
        return (!$this->placed) ?: $this->placed->value();
    }

    public function setReceived($received)
    {
        $received and $this->received = new CallLogsEntry($received);
    }

    public function getReceived()
    {
        return (!$this->received) ?: $this->received->value();
    }

    public function setMissed($missed)
    {
        $missed and $this->missed = new CallLogsEntry($missed);
    }

    public function getMissed()
    {
        return (!$this->missed) ?: $this->missed->value();
    }
}

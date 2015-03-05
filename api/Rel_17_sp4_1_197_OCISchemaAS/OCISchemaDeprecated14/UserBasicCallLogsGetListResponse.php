<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BasicCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserBasicCallLogsGetListRequest.
 *         Replaced By: UserBasicCallLogsGetListResponse14sp4
 */
class UserBasicCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $placed=null,
             $received=null,
             $missed=null
    ) {
        $this->placed   = $placed;
        $this->received = $received;
        $this->missed   = $missed;
        $this->args     = func_get_args();
    }

    public function setPlaced($placed)
    {
        $placed and $this->placed = new BasicCallLogsEntry($placed);
    }

    public function getPlaced()
    {
        return (!$this->placed) ?: $this->placed->value();
    }

    public function setReceived($received)
    {
        $received and $this->received = new BasicCallLogsEntry($received);
    }

    public function getReceived()
    {
        return (!$this->received) ?: $this->received->value();
    }

    public function setMissed($missed)
    {
        $missed and $this->missed = new BasicCallLogsEntry($missed);
    }

    public function getMissed()
    {
        return (!$this->missed) ?: $this->missed->value();
    }
}

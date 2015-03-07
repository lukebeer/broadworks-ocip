<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\BasicCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserBasicCallLogsGetListRequest.
 *         Replaced By: UserBasicCallLogsGetListResponse14sp4
 */
class UserBasicCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $placed    = null;
    protected $received  = null;
    protected $missed    = null;


    public function setPlaced(BasicCallLogsEntry $placed = null)
    {
    }

    public function getPlaced()
    {
        return (!$this->placed) ?: $this->placed->value();
    }

    public function setReceived(BasicCallLogsEntry $received = null)
    {
    }

    public function getReceived()
    {
        return (!$this->received) ?: $this->received->value();
    }

    public function setMissed(BasicCallLogsEntry $missed = null)
    {
    }

    public function getMissed()
    {
        return (!$this->missed) ?: $this->missed->value();
    }
}

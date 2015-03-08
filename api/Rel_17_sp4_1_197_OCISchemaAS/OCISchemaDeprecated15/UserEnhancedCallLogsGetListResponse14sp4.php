<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserEnhancedCallLogsGetListRequest14sp4.
 *             Replaced by: UserEnhancedCallLogsGetListResponse16
 */
class UserEnhancedCallLogsGetListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $placed   = null;
    protected $received = null;
    protected $missed   = null;


    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function setPlaced(CallLogsEntry $placed = null)
    {
        $this->placed =  $placed;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function getPlaced()
    {
        return (!$this->placed) ?: $this->placed->getValue();
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function setReceived(CallLogsEntry $received = null)
    {
        $this->received =  $received;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function getReceived()
    {
        return (!$this->received) ?: $this->received->getValue();
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function setMissed(CallLogsEntry $missed = null)
    {
        $this->missed =  $missed;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function getMissed()
    {
        return (!$this->missed) ?: $this->missed->getValue();
    }
}

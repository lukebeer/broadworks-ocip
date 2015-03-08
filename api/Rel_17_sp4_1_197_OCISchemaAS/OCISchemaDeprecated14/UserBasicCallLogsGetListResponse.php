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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserBasicCallLogsGetListResponse';
    public    $name     = __CLASS__;
    protected $placed   = null;
    protected $received = null;
    protected $missed   = null;


    /**
     * Call Log entry describing a placed, received, or missed call.
     *         Replaced By: CallLogsEntry
     */
    public function setPlaced(BasicCallLogsEntry $placed = null)
    {
        $this->placed = BasicCallLogsEntry $placed;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     *         Replaced By: CallLogsEntry
     */
    public function getPlaced()
    {
        return (!$this->placed) ?: $this->placed->getValue();
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     *         Replaced By: CallLogsEntry
     */
    public function setReceived(BasicCallLogsEntry $received = null)
    {
        $this->received = BasicCallLogsEntry $received;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     *         Replaced By: CallLogsEntry
     */
    public function getReceived()
    {
        return (!$this->received) ?: $this->received->getValue();
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     *         Replaced By: CallLogsEntry
     */
    public function setMissed(BasicCallLogsEntry $missed = null)
    {
        $this->missed = BasicCallLogsEntry $missed;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     *         Replaced By: CallLogsEntry
     */
    public function getMissed()
    {
        return (!$this->missed) ?: $this->missed->getValue();
    }
}
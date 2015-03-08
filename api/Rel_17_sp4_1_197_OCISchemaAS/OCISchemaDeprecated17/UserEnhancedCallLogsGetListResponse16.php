<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MixedCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserEnhancedCallLogsGetListRequest16.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest16, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 */
class UserEnhancedCallLogsGetListResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16';
    public    $name              = __CLASS__;
    protected $totalNumberOfRows = null;
    protected $callLog           = null;


    /**
     * 
     */
    public function setTotalNumberOfRows($totalNumberOfRows = null)
    {
        $this->totalNumberOfRows = (int) $totalNumberOfRows;
    }

    /**
     * 
     */
    public function getTotalNumberOfRows()
    {
        return (!$this->totalNumberOfRows) ?: $this->totalNumberOfRows->getValue();
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function setCallLog(MixedCallLogsEntry $callLog = null)
    {
        $this->callLog = MixedCallLogsEntry $callLog;
    }

    /**
     * Call Log entry describing a placed, received, or missed call.
     */
    public function getCallLog()
    {
        return (!$this->callLog) ?: $this->callLog->getValue();
    }
}
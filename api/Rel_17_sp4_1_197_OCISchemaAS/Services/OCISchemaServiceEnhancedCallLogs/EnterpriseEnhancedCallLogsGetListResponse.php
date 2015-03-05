<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMixedCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseEnhancedCallLogsGetListRequest.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the EnterpriseEnhancedCallLogsGetListRequest, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of ExtendedMixedCallLogsEntry will be returned if the call logs are stored on DBS. Otherwise, an error response will be returned.
 *         The result is sorted by date/time of the call.
 */
class EnterpriseEnhancedCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $totalNumberOfRows,
             $extendedCallLog=null
    ) {
        $this->totalNumberOfRows = $totalNumberOfRows;
        $this->extendedCallLog   = $extendedCallLog;
        $this->args              = func_get_args();
    }

    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $totalNumberOfRows and $this->totalNumberOfRows = new xs:int($totalNumberOfRows);
    }

    public function getTotalNumberOfRows()
    {
        return (!$this->totalNumberOfRows) ?: $this->totalNumberOfRows->value();
    }

    public function setExtendedCallLog($extendedCallLog)
    {
        $extendedCallLog and $this->extendedCallLog = new ExtendedMixedCallLogsEntry($extendedCallLog);
    }

    public function getExtendedCallLog()
    {
        return (!$this->extendedCallLog) ?: $this->extendedCallLog->value();
    }
}

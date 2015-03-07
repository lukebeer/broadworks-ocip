<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserEnhancedCallLogsGetListRequest17sp4.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest17sp4, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *         A list of ExtendedMixedCallLogsEntry will be returned if the call logs are stored on DBS
 *         The logs are sorted by date/time of the call.
 */
class UserEnhancedCallLogsGetListResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $totalNumberOfRows  = null;


    public function setTotalNumberOfRows(xs:int $totalNumberOfRows = null)
    {
    }

    public function getTotalNumberOfRows()
    {
        return (!$this->totalNumberOfRows) ?: $this->totalNumberOfRows->value();
    }
}

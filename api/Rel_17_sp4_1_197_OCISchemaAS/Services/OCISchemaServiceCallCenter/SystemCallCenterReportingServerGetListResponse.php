<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallCenterReportingServerGetListRequest.  The table columns are:
 *         "Name", "URL", "Net Address", and "Description".
 */
class SystemCallCenterReportingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $reportingServerTable
    ) {
        $this->reportingServerTable = $reportingServerTable;
        $this->args                 = func_get_args();
    }

    public function setReportingServerTable($reportingServerTable)
    {
        $reportingServerTable and $this->reportingServerTable = new core:OCITable($reportingServerTable);
    }

    public function getReportingServerTable()
    {
        return (!$this->reportingServerTable) ?: $this->reportingServerTable->value();
    }
}

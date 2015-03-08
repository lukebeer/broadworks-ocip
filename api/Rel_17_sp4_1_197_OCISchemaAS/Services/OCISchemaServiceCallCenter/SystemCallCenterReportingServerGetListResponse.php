<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemCallCenterReportingServerGetListRequest.  The table columns are:
 *         "Name", "URL", "Net Address", and "Description".
 */
class SystemCallCenterReportingServerGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterReportingServerGetListResponse';
    public    $name                 = __CLASS__;
    protected $reportingServerTable = null;


    /**
     * 
     */
    public function setReportingServerTable(core:OCITable $reportingServerTable = null)
    {
        $this->reportingServerTable = core:OCITable $reportingServerTable;
    }

    /**
     * 
     */
    public function getReportingServerTable()
    {
        return (!$this->reportingServerTable) ?: $this->reportingServerTable->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterSupervisorReportingGetRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterSupervisorReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $reportingServerName  = null;
    protected $supervisorTable      = null;


    public function setReportingServerName($reportingServerName = null)
    {
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
    }

    public function getReportingServerName()
    {
        return (!$this->reportingServerName) ?: $this->reportingServerName->value();
    }

    public function setSupervisorTable(core:OCITable $supervisorTable = null)
    {
    }

    public function getSupervisorTable()
    {
        return (!$this->supervisorTable) ?: $this->supervisorTable->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterGetSupervisorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *         Replaced By: GroupCallCenterSupervisorReportingGetResponse
 */
class GroupCallCenterGetSupervisorListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetSupervisorListResponse';
    public    $name               = __CLASS__;
    protected $reportingServerURL = null;
    protected $supervisorTable    = null;


    /**
     * URL.
     */
    public function setReportingServerURL($reportingServerURL = null)
    {
        $this->reportingServerURL = ($reportingServerURL InstanceOf URL)
             ? $reportingServerURL
             : new URL($reportingServerURL);
    }

    /**
     * URL.
     */
    public function getReportingServerURL()
    {
        return (!$this->reportingServerURL) ?: $this->reportingServerURL->getValue();
    }

    /**
     * 
     */
    public function setSupervisorTable(core:OCITable $supervisorTable = null)
    {
        $this->supervisorTable = core:OCITable $supervisorTable;
    }

    /**
     * 
     */
    public function getSupervisorTable()
    {
        return (!$this->supervisorTable) ?: $this->supervisorTable->getValue();
    }
}

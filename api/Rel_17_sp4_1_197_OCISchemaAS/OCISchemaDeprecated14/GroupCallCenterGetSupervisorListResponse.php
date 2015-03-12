<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetSupervisorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *         Replaced By: GroupCallCenterSupervisorReportingGetResponse
 */
class GroupCallCenterGetSupervisorListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'GroupCallCenterGetSupervisorListResponse';
    protected $reportingServerURL = null;
    protected $supervisorTable    = null;

    /**
     * @return GroupCallCenterGetSupervisorListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportingServerURL($reportingServerURL = null)
    {
        if (!$reportingServerURL) return $this;
        $this->reportingServerURL = ($reportingServerURL InstanceOf URL)
             ? $reportingServerURL
             : new URL($reportingServerURL);
        $this->reportingServerURL->setName('reportingServerURL');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getReportingServerURL()
    {
        return $this->reportingServerURL->getValue();
    }

    /**
     * 
     */
    public function setSupervisorTable(TableType $supervisorTable = null)
    {
        if (!$supervisorTable) return $this;
        $this->supervisorTable = $supervisorTable;
        $this->supervisorTable->setName('supervisorTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterGetSupervisorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *         Replaced By: GroupCallCenterSupervisorReportingGetResponse
 */
class GroupCallCenterGetSupervisorListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetSupervisorListResponse';
    protected $reportingServerURL;
    protected $supervisorTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetSupervisorListResponse $response
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
        $this->reportingServerURL = ($reportingServerURL InstanceOf URL)
             ? $reportingServerURL
             : new URL($reportingServerURL);
        $this->reportingServerURL->setElementName('reportingServerURL');
        return $this;
    }

    /**
     * 
     * @return URL $reportingServerURL
     */
    public function getReportingServerURL()
    {
        return ($this->reportingServerURL)
            ? $this->reportingServerURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupervisorTable(TableType $supervisorTable = null)
    {
        $this->supervisorTable = $supervisorTable;
        $this->supervisorTable->setElementName('supervisorTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable;
    }
}

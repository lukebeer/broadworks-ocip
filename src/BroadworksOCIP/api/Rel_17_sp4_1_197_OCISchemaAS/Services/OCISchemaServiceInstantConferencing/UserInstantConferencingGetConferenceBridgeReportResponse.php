<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserInstantConferencingGetConferenceBridgeReportRequest.
 *         Contains a table of report.
 *         The table has column headings: "Bridge Name", "Call Date", "Call Start Time",
 *         "Time Zone", "Call Owner", "Phone Number", "Direction", "Leg Start", "Duration",
 *         "Leg Number", "Access Code", "Billing Code" and "Call Id".
 */
class UserInstantConferencingGetConferenceBridgeReportResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetConferenceBridgeReportResponse';
    protected $conferenceReportTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceReportTable(TableType $conferenceReportTable = null)
    {
        $this->conferenceReportTable = $conferenceReportTable;
        $this->conferenceReportTable->setElementName('conferenceReportTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceReportTable()
    {
        return $this->conferenceReportTable;
    }
}

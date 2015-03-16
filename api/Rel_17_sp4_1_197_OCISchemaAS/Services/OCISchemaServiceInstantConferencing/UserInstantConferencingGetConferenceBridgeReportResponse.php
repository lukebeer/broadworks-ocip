<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse $response
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

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserMeetMeConferencingGetConferenceListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id", "Title", "Bridge Name", "Status", "Type", and "Start Time".
 *         The column values for "Status" can be Active, Inactive, or Expired.
 *         The column values for "Type" can be Reservationless, One Time, Recurring Daily, Recurring Weekly, Recurring Monthly, or Recurring Yearly.
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example: 2010-10-01T09:30:00:000-0400.
 */
class UserMeetMeConferencingGetConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMeetMeConferencingGetConferenceListResponse';
    protected $conferenceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetConferenceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceTable(TableType $conferenceTable = null)
    {
        $this->conferenceTable = $conferenceTable;
        $this->conferenceTable->setElementName('conferenceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceTable()
    {
        return $this->conferenceTable;
    }
}

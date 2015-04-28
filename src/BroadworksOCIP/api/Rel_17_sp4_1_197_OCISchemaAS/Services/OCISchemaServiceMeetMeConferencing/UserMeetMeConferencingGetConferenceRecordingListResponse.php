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
 * Response to the UserMeetMeConferencingGetConferenceRecordingListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id", "Conference Title", "Bridge Name", "Start Time", "File Size", and "URL".
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example: 2010-10-01T09:30:00:000-0400.
 */
class UserMeetMeConferencingGetConferenceRecordingListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMeetMeConferencingGetConferenceRecordingListResponse';
    protected $conferenceRecordingTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetConferenceRecordingListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceRecordingTable(TableType $conferenceRecordingTable = null)
    {
        $this->conferenceRecordingTable = $conferenceRecordingTable;
        $this->conferenceRecordingTable->setElementName('conferenceRecordingTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceRecordingTable()
    {
        return $this->conferenceRecordingTable;
    }
}

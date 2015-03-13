<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserMeetMeConferencingGetConferenceListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id", "Title", "Bridge Name", "Status", "Type", and "Start Time".
 *         The column values for "Status" can be Active, Inactive, or Expired.
 *         The column values for "Type" can be Reservationless, One Time, Recurring Daily, Recurring Weekly, Recurring Monthly, or Recurring Yearly.
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example: 2010-10-01T09:30:00:000-0400.
 */
class UserMeetMeConferencingGetConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserMeetMeConferencingGetConferenceListResponse';
    protected $conferenceTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetConferenceListResponse $response
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
        if (!$conferenceTable) return $this;
        $this->conferenceTable = $conferenceTable;
        $this->conferenceTable->setName('conferenceTable');
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

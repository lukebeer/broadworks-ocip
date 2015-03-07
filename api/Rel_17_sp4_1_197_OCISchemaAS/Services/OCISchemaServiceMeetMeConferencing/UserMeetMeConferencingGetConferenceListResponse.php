<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserMeetMeConferencingGetConferenceListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id", "Title", "Bridge Name", "Status", "Type", and "Start Time".
 *         The column values for "Status" can be Active, Inactive, or Expired.
 *         The column values for "Type" can be Reservationless, One Time, Recurring Daily, Recurring Weekly, Recurring Monthly, or Recurring Yearly.
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example: 2010-10-01T09:30:00:000-0400.
 */
class UserMeetMeConferencingGetConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $conferenceTable  = null;


    public function setConferenceTable(core:OCITable $conferenceTable = null)
    {
    }

    public function getConferenceTable()
    {
        return (!$this->conferenceTable) ?: $this->conferenceTable->value();
    }
}

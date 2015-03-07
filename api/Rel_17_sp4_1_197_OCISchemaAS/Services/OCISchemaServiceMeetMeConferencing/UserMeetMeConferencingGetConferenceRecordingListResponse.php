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
 * Response to the UserMeetMeConferencingGetConferenceRecordingListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id", "Conference Title", "Bridge Name", "Start Time", "File Size", and "URL".
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example: 2010-10-01T09:30:00:000-0400.
 */
class UserMeetMeConferencingGetConferenceRecordingListResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $conferenceRecordingTable  = null;


    public function setConferenceRecordingTable(core:OCITable $conferenceRecordingTable = null)
    {
    }

    public function getConferenceRecordingTable()
    {
        return (!$this->conferenceRecordingTable) ?: $this->conferenceRecordingTable->value();
    }
}

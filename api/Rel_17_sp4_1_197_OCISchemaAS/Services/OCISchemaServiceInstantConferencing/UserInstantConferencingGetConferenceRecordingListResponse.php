<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserInstantConferencingGetConferenceRecordingListRequest.
 *         Contains a table with column headings:
 *         "Bridge Service User Id", "Bridge Name", "Recording Id",
 *         "Owner User Id", "Owner Last Name", "Owner First Name", "Owner Hiragana Last Name", "Owner Hiragana First Name",
 *         "Title", "Start Date", "Start Time", and "Duration".
 */
class UserInstantConferencingGetConferenceRecordingListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceRecordingListResponse';
    public    $name                     = __CLASS__;
    protected $conferenceRecordingTable = null;


    /**
     * 
     */
    public function setConferenceRecordingTable(core:OCITable $conferenceRecordingTable = null)
    {
        $this->conferenceRecordingTable = core:OCITable $conferenceRecordingTable;
    }

    /**
     * 
     */
    public function getConferenceRecordingTable()
    {
        return (!$this->conferenceRecordingTable) ?: $this->conferenceRecordingTable->getValue();
    }
}
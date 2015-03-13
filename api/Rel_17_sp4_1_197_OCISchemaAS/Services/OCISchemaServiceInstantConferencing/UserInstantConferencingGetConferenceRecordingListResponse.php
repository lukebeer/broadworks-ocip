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
 * Response to the UserInstantConferencingGetConferenceRecordingListRequest.
 *         Contains a table with column headings:
 *         "Bridge Service User Id", "Bridge Name", "Recording Id",
 *         "Owner User Id", "Owner Last Name", "Owner First Name", "Owner Hiragana Last Name", "Owner Hiragana First Name",
 *         "Title", "Start Date", "Start Time", and "Duration".
 */
class UserInstantConferencingGetConferenceRecordingListResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'UserInstantConferencingGetConferenceRecordingListResponse';
    protected $conferenceRecordingTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceRecordingListResponse $response
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
        if (!$conferenceRecordingTable) return $this;
        $this->conferenceRecordingTable = $conferenceRecordingTable;
        $this->conferenceRecordingTable->setName('conferenceRecordingTable');
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

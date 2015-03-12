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
 * Response to the UserInstantConferencingGetExpiredConferenceListRequest.
 *         Contains a table with column headings:
 *         "Bridge Service User Id", "Bridge Name", "Conference Id",
 *         "Owner User Id", "Owner Last Name", "Owner First Name", "Owner Hiragana Last Name", "Owner Hiragana First Name",
 *         "Title", "Type", "Expiry Date".
 */
class UserInstantConferencingGetExpiredConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserInstantConferencingGetExpiredConferenceListResponse';
    protected $conferenceTable = null;

    /**
     * @return UserInstantConferencingGetExpiredConferenceListResponse
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

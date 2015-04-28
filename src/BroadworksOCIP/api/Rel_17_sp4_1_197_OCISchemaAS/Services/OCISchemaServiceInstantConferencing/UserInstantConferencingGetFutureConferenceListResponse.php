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
 * Response to the UserInstantConferencingGetFutureConferenceListRequest.
 *         Contains a table with column headings:
 *         "Bridge Service User Id", "Bridge Name", "Conference Id",
 *         "Owner User Id", "Owner Last Name", "Owner First Name", "Owner Hiragana Last Name", "Owner Hiragana First Name",
 *         "Title", "Type",  "Start Date", "Start Time".
 */
class UserInstantConferencingGetFutureConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetFutureConferenceListResponse';
    protected $conferenceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetFutureConferenceListResponse $response
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

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
 * Response to the GroupMeetMeConferencingGetInstanceListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone Number", "Extension", "Department", "Ports", and "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 */
class GroupMeetMeConferencingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupMeetMeConferencingGetInstanceListResponse';
    protected $conferenceBridgeTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceBridgeTable(TableType $conferenceBridgeTable = null)
    {
        if (!$conferenceBridgeTable) return $this;
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        $this->conferenceBridgeTable->setName('conferenceBridgeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceBridgeTable()
    {
        return $this->conferenceBridgeTable;
    }
}

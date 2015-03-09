<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetBridgeListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserMeetMeConferencingGetBridgeListRequest.
 *         Contains a table with column headings: "Bridge Id", "Name", "Phone Number", "Extension", "Ports", and "Is Active"
 *         The column values for "Is Active" can either be true, or false.
 */
class UserMeetMeConferencingGetBridgeListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $conferenceBridgeTable = null;

    /**
     * @return UserMeetMeConferencingGetBridgeListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceBridgeTable(core:OCITable $conferenceBridgeTable = null)
    {
        $this->conferenceBridgeTable =  $conferenceBridgeTable;
    }

    /**
     * 
     */
    public function getConferenceBridgeTable()
    {
        return (!$this->conferenceBridgeTable) ?: $this->conferenceBridgeTable->getValue();
    }
}

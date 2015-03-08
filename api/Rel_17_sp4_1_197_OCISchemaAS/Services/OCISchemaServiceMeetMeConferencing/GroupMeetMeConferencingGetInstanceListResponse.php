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
     * Response to the GroupMeetMeConferencingGetInstanceListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone Number", "Extension", "Department", "Ports", and "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 */
class GroupMeetMeConferencingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingGetInstanceListResponse';
    public    $name                  = __CLASS__;
    protected $conferenceBridgeTable = null;


    /**
     * 
     */
    public function setConferenceBridgeTable(core:OCITable $conferenceBridgeTable = null)
    {
        $this->conferenceBridgeTable = core:OCITable $conferenceBridgeTable;
    }

    /**
     * 
     */
    public function getConferenceBridgeTable()
    {
        return (!$this->conferenceBridgeTable) ?: $this->conferenceBridgeTable->getValue();
    }
}

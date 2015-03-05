<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserMeetMeConferencingGetBridgeListRequest.
 *         Contains a table with column headings: "Bridge Id", "Name", "Phone Number", "Extension", "Ports", and "Is Active"
 *         The column values for "Is Active" can either be true, or false.
 */
class UserMeetMeConferencingGetBridgeListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceBridgeTable
    ) {
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        $this->args                  = func_get_args();
    }

    public function setConferenceBridgeTable($conferenceBridgeTable)
    {
        $conferenceBridgeTable and $this->conferenceBridgeTable = new core:OCITable($conferenceBridgeTable);
    }

    public function getConferenceBridgeTable()
    {
        return (!$this->conferenceBridgeTable) ?: $this->conferenceBridgeTable->value();
    }
}

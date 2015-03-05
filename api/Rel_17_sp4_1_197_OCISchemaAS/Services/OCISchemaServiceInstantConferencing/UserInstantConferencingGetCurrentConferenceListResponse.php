<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserInstantConferencingGetCurrentConferenceListRequest.
 *         Contains a table with column headings:
 *         "Bridge Service User Id", "Bridge Name", "Conference Id",
 *         "Owner User Id", "Owner Last Name", "Owner First Name", "Owner Hiragana Last Name", "Owner Hiragana First Name",
 *         "Title", "Type", "Start Time".
 *         owner = display name
 */
class UserInstantConferencingGetCurrentConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceTable
    ) {
        $this->conferenceTable = $conferenceTable;
        $this->args            = func_get_args();
    }

    public function setConferenceTable($conferenceTable)
    {
        $conferenceTable and $this->conferenceTable = new core:OCITable($conferenceTable);
    }

    public function getConferenceTable()
    {
        return (!$this->conferenceTable) ?: $this->conferenceTable->value();
    }
}

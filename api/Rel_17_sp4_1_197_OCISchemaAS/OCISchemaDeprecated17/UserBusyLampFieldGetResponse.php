<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replaced by: UserBusyLampFieldGetResponse16sp2
 *        
 *         Response to UserBusyLampFieldGetRequest.
 *         The table has column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $listURI=null,
             $monitoredUserTable
    ) {
        $this->listURI            = new SIPURI($listURI);
        $this->monitoredUserTable = $monitoredUserTable;
        $this->args               = func_get_args();
    }

    public function setListURI($listURI)
    {
        $listURI and $this->listURI = new SIPURI($listURI);
    }

    public function getListURI()
    {
        return (!$this->listURI) ?: $this->listURI->value();
    }

    public function setMonitoredUserTable($monitoredUserTable)
    {
        $monitoredUserTable and $this->monitoredUserTable = new core:OCITable($monitoredUserTable);
    }

    public function getMonitoredUserTable()
    {
        return (!$this->monitoredUserTable) ?: $this->monitoredUserTable->value();
    }
}

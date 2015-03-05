<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAttendantConsoleGetRequest14sp2.
 *         Returns a 5 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserAttendantConsoleGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $launchOnLogin,
             $allowUserConfigCallDetails,
             $allowUserViewCallDetails,
             $displayColumn=null,
             $monitoredUserTable
    ) {
        $this->launchOnLogin              = $launchOnLogin;
        $this->allowUserConfigCallDetails = $allowUserConfigCallDetails;
        $this->allowUserViewCallDetails   = $allowUserViewCallDetails;
        $this->displayColumn              = $displayColumn;
        $this->monitoredUserTable         = $monitoredUserTable;
        $this->args                       = func_get_args();
    }

    public function setLaunchOnLogin($launchOnLogin)
    {
        $launchOnLogin and $this->launchOnLogin = new xs:boolean($launchOnLogin);
    }

    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->value();
    }

    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails)
    {
        $allowUserConfigCallDetails and $this->allowUserConfigCallDetails = new xs:boolean($allowUserConfigCallDetails);
    }

    public function getAllowUserConfigCallDetails()
    {
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails->value();
    }

    public function setAllowUserViewCallDetails($allowUserViewCallDetails)
    {
        $allowUserViewCallDetails and $this->allowUserViewCallDetails = new xs:boolean($allowUserViewCallDetails);
    }

    public function getAllowUserViewCallDetails()
    {
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails->value();
    }

    public function setDisplayColumn($displayColumn)
    {
        $displayColumn and $this->displayColumn = new AttendantConsoleDisplayColumn($displayColumn);
    }

    public function getDisplayColumn()
    {
        return (!$this->displayColumn) ?: $this->displayColumn->value();
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

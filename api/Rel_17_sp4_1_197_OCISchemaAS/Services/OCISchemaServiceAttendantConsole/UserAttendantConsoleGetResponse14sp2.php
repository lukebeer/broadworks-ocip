<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAttendantConsoleGetRequest14sp2.
 *         Returns a 5 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserAttendantConsoleGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $launchOnLogin               = null;
    protected $allowUserConfigCallDetails  = null;
    protected $allowUserViewCallDetails    = null;
    protected $displayColumn               = null;
    protected $monitoredUserTable          = null;


    public function setLaunchOnLogin(xs:boolean $launchOnLogin = null)
    {
    }

    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->value();
    }

    public function setAllowUserConfigCallDetails(xs:boolean $allowUserConfigCallDetails = null)
    {
    }

    public function getAllowUserConfigCallDetails()
    {
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails->value();
    }

    public function setAllowUserViewCallDetails(xs:boolean $allowUserViewCallDetails = null)
    {
    }

    public function getAllowUserViewCallDetails()
    {
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails->value();
    }

    public function setDisplayColumn($displayColumn = null)
    {
        $this->displayColumn = ($displayColumn InstanceOf AttendantConsoleDisplayColumn)
             ? $displayColumn
             : new AttendantConsoleDisplayColumn($displayColumn);
    }

    public function getDisplayColumn()
    {
        return (!$this->displayColumn) ?: $this->displayColumn->value();
    }

    public function setMonitoredUserTable(core:OCITable $monitoredUserTable = null)
    {
    }

    public function getMonitoredUserTable()
    {
        return (!$this->monitoredUserTable) ?: $this->monitoredUserTable->value();
    }
}

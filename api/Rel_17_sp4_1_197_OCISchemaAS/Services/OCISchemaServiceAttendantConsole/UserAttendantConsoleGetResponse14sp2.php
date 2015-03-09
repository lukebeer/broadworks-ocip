<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole\UserAttendantConsoleGetResponse14sp2;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAttendantConsoleGetRequest14sp2.
 *         Returns a 5 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserAttendantConsoleGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $launchOnLogin              = null;
    protected $allowUserConfigCallDetails = null;
    protected $allowUserViewCallDetails   = null;
    protected $displayColumn              = null;
    protected $monitoredUserTable         = null;

    /**
     * @return UserAttendantConsoleGetResponse14sp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        $this->launchOnLogin = (boolean) $launchOnLogin;
    }

    /**
     * 
     */
    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin;
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        $this->allowUserConfigCallDetails = (boolean) $allowUserConfigCallDetails;
    }

    /**
     * 
     */
    public function getAllowUserConfigCallDetails()
    {
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails;
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        $this->allowUserViewCallDetails = (boolean) $allowUserViewCallDetails;
    }

    /**
     * 
     */
    public function getAllowUserViewCallDetails()
    {
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails;
    }

    /**
     * Attendant Console Display Columns.
     */
    public function setDisplayColumn($displayColumn = null)
    {
        $this->displayColumn = ($displayColumn InstanceOf AttendantConsoleDisplayColumn)
             ? $displayColumn
             : new AttendantConsoleDisplayColumn($displayColumn);
    }

    /**
     * Attendant Console Display Columns.
     */
    public function getDisplayColumn()
    {
        return (!$this->displayColumn) ?: $this->displayColumn->getValue();
    }

    /**
     * 
     */
    public function setMonitoredUserTable(core:OCITable $monitoredUserTable = null)
    {
        $this->monitoredUserTable =  $monitoredUserTable;
    }

    /**
     * 
     */
    public function getMonitoredUserTable()
    {
        return (!$this->monitoredUserTable) ?: $this->monitoredUserTable->getValue();
    }
}

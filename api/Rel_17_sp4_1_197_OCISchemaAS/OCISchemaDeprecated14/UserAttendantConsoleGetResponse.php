<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserAttendantConsoleGetRequest.
 */
class UserAttendantConsoleGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserAttendantConsoleGetResponse';
    public    $name                       = __CLASS__;
    protected $launchOnLogin              = null;
    protected $allowUserConfigCallDetails = null;
    protected $allowUserViewCallDetails   = null;
    protected $displayColumn              = null;


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
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->getValue();
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
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails->getValue();
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
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails->getValue();
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
}
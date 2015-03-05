<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAttendantConsoleGetRequest.
 */
class UserAttendantConsoleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $launchOnLogin,
             $allowUserConfigCallDetails,
             $allowUserViewCallDetails,
             $displayColumn=null
    ) {
        $this->launchOnLogin              = $launchOnLogin;
        $this->allowUserConfigCallDetails = $allowUserConfigCallDetails;
        $this->allowUserViewCallDetails   = $allowUserViewCallDetails;
        $this->displayColumn              = $displayColumn;
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
}

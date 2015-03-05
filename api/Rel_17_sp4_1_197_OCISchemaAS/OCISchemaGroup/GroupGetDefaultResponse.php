<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupGetDefaultRequest. All values are default values for a group's profile.
 */
class GroupGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultDomain,
             $userLimit,
             $timeZone,
             $timeZoneDisplayName
    ) {
        $this->defaultDomain       = new NetAddress($defaultDomain);
        $this->userLimit           = $userLimit;
        $this->timeZone            = new TimeZone($timeZone);
        $this->timeZoneDisplayName = new TimeZoneDisplayName($timeZoneDisplayName);
        $this->args                = func_get_args();
    }

    public function setDefaultDomain($defaultDomain)
    {
        $defaultDomain and $this->defaultDomain = new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }

    public function setUserLimit($userLimit)
    {
        $userLimit and $this->userLimit = new GroupUserLimit($userLimit);
    }

    public function getUserLimit()
    {
        return (!$this->userLimit) ?: $this->userLimit->value();
    }

    public function setTimeZone($timeZone)
    {
        $timeZone and $this->timeZone = new TimeZone($timeZone);
    }

    public function getTimeZone()
    {
        return (!$this->timeZone) ?: $this->timeZone->value();
    }

    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $timeZoneDisplayName and $this->timeZoneDisplayName = new TimeZoneDisplayName($timeZoneDisplayName);
    }

    public function getTimeZoneDisplayName()
    {
        return (!$this->timeZoneDisplayName) ?: $this->timeZoneDisplayName->value();
    }
}

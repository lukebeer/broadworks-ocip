<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
 *         to get either all conference device types or all non-conferernce types. This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetlAvailableListResponse14sp1 or ErrorResponse.
 *         Replaced By: SystemDeviceTypeGetAvailableListRequest14sp3
 */
class SystemDeviceTypeGetAvailableListRequest14sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $allowConference,
             $allowMusicOnHold,
             $onlyConference,
             $onlyVideoCapable,
             $onlyOptionalIpAddress
    ) {
        $this->allowConference       = $allowConference;
        $this->allowMusicOnHold      = $allowMusicOnHold;
        $this->onlyConference        = $onlyConference;
        $this->onlyVideoCapable      = $onlyVideoCapable;
        $this->onlyOptionalIpAddress = $onlyOptionalIpAddress;
        $this->args                  = func_get_args();
    }

    public function setAllowConference($allowConference)
    {
        $allowConference and $this->allowConference = new xs:boolean($allowConference);
    }

    public function getAllowConference()
    {
        return (!$this->allowConference) ?: $this->allowConference->value();
    }

    public function setAllowMusicOnHold($allowMusicOnHold)
    {
        $allowMusicOnHold and $this->allowMusicOnHold = new xs:boolean($allowMusicOnHold);
    }

    public function getAllowMusicOnHold()
    {
        return (!$this->allowMusicOnHold) ?: $this->allowMusicOnHold->value();
    }

    public function setOnlyConference($onlyConference)
    {
        $onlyConference and $this->onlyConference = new xs:boolean($onlyConference);
    }

    public function getOnlyConference()
    {
        return (!$this->onlyConference) ?: $this->onlyConference->value();
    }

    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $onlyVideoCapable and $this->onlyVideoCapable = new xs:boolean($onlyVideoCapable);
    }

    public function getOnlyVideoCapable()
    {
        return (!$this->onlyVideoCapable) ?: $this->onlyVideoCapable->value();
    }

    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress)
    {
        $onlyOptionalIpAddress and $this->onlyOptionalIpAddress = new xs:boolean($onlyOptionalIpAddress);
    }

    public function getOnlyOptionalIpAddress()
    {
        return (!$this->onlyOptionalIpAddress) ?: $this->onlyOptionalIpAddress->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Information about the primary server in the high-availablity cluster.
 *         For optimization, we only get the hostname and addresses for primary if they are
 *         explicitly requested or if the current server is not the primary.
 */
class PrimaryInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isPrimary,
             $hostnameForPrimary=null,
             $addressForPrimary=null,
             $privateAddressForPrimary=null
    ) {
        $this->isPrimary                = $isPrimary;
        $this->hostnameForPrimary       = new NetAddress($hostnameForPrimary);
        $this->addressForPrimary        = new NetAddress($addressForPrimary);
        $this->privateAddressForPrimary = new NetAddress($privateAddressForPrimary);
        $this->args                     = func_get_args();
    }

    public function setIsPrimary($isPrimary)
    {
        $isPrimary and $this->isPrimary = new xs:boolean($isPrimary);
    }

    public function getIsPrimary()
    {
        return (!$this->isPrimary) ?: $this->isPrimary->value();
    }

    public function setHostnameForPrimary($hostnameForPrimary)
    {
        $hostnameForPrimary and $this->hostnameForPrimary = new NetAddress($hostnameForPrimary);
    }

    public function getHostnameForPrimary()
    {
        return (!$this->hostnameForPrimary) ?: $this->hostnameForPrimary->value();
    }

    public function setAddressForPrimary($addressForPrimary)
    {
        $addressForPrimary and $this->addressForPrimary = new NetAddress($addressForPrimary);
    }

    public function getAddressForPrimary()
    {
        return (!$this->addressForPrimary) ?: $this->addressForPrimary->value();
    }

    public function setPrivateAddressForPrimary($privateAddressForPrimary)
    {
        $privateAddressForPrimary and $this->privateAddressForPrimary = new NetAddress($privateAddressForPrimary);
    }

    public function getPrivateAddressForPrimary()
    {
        return (!$this->privateAddressForPrimary) ?: $this->privateAddressForPrimary->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMTPFromAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMTPSubject;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify Mail system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemMailParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $primaryServerNetAddress=null,
             $secondaryServerNetAddress=null,
             $defaultFromAddress=null,
             $defaultSubject=null,
             $supportDNSSRVForMailServerAccess=null
    ) {
        $this->primaryServerNetAddress          = new NetAddress($primaryServerNetAddress);
        $this->secondaryServerNetAddress        = new NetAddress($secondaryServerNetAddress);
        $this->defaultFromAddress               = $defaultFromAddress;
        $this->defaultSubject                   = $defaultSubject;
        $this->supportDNSSRVForMailServerAccess = $supportDNSSRVForMailServerAccess;
        $this->args                             = func_get_args();
    }

    public function setPrimaryServerNetAddress($primaryServerNetAddress)
    {
        $primaryServerNetAddress and $this->primaryServerNetAddress = new NetAddress($primaryServerNetAddress);
    }

    public function getPrimaryServerNetAddress()
    {
        return (!$this->primaryServerNetAddress) ?: $this->primaryServerNetAddress->value();
    }

    public function setSecondaryServerNetAddress($secondaryServerNetAddress)
    {
        $secondaryServerNetAddress and $this->secondaryServerNetAddress = new NetAddress($secondaryServerNetAddress);
    }

    public function getSecondaryServerNetAddress()
    {
        return (!$this->secondaryServerNetAddress) ?: $this->secondaryServerNetAddress->value();
    }

    public function setDefaultFromAddress($defaultFromAddress)
    {
        $defaultFromAddress and $this->defaultFromAddress = new SMTPFromAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }

    public function setDefaultSubject($defaultSubject)
    {
        $defaultSubject and $this->defaultSubject = new SMTPSubject($defaultSubject);
    }

    public function getDefaultSubject()
    {
        return (!$this->defaultSubject) ?: $this->defaultSubject->value();
    }

    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess)
    {
        $supportDNSSRVForMailServerAccess and $this->supportDNSSRVForMailServerAccess = new xs:boolean($supportDNSSRVForMailServerAccess);
    }

    public function getSupportDNSSRVForMailServerAccess()
    {
        return (!$this->supportDNSSRVForMailServerAccess) ?: $this->supportDNSSRVForMailServerAccess->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMTPFromAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMTPSubject;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMailParametersGetListRequest.
 *         Contains a list of system Mail parameters.
 */
class SystemMailParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $primaryServerNetAddress           = null;
    protected $secondaryServerNetAddress         = null;
    protected $defaultFromAddress                = null;
    protected $defaultSubject                    = null;
    protected $supportDNSSRVForMailServerAccess  = null;


    public function setPrimaryServerNetAddress($primaryServerNetAddress = null)
    {
        $this->primaryServerNetAddress = ($primaryServerNetAddress InstanceOf NetAddress)
             ? $primaryServerNetAddress
             : new NetAddress($primaryServerNetAddress);
    }

    public function getPrimaryServerNetAddress()
    {
        return (!$this->primaryServerNetAddress) ?: $this->primaryServerNetAddress->value();
    }

    public function setSecondaryServerNetAddress($secondaryServerNetAddress = null)
    {
        $this->secondaryServerNetAddress = ($secondaryServerNetAddress InstanceOf NetAddress)
             ? $secondaryServerNetAddress
             : new NetAddress($secondaryServerNetAddress);
    }

    public function getSecondaryServerNetAddress()
    {
        return (!$this->secondaryServerNetAddress) ?: $this->secondaryServerNetAddress->value();
    }

    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf SMTPFromAddress)
             ? $defaultFromAddress
             : new SMTPFromAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }

    public function setDefaultSubject($defaultSubject = null)
    {
        $this->defaultSubject = ($defaultSubject InstanceOf SMTPSubject)
             ? $defaultSubject
             : new SMTPSubject($defaultSubject);
    }

    public function getDefaultSubject()
    {
        return (!$this->defaultSubject) ?: $this->defaultSubject->value();
    }

    public function setSupportDNSSRVForMailServerAccess(xs:boolean $supportDNSSRVForMailServerAccess = null)
    {
    }

    public function getSupportDNSSRVForMailServerAccess()
    {
        return (!$this->supportDNSSRVForMailServerAccess) ?: $this->supportDNSSRVForMailServerAccess->value();
    }
}

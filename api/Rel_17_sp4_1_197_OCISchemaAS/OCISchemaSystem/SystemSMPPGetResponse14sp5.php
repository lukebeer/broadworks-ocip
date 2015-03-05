<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMPPSystemId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMPPPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMPPVersion;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMPPSystemType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSMPPGetRequest14sp5.
 */
class SystemSMPPGetResponse14sp5 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $primarySMPPServerNetAddress=null,
             $primarySMPPPort,
             $secondarySMPPServerNetAddress=null,
             $secondarySMPPPort,
             $systemId=null,
             $password=null,
             $version,
             $systemType=null
    ) {
        $this->primarySMPPServerNetAddress   = new NetAddress($primarySMPPServerNetAddress);
        $this->primarySMPPPort               = new Port($primarySMPPPort);
        $this->secondarySMPPServerNetAddress = new NetAddress($secondarySMPPServerNetAddress);
        $this->secondarySMPPPort             = new Port($secondarySMPPPort);
        $this->systemId                      = $systemId;
        $this->password                      = $password;
        $this->version                       = $version;
        $this->systemType                    = $systemType;
        $this->args                          = func_get_args();
    }

    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress)
    {
        $primarySMPPServerNetAddress and $this->primarySMPPServerNetAddress = new NetAddress($primarySMPPServerNetAddress);
    }

    public function getPrimarySMPPServerNetAddress()
    {
        return (!$this->primarySMPPServerNetAddress) ?: $this->primarySMPPServerNetAddress->value();
    }

    public function setPrimarySMPPPort($primarySMPPPort)
    {
        $primarySMPPPort and $this->primarySMPPPort = new Port($primarySMPPPort);
    }

    public function getPrimarySMPPPort()
    {
        return (!$this->primarySMPPPort) ?: $this->primarySMPPPort->value();
    }

    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress)
    {
        $secondarySMPPServerNetAddress and $this->secondarySMPPServerNetAddress = new NetAddress($secondarySMPPServerNetAddress);
    }

    public function getSecondarySMPPServerNetAddress()
    {
        return (!$this->secondarySMPPServerNetAddress) ?: $this->secondarySMPPServerNetAddress->value();
    }

    public function setSecondarySMPPPort($secondarySMPPPort)
    {
        $secondarySMPPPort and $this->secondarySMPPPort = new Port($secondarySMPPPort);
    }

    public function getSecondarySMPPPort()
    {
        return (!$this->secondarySMPPPort) ?: $this->secondarySMPPPort->value();
    }

    public function setSystemId($systemId)
    {
        $systemId and $this->systemId = new SMPPSystemId($systemId);
    }

    public function getSystemId()
    {
        return (!$this->systemId) ?: $this->systemId->value();
    }

    public function setPassword($password)
    {
        $password and $this->password = new SMPPPassword($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setVersion($version)
    {
        $version and $this->version = new SMPPVersion($version);
    }

    public function getVersion()
    {
        return (!$this->version) ?: $this->version->value();
    }

    public function setSystemType($systemType)
    {
        $systemType and $this->systemType = new SMPPSystemType($systemType);
    }

    public function getSystemType()
    {
        return (!$this->systemType) ?: $this->systemType->value();
    }
}

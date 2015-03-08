<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPSystemType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPSystemId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPVersion;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemSMPPGetRequest14sp5.
 */
class SystemSMPPGetResponse14sp5 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSMPPGetResponse14sp5';
    public    $name                          = __CLASS__;
    protected $primarySMPPServerNetAddress   = null;
    protected $primarySMPPPort               = null;
    protected $secondarySMPPServerNetAddress = null;
    protected $secondarySMPPPort             = null;
    protected $systemId                      = null;
    protected $password                      = null;
    protected $version                       = null;
    protected $systemType                    = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress = null)
    {
        $this->primarySMPPServerNetAddress = ($primarySMPPServerNetAddress InstanceOf NetAddress)
             ? $primarySMPPServerNetAddress
             : new NetAddress($primarySMPPServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return (!$this->primarySMPPServerNetAddress) ?: $this->primarySMPPServerNetAddress->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setPrimarySMPPPort($primarySMPPPort = null)
    {
        $this->primarySMPPPort = ($primarySMPPPort InstanceOf Port)
             ? $primarySMPPPort
             : new Port($primarySMPPPort);
    }

    /**
     * TCP/IP Port.
     */
    public function getPrimarySMPPPort()
    {
        return (!$this->primarySMPPPort) ?: $this->primarySMPPPort->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress = null)
    {
        $this->secondarySMPPServerNetAddress = ($secondarySMPPServerNetAddress InstanceOf NetAddress)
             ? $secondarySMPPServerNetAddress
             : new NetAddress($secondarySMPPServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return (!$this->secondarySMPPServerNetAddress) ?: $this->secondarySMPPServerNetAddress->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setSecondarySMPPPort($secondarySMPPPort = null)
    {
        $this->secondarySMPPPort = ($secondarySMPPPort InstanceOf Port)
             ? $secondarySMPPPort
             : new Port($secondarySMPPPort);
    }

    /**
     * TCP/IP Port.
     */
    public function getSecondarySMPPPort()
    {
        return (!$this->secondarySMPPPort) ?: $this->secondarySMPPPort->getValue();
    }

    /**
     * SMPP System Id.
     */
    public function setSystemId($systemId = null)
    {
        $this->systemId = ($systemId InstanceOf SMPPSystemId)
             ? $systemId
             : new SMPPSystemId($systemId);
    }

    /**
     * SMPP System Id.
     */
    public function getSystemId()
    {
        return (!$this->systemId) ?: $this->systemId->getValue();
    }

    /**
     * SMPP Password.
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf SMPPPassword)
             ? $password
             : new SMPPPassword($password);
    }

    /**
     * SMPP Password.
     */
    public function getPassword()
    {
        return (!$this->password) ?: $this->password->getValue();
    }

    /**
     * The SMPP Protocol Version.
     */
    public function setVersion($version = null)
    {
        $this->version = ($version InstanceOf SMPPVersion)
             ? $version
             : new SMPPVersion($version);
    }

    /**
     * The SMPP Protocol Version.
     */
    public function getVersion()
    {
        return (!$this->version) ?: $this->version->getValue();
    }

    /**
     * 
     */
    public function setSystemType($systemType = null)
    {
        $this->systemType = ($systemType InstanceOf SMPPSystemType)
             ? $systemType
             : new SMPPSystemType($systemType);
    }

    /**
     * 
     */
    public function getSystemType()
    {
        return (!$this->systemType) ?: $this->systemType->getValue();
    }
}
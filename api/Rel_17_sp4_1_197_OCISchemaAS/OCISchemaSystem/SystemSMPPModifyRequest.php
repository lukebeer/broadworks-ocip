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
 * Request to modify the system level data associated with the SMPP external interface.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMPPModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $primarySMPPServerNetAddress    = null;
    protected $primarySMPPPort                = null;
    protected $secondarySMPPServerNetAddress  = null;
    protected $secondarySMPPPort              = null;
    protected $systemId                       = null;
    protected $password                       = null;
    protected $version                        = null;
    protected $systemType                     = null;

    public function __construct(
         $primarySMPPServerNetAddress = null,
         $primarySMPPPort = null,
         $secondarySMPPServerNetAddress = null,
         $secondarySMPPPort = null,
         $systemId = null,
         $password = null,
         $version = null,
         $systemType = null
    ) {
        $this->setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress);
        $this->setPrimarySMPPPort($primarySMPPPort);
        $this->setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress);
        $this->setSecondarySMPPPort($secondarySMPPPort);
        $this->setSystemId($systemId);
        $this->setPassword($password);
        $this->setVersion($version);
        $this->setSystemType($systemType);
    }

    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress = null)
    {
        $this->primarySMPPServerNetAddress = ($primarySMPPServerNetAddress InstanceOf NetAddress)
             ? $primarySMPPServerNetAddress
             : new NetAddress($primarySMPPServerNetAddress);
    }

    public function getPrimarySMPPServerNetAddress()
    {
        return (!$this->primarySMPPServerNetAddress) ?: $this->primarySMPPServerNetAddress->value();
    }

    public function setPrimarySMPPPort($primarySMPPPort = null)
    {
        $this->primarySMPPPort = ($primarySMPPPort InstanceOf Port)
             ? $primarySMPPPort
             : new Port($primarySMPPPort);
    }

    public function getPrimarySMPPPort()
    {
        return (!$this->primarySMPPPort) ?: $this->primarySMPPPort->value();
    }

    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress = null)
    {
        $this->secondarySMPPServerNetAddress = ($secondarySMPPServerNetAddress InstanceOf NetAddress)
             ? $secondarySMPPServerNetAddress
             : new NetAddress($secondarySMPPServerNetAddress);
    }

    public function getSecondarySMPPServerNetAddress()
    {
        return (!$this->secondarySMPPServerNetAddress) ?: $this->secondarySMPPServerNetAddress->value();
    }

    public function setSecondarySMPPPort($secondarySMPPPort = null)
    {
        $this->secondarySMPPPort = ($secondarySMPPPort InstanceOf Port)
             ? $secondarySMPPPort
             : new Port($secondarySMPPPort);
    }

    public function getSecondarySMPPPort()
    {
        return (!$this->secondarySMPPPort) ?: $this->secondarySMPPPort->value();
    }

    public function setSystemId($systemId = null)
    {
        $this->systemId = ($systemId InstanceOf SMPPSystemId)
             ? $systemId
             : new SMPPSystemId($systemId);
    }

    public function getSystemId()
    {
        return (!$this->systemId) ?: $this->systemId->value();
    }

    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf SMPPPassword)
             ? $password
             : new SMPPPassword($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setVersion($version = null)
    {
        $this->version = ($version InstanceOf SMPPVersion)
             ? $version
             : new SMPPVersion($version);
    }

    public function getVersion()
    {
        return (!$this->version) ?: $this->version->value();
    }

    public function setSystemType($systemType = null)
    {
        $this->systemType = ($systemType InstanceOf SMPPSystemType)
             ? $systemType
             : new SMPPSystemType($systemType);
    }

    public function getSystemType()
    {
        return (!$this->systemType) ?: $this->systemType->value();
    }
}

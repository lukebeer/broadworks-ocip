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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the system level data associated with the SMPP external interface.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMPPModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = 'SystemSMPPModifyRequest';
    protected $primarySMPPServerNetAddress   = null;
    protected $primarySMPPPort               = null;
    protected $secondarySMPPServerNetAddress = null;
    protected $secondarySMPPPort             = null;
    protected $systemId                      = null;
    protected $password                      = null;
    protected $version                       = null;
    protected $systemType                    = null;

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

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress = null)
    {
        if (!$primarySMPPServerNetAddress) return $this;
        $this->primarySMPPServerNetAddress = ($primarySMPPServerNetAddress InstanceOf NetAddress)
             ? $primarySMPPServerNetAddress
             : new NetAddress($primarySMPPServerNetAddress);
        $this->primarySMPPServerNetAddress->setName('primarySMPPServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return $this->primarySMPPServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setPrimarySMPPPort($primarySMPPPort = null)
    {
        if (!$primarySMPPPort) return $this;
        $this->primarySMPPPort = ($primarySMPPPort InstanceOf Port)
             ? $primarySMPPPort
             : new Port($primarySMPPPort);
        $this->primarySMPPPort->setName('primarySMPPPort');
        return $this;
    }

    /**
     * 
     * @return Port
     */
    public function getPrimarySMPPPort()
    {
        return $this->primarySMPPPort->getValue();
    }

    /**
     * 
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress = null)
    {
        if (!$secondarySMPPServerNetAddress) return $this;
        $this->secondarySMPPServerNetAddress = ($secondarySMPPServerNetAddress InstanceOf NetAddress)
             ? $secondarySMPPServerNetAddress
             : new NetAddress($secondarySMPPServerNetAddress);
        $this->secondarySMPPServerNetAddress->setName('secondarySMPPServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return $this->secondarySMPPServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setSecondarySMPPPort($secondarySMPPPort = null)
    {
        if (!$secondarySMPPPort) return $this;
        $this->secondarySMPPPort = ($secondarySMPPPort InstanceOf Port)
             ? $secondarySMPPPort
             : new Port($secondarySMPPPort);
        $this->secondarySMPPPort->setName('secondarySMPPPort');
        return $this;
    }

    /**
     * 
     * @return Port
     */
    public function getSecondarySMPPPort()
    {
        return $this->secondarySMPPPort->getValue();
    }

    /**
     * 
     */
    public function setSystemId($systemId = null)
    {
        if (!$systemId) return $this;
        $this->systemId = ($systemId InstanceOf SMPPSystemId)
             ? $systemId
             : new SMPPSystemId($systemId);
        $this->systemId->setName('systemId');
        return $this;
    }

    /**
     * 
     * @return SMPPSystemId
     */
    public function getSystemId()
    {
        return $this->systemId->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = ($password InstanceOf SMPPPassword)
             ? $password
             : new SMPPPassword($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return SMPPPassword
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setVersion($version = null)
    {
        if (!$version) return $this;
        $this->version = ($version InstanceOf SMPPVersion)
             ? $version
             : new SMPPVersion($version);
        $this->version->setName('version');
        return $this;
    }

    /**
     * 
     * @return SMPPVersion
     */
    public function getVersion()
    {
        return $this->version->getValue();
    }

    /**
     * 
     */
    public function setSystemType($systemType = null)
    {
        if (!$systemType) return $this;
        $this->systemType = ($systemType InstanceOf SMPPSystemType)
             ? $systemType
             : new SMPPSystemType($systemType);
        $this->systemType->setName('systemType');
        return $this;
    }

    /**
     * 
     * @return SMPPSystemType
     */
    public function getSystemType()
    {
        return $this->systemType->getValue();
    }
}

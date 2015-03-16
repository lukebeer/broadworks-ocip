<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

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
 * Response to SystemSMPPGetRequest.
 */
class SystemSMPPGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSMPPGetResponse';
    protected $primarySMPPServerNetAddress;
    protected $primarySMPPPort;
    protected $secondarySMPPServerNetAddress;
    protected $secondarySMPPPort;
    protected $systemId;
    protected $password;
    protected $version;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSMPPGetResponse $response
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
        $this->primarySMPPServerNetAddress = ($primarySMPPServerNetAddress InstanceOf NetAddress)
             ? $primarySMPPServerNetAddress
             : new NetAddress($primarySMPPServerNetAddress);
        $this->primarySMPPServerNetAddress->setName('primarySMPPServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $primarySMPPServerNetAddress
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return ($this->primarySMPPServerNetAddress) ? $this->primarySMPPServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setPrimarySMPPPort($primarySMPPPort = null)
    {
        $this->primarySMPPPort = ($primarySMPPPort InstanceOf Port)
             ? $primarySMPPPort
             : new Port($primarySMPPPort);
        $this->primarySMPPPort->setName('primarySMPPPort');
        return $this;
    }

    /**
     * 
     * @return Port $primarySMPPPort
     */
    public function getPrimarySMPPPort()
    {
        return ($this->primarySMPPPort) ? $this->primarySMPPPort->getValue() : null;
    }

    /**
     * 
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress = null)
    {
        $this->secondarySMPPServerNetAddress = ($secondarySMPPServerNetAddress InstanceOf NetAddress)
             ? $secondarySMPPServerNetAddress
             : new NetAddress($secondarySMPPServerNetAddress);
        $this->secondarySMPPServerNetAddress->setName('secondarySMPPServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $secondarySMPPServerNetAddress
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return ($this->secondarySMPPServerNetAddress) ? $this->secondarySMPPServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSecondarySMPPPort($secondarySMPPPort = null)
    {
        $this->secondarySMPPPort = ($secondarySMPPPort InstanceOf Port)
             ? $secondarySMPPPort
             : new Port($secondarySMPPPort);
        $this->secondarySMPPPort->setName('secondarySMPPPort');
        return $this;
    }

    /**
     * 
     * @return Port $secondarySMPPPort
     */
    public function getSecondarySMPPPort()
    {
        return ($this->secondarySMPPPort) ? $this->secondarySMPPPort->getValue() : null;
    }

    /**
     * 
     */
    public function setSystemId($systemId = null)
    {
        $this->systemId = ($systemId InstanceOf SMPPSystemId)
             ? $systemId
             : new SMPPSystemId($systemId);
        $this->systemId->setName('systemId');
        return $this;
    }

    /**
     * 
     * @return SMPPSystemId $systemId
     */
    public function getSystemId()
    {
        return ($this->systemId) ? $this->systemId->getValue() : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf SMPPPassword)
             ? $password
             : new SMPPPassword($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return SMPPPassword $password
     */
    public function getPassword()
    {
        return ($this->password) ? $this->password->getValue() : null;
    }

    /**
     * 
     */
    public function setVersion($version = null)
    {
        $this->version = ($version InstanceOf SMPPVersion)
             ? $version
             : new SMPPVersion($version);
        $this->version->setName('version');
        return $this;
    }

    /**
     * 
     * @return SMPPVersion $version
     */
    public function getVersion()
    {
        return ($this->version) ? $this->version->getValue() : null;
    }
}

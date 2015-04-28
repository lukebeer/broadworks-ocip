<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPSystemType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPSystemId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMPPVersion;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the system level data associated with the SMPP external interface.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMPPModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMPPModifyRequest';
    protected $primarySMPPServerNetAddress;
    protected $primarySMPPPort;
    protected $secondarySMPPServerNetAddress;
    protected $secondarySMPPPort;
    protected $systemId;
    protected $password;
    protected $version;
    protected $systemType;

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
     * @return mixed $response
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
        $this->primarySMPPServerNetAddress->setElementName('primarySMPPServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $primarySMPPServerNetAddress
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return ($this->primarySMPPServerNetAddress)
            ? $this->primarySMPPServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrimarySMPPPort($primarySMPPPort = null)
    {
        $this->primarySMPPPort = ($primarySMPPPort InstanceOf Port)
             ? $primarySMPPPort
             : new Port($primarySMPPPort);
        $this->primarySMPPPort->setElementName('primarySMPPPort');
        return $this;
    }

    /**
     * 
     * @return Port $primarySMPPPort
     */
    public function getPrimarySMPPPort()
    {
        return ($this->primarySMPPPort)
            ? $this->primarySMPPPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress = null)
    {
        $this->secondarySMPPServerNetAddress = ($secondarySMPPServerNetAddress InstanceOf NetAddress)
             ? $secondarySMPPServerNetAddress
             : new NetAddress($secondarySMPPServerNetAddress);
        $this->secondarySMPPServerNetAddress->setElementName('secondarySMPPServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $secondarySMPPServerNetAddress
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return ($this->secondarySMPPServerNetAddress)
            ? $this->secondarySMPPServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSecondarySMPPPort($secondarySMPPPort = null)
    {
        $this->secondarySMPPPort = ($secondarySMPPPort InstanceOf Port)
             ? $secondarySMPPPort
             : new Port($secondarySMPPPort);
        $this->secondarySMPPPort->setElementName('secondarySMPPPort');
        return $this;
    }

    /**
     * 
     * @return Port $secondarySMPPPort
     */
    public function getSecondarySMPPPort()
    {
        return ($this->secondarySMPPPort)
            ? $this->secondarySMPPPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSystemId($systemId = null)
    {
        $this->systemId = ($systemId InstanceOf SMPPSystemId)
             ? $systemId
             : new SMPPSystemId($systemId);
        $this->systemId->setElementName('systemId');
        return $this;
    }

    /**
     * 
     * @return SMPPSystemId $systemId
     */
    public function getSystemId()
    {
        return ($this->systemId)
            ? $this->systemId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf SMPPPassword)
             ? $password
             : new SMPPPassword($password);
        $this->password->setElementName('password');
        return $this;
    }

    /**
     * 
     * @return SMPPPassword $password
     */
    public function getPassword()
    {
        return ($this->password)
            ? $this->password->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVersion($version = null)
    {
        $this->version = ($version InstanceOf SMPPVersion)
             ? $version
             : new SMPPVersion($version);
        $this->version->setElementName('version');
        return $this;
    }

    /**
     * 
     * @return SMPPVersion $version
     */
    public function getVersion()
    {
        return ($this->version)
            ? $this->version->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSystemType($systemType = null)
    {
        $this->systemType = ($systemType InstanceOf SMPPSystemType)
             ? $systemType
             : new SMPPSystemType($systemType);
        $this->systemType->setElementName('systemType');
        return $this;
    }

    /**
     * 
     * @return SMPPSystemType $systemType
     */
    public function getSystemType()
    {
        return ($this->systemType)
            ? $this->systemType->getElementValue()
            : null;
    }
}

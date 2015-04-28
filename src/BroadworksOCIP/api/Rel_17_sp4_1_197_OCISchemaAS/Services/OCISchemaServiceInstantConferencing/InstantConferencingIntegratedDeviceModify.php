<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Integrated Instant Conferencing device settings.
 */
class InstantConferencingIntegratedDeviceModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingIntegratedDeviceModify';
    protected $userName;
    protected $password;
    protected $secureProvisioning;
    protected $unencryptedProvisioningPort;
    protected $encryptedProvisioningPort;

    public function __construct(
         $userName = null,
         $password = null,
         $secureProvisioning = null,
         $unencryptedProvisioningPort = null,
         $encryptedProvisioningPort = null
    ) {
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setSecureProvisioning($secureProvisioning);
        $this->setUnencryptedProvisioningPort($unencryptedProvisioningPort);
        $this->setEncryptedProvisioningPort($encryptedProvisioningPort);
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
    public function setUserName($userName = null)
    {
        $this->userName = new SimpleContent($userName);
        $this->userName->setElementName('userName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userName
     */
    public function getUserName()
    {
        return ($this->userName)
            ? $this->userName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = new SimpleContent($password);
        $this->password->setElementName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $password
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
    public function setSecureProvisioning($secureProvisioning = null)
    {
        $this->secureProvisioning = new SimpleContent($secureProvisioning);
        $this->secureProvisioning->setElementName('secureProvisioning');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $secureProvisioning
     */
    public function getSecureProvisioning()
    {
        return ($this->secureProvisioning)
            ? $this->secureProvisioning->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUnencryptedProvisioningPort($unencryptedProvisioningPort = null)
    {
        $this->unencryptedProvisioningPort = new SimpleContent($unencryptedProvisioningPort);
        $this->unencryptedProvisioningPort->setElementName('unencryptedProvisioningPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $unencryptedProvisioningPort
     */
    public function getUnencryptedProvisioningPort()
    {
        return ($this->unencryptedProvisioningPort)
            ? $this->unencryptedProvisioningPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEncryptedProvisioningPort($encryptedProvisioningPort = null)
    {
        $this->encryptedProvisioningPort = new SimpleContent($encryptedProvisioningPort);
        $this->encryptedProvisioningPort->setElementName('encryptedProvisioningPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $encryptedProvisioningPort
     */
    public function getEncryptedProvisioningPort()
    {
        return ($this->encryptedProvisioningPort)
            ? $this->encryptedProvisioningPort->getElementValue()
            : null;
    }
}

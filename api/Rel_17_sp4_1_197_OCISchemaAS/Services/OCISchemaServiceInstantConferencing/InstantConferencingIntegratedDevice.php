<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Integrated Instant Conferencing device settings.
 */
class InstantConferencingIntegratedDevice extends ComplexType implements ComplexInterface
{
    public    $name                        = 'InstantConferencingIntegratedDevice';
    protected $userName                    = null;
    protected $password                    = null;
    protected $secureProvisioning          = null;
    protected $unencryptedProvisioningPort = null;
    protected $encryptedProvisioningPort   = null;

    public function __construct(
         $userName,
         $password,
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
        if (!$userName) return $this;
        $this->userName = new SimpleContent($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userName
     */
    public function getUserName()
    {
        return $this->userName->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = new SimpleContent($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $password
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setSecureProvisioning($secureProvisioning = null)
    {
        if (!$secureProvisioning) return $this;
        $this->secureProvisioning = new SimpleContent($secureProvisioning);
        $this->secureProvisioning->setName('secureProvisioning');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $secureProvisioning
     */
    public function getSecureProvisioning()
    {
        return $this->secureProvisioning->getValue();
    }

    /**
     * 
     */
    public function setUnencryptedProvisioningPort($unencryptedProvisioningPort = null)
    {
        if (!$unencryptedProvisioningPort) return $this;
        $this->unencryptedProvisioningPort = new SimpleContent($unencryptedProvisioningPort);
        $this->unencryptedProvisioningPort->setName('unencryptedProvisioningPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $unencryptedProvisioningPort
     */
    public function getUnencryptedProvisioningPort()
    {
        return $this->unencryptedProvisioningPort->getValue();
    }

    /**
     * 
     */
    public function setEncryptedProvisioningPort($encryptedProvisioningPort = null)
    {
        if (!$encryptedProvisioningPort) return $this;
        $this->encryptedProvisioningPort = new SimpleContent($encryptedProvisioningPort);
        $this->encryptedProvisioningPort->setName('encryptedProvisioningPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $encryptedProvisioningPort
     */
    public function getEncryptedProvisioningPort()
    {
        return $this->encryptedProvisioningPort->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the BroadWorks Mobile Manager service system settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'SystemBroadWorksMobileManagerModifyRequest';
    protected $scfApiNetAddress1  = null;
    protected $scfApiNetAddress2  = null;
    protected $userName           = null;
    protected $password           = null;
    protected $emailFromAddress   = null;
    protected $scfIMSOnly         = null;
    protected $signalingIPAddress = null;
    protected $signalingPort      = null;

    public function __construct(
         $scfApiNetAddress1 = null,
         $scfApiNetAddress2 = null,
         $userName = null,
         $password = null,
         $emailFromAddress = null,
         $scfIMSOnly = null,
         $signalingIPAddress = null,
         $signalingPort = null
    ) {
        $this->setScfApiNetAddress1($scfApiNetAddress1);
        $this->setScfApiNetAddress2($scfApiNetAddress2);
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setEmailFromAddress($emailFromAddress);
        $this->setScfIMSOnly($scfIMSOnly);
        $this->setSignalingIPAddress($signalingIPAddress);
        $this->setSignalingPort($signalingPort);
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
    public function setScfApiNetAddress1($scfApiNetAddress1 = null)
    {
        if (!$scfApiNetAddress1) return $this;
        $this->scfApiNetAddress1 = ($scfApiNetAddress1 InstanceOf NetAddress)
             ? $scfApiNetAddress1
             : new NetAddress($scfApiNetAddress1);
        $this->scfApiNetAddress1->setName('scfApiNetAddress1');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getScfApiNetAddress1()
    {
        return $this->scfApiNetAddress1->getValue();
    }

    /**
     * 
     */
    public function setScfApiNetAddress2($scfApiNetAddress2 = null)
    {
        if (!$scfApiNetAddress2) return $this;
        $this->scfApiNetAddress2 = ($scfApiNetAddress2 InstanceOf NetAddress)
             ? $scfApiNetAddress2
             : new NetAddress($scfApiNetAddress2);
        $this->scfApiNetAddress2->setName('scfApiNetAddress2');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getScfApiNetAddress2()
    {
        return $this->scfApiNetAddress2->getValue();
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        if (!$userName) return $this;
        $this->userName = ($userName InstanceOf BroadWorksMobileManagerUserName)
             ? $userName
             : new BroadWorksMobileManagerUserName($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerUserName
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
        $this->password = ($password InstanceOf BroadWorksMobileManagerPassword)
             ? $password
             : new BroadWorksMobileManagerPassword($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerPassword
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setEmailFromAddress($emailFromAddress = null)
    {
        if (!$emailFromAddress) return $this;
        $this->emailFromAddress = ($emailFromAddress InstanceOf EmailAddress)
             ? $emailFromAddress
             : new EmailAddress($emailFromAddress);
        $this->emailFromAddress->setName('emailFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getEmailFromAddress()
    {
        return $this->emailFromAddress->getValue();
    }

    /**
     * 
     */
    public function setScfIMSOnly($scfIMSOnly = null)
    {
        if (!$scfIMSOnly) return $this;
        $this->scfIMSOnly = new PrimitiveType($scfIMSOnly);
        $this->scfIMSOnly->setName('scfIMSOnly');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getScfIMSOnly()
    {
        return $this->scfIMSOnly->getValue();
    }

    /**
     * 
     */
    public function setSignalingIPAddress($signalingIPAddress = null)
    {
        if (!$signalingIPAddress) return $this;
        $this->signalingIPAddress = ($signalingIPAddress InstanceOf IPAddress)
             ? $signalingIPAddress
             : new IPAddress($signalingIPAddress);
        $this->signalingIPAddress->setName('signalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress
     */
    public function getSignalingIPAddress()
    {
        return $this->signalingIPAddress->getValue();
    }

    /**
     * 
     */
    public function setSignalingPort($signalingPort = null)
    {
        if (!$signalingPort) return $this;
        $this->signalingPort = ($signalingPort InstanceOf Port)
             ? $signalingPort
             : new Port($signalingPort);
        $this->signalingPort->setName('signalingPort');
        return $this;
    }

    /**
     * 
     * @return Port
     */
    public function getSignalingPort()
    {
        return $this->signalingPort->getValue();
    }
}

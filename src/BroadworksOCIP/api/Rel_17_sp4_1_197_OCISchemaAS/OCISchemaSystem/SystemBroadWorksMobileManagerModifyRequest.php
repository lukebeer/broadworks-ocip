<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the BroadWorks Mobile Manager service system settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobileManagerModifyRequest';
    protected $scfApiNetAddress1;
    protected $scfApiNetAddress2;
    protected $userName;
    protected $password;
    protected $emailFromAddress;
    protected $scfIMSOnly;
    protected $signalingIPAddress;
    protected $signalingPort;

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
     * @return mixed $response
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
        $this->scfApiNetAddress1 = ($scfApiNetAddress1 InstanceOf NetAddress)
             ? $scfApiNetAddress1
             : new NetAddress($scfApiNetAddress1);
        $this->scfApiNetAddress1->setElementName('scfApiNetAddress1');
        return $this;
    }

    /**
     * 
     * @return NetAddress $scfApiNetAddress1
     */
    public function getScfApiNetAddress1()
    {
        return ($this->scfApiNetAddress1)
            ? $this->scfApiNetAddress1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScfApiNetAddress2($scfApiNetAddress2 = null)
    {
        $this->scfApiNetAddress2 = ($scfApiNetAddress2 InstanceOf NetAddress)
             ? $scfApiNetAddress2
             : new NetAddress($scfApiNetAddress2);
        $this->scfApiNetAddress2->setElementName('scfApiNetAddress2');
        return $this;
    }

    /**
     * 
     * @return NetAddress $scfApiNetAddress2
     */
    public function getScfApiNetAddress2()
    {
        return ($this->scfApiNetAddress2)
            ? $this->scfApiNetAddress2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf BroadWorksMobileManagerUserName)
             ? $userName
             : new BroadWorksMobileManagerUserName($userName);
        $this->userName->setElementName('userName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerUserName $userName
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
        $this->password = ($password InstanceOf BroadWorksMobileManagerPassword)
             ? $password
             : new BroadWorksMobileManagerPassword($password);
        $this->password->setElementName('password');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerPassword $password
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
    public function setEmailFromAddress($emailFromAddress = null)
    {
        $this->emailFromAddress = ($emailFromAddress InstanceOf EmailAddress)
             ? $emailFromAddress
             : new EmailAddress($emailFromAddress);
        $this->emailFromAddress->setElementName('emailFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailFromAddress
     */
    public function getEmailFromAddress()
    {
        return ($this->emailFromAddress)
            ? $this->emailFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScfIMSOnly($scfIMSOnly = null)
    {
        $this->scfIMSOnly = new PrimitiveType($scfIMSOnly);
        $this->scfIMSOnly->setElementName('scfIMSOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $scfIMSOnly
     */
    public function getScfIMSOnly()
    {
        return ($this->scfIMSOnly)
            ? $this->scfIMSOnly->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSignalingIPAddress($signalingIPAddress = null)
    {
        $this->signalingIPAddress = ($signalingIPAddress InstanceOf IPAddress)
             ? $signalingIPAddress
             : new IPAddress($signalingIPAddress);
        $this->signalingIPAddress->setElementName('signalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $signalingIPAddress
     */
    public function getSignalingIPAddress()
    {
        return ($this->signalingIPAddress)
            ? $this->signalingIPAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port)
             ? $signalingPort
             : new Port($signalingPort);
        $this->signalingPort->setElementName('signalingPort');
        return $this;
    }

    /**
     * 
     * @return Port $signalingPort
     */
    public function getSignalingPort()
    {
        return ($this->signalingPort)
            ? $this->signalingPort->getElementValue()
            : null;
    }
}

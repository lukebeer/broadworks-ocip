<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerUserName;
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
 * Response to the SystemBroadWorksMobileManagerGetRequest
 */
class SystemBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBroadWorksMobileManagerGetResponse';
    protected $scfApiNetAddress1;
    protected $scfApiNetAddress2;
    protected $userName;
    protected $emailFromAddress;
    protected $scfIMSOnly;
    protected $signalingIPAddress;
    protected $signalingPort;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBroadWorksMobileManagerGetResponse $response
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
        $this->scfApiNetAddress1->setName('scfApiNetAddress1');
        return $this;
    }

    /**
     * 
     * @return NetAddress $scfApiNetAddress1
     */
    public function getScfApiNetAddress1()
    {
        return ($this->scfApiNetAddress1) ? $this->scfApiNetAddress1->getValue() : null;
    }

    /**
     * 
     */
    public function setScfApiNetAddress2($scfApiNetAddress2 = null)
    {
        $this->scfApiNetAddress2 = ($scfApiNetAddress2 InstanceOf NetAddress)
             ? $scfApiNetAddress2
             : new NetAddress($scfApiNetAddress2);
        $this->scfApiNetAddress2->setName('scfApiNetAddress2');
        return $this;
    }

    /**
     * 
     * @return NetAddress $scfApiNetAddress2
     */
    public function getScfApiNetAddress2()
    {
        return ($this->scfApiNetAddress2) ? $this->scfApiNetAddress2->getValue() : null;
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf BroadWorksMobileManagerUserName)
             ? $userName
             : new BroadWorksMobileManagerUserName($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerUserName $userName
     */
    public function getUserName()
    {
        return ($this->userName) ? $this->userName->getValue() : null;
    }

    /**
     * 
     */
    public function setEmailFromAddress($emailFromAddress = null)
    {
        $this->emailFromAddress = ($emailFromAddress InstanceOf EmailAddress)
             ? $emailFromAddress
             : new EmailAddress($emailFromAddress);
        $this->emailFromAddress->setName('emailFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailFromAddress
     */
    public function getEmailFromAddress()
    {
        return ($this->emailFromAddress) ? $this->emailFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setScfIMSOnly($scfIMSOnly = null)
    {
        $this->scfIMSOnly = new PrimitiveType($scfIMSOnly);
        $this->scfIMSOnly->setName('scfIMSOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $scfIMSOnly
     */
    public function getScfIMSOnly()
    {
        return ($this->scfIMSOnly) ? $this->scfIMSOnly->getValue() : null;
    }

    /**
     * 
     */
    public function setSignalingIPAddress($signalingIPAddress = null)
    {
        $this->signalingIPAddress = ($signalingIPAddress InstanceOf IPAddress)
             ? $signalingIPAddress
             : new IPAddress($signalingIPAddress);
        $this->signalingIPAddress->setName('signalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $signalingIPAddress
     */
    public function getSignalingIPAddress()
    {
        return ($this->signalingIPAddress) ? $this->signalingIPAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port)
             ? $signalingPort
             : new Port($signalingPort);
        $this->signalingPort->setName('signalingPort');
        return $this;
    }

    /**
     * 
     * @return Port $signalingPort
     */
    public function getSignalingPort()
    {
        return ($this->signalingPort) ? $this->signalingPort->getValue() : null;
    }
}

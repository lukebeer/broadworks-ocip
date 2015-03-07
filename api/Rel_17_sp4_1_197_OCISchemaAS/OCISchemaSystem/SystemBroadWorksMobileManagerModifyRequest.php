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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the BroadWorks Mobile Manager service system settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $scfApiNetAddress1   = null;
    protected $scfApiNetAddress2   = null;
    protected $userName            = null;
    protected $password            = null;
    protected $emailFromAddress    = null;
    protected $scfIMSOnly          = null;
    protected $signalingIPAddress  = null;
    protected $signalingPort       = null;

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

    public function setScfApiNetAddress1($scfApiNetAddress1 = null)
    {
        $this->scfApiNetAddress1 = ($scfApiNetAddress1 InstanceOf NetAddress)
             ? $scfApiNetAddress1
             : new NetAddress($scfApiNetAddress1);
    }

    public function getScfApiNetAddress1()
    {
        return (!$this->scfApiNetAddress1) ?: $this->scfApiNetAddress1->value();
    }

    public function setScfApiNetAddress2($scfApiNetAddress2 = null)
    {
        $this->scfApiNetAddress2 = ($scfApiNetAddress2 InstanceOf NetAddress)
             ? $scfApiNetAddress2
             : new NetAddress($scfApiNetAddress2);
    }

    public function getScfApiNetAddress2()
    {
        return (!$this->scfApiNetAddress2) ?: $this->scfApiNetAddress2->value();
    }

    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf BroadWorksMobileManagerUserName)
             ? $userName
             : new BroadWorksMobileManagerUserName($userName);
    }

    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->value();
    }

    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf BroadWorksMobileManagerPassword)
             ? $password
             : new BroadWorksMobileManagerPassword($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setEmailFromAddress($emailFromAddress = null)
    {
        $this->emailFromAddress = ($emailFromAddress InstanceOf EmailAddress)
             ? $emailFromAddress
             : new EmailAddress($emailFromAddress);
    }

    public function getEmailFromAddress()
    {
        return (!$this->emailFromAddress) ?: $this->emailFromAddress->value();
    }

    public function setScfIMSOnly(xs:boolean $scfIMSOnly = null)
    {
    }

    public function getScfIMSOnly()
    {
        return (!$this->scfIMSOnly) ?: $this->scfIMSOnly->value();
    }

    public function setSignalingIPAddress($signalingIPAddress = null)
    {
        $this->signalingIPAddress = ($signalingIPAddress InstanceOf IPAddress)
             ? $signalingIPAddress
             : new IPAddress($signalingIPAddress);
    }

    public function getSignalingIPAddress()
    {
        return (!$this->signalingIPAddress) ?: $this->signalingIPAddress->value();
    }

    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port)
             ? $signalingPort
             : new Port($signalingPort);
    }

    public function getSignalingPort()
    {
        return (!$this->signalingPort) ?: $this->signalingPort->value();
    }
}

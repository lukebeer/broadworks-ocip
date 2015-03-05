<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemBroadWorksMobileManagerGetRequest
 */
class SystemBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $scfApiNetAddress1=null,
             $scfApiNetAddress2=null,
             $userName=null,
             $emailFromAddress=null,
             $scfIMSOnly,
             $signalingIPAddress=null,
             $signalingPort=null
    ) {
        $this->scfApiNetAddress1  = new NetAddress($scfApiNetAddress1);
        $this->scfApiNetAddress2  = new NetAddress($scfApiNetAddress2);
        $this->userName           = new BroadWorksMobileManagerUserName($userName);
        $this->emailFromAddress   = new EmailAddress($emailFromAddress);
        $this->scfIMSOnly         = $scfIMSOnly;
        $this->signalingIPAddress = new IPAddress($signalingIPAddress);
        $this->signalingPort      = new Port($signalingPort);
        $this->args               = func_get_args();
    }

    public function setScfApiNetAddress1($scfApiNetAddress1)
    {
        $scfApiNetAddress1 and $this->scfApiNetAddress1 = new NetAddress($scfApiNetAddress1);
    }

    public function getScfApiNetAddress1()
    {
        return (!$this->scfApiNetAddress1) ?: $this->scfApiNetAddress1->value();
    }

    public function setScfApiNetAddress2($scfApiNetAddress2)
    {
        $scfApiNetAddress2 and $this->scfApiNetAddress2 = new NetAddress($scfApiNetAddress2);
    }

    public function getScfApiNetAddress2()
    {
        return (!$this->scfApiNetAddress2) ?: $this->scfApiNetAddress2->value();
    }

    public function setUserName($userName)
    {
        $userName and $this->userName = new BroadWorksMobileManagerUserName($userName);
    }

    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->value();
    }

    public function setEmailFromAddress($emailFromAddress)
    {
        $emailFromAddress and $this->emailFromAddress = new EmailAddress($emailFromAddress);
    }

    public function getEmailFromAddress()
    {
        return (!$this->emailFromAddress) ?: $this->emailFromAddress->value();
    }

    public function setScfIMSOnly($scfIMSOnly)
    {
        $scfIMSOnly and $this->scfIMSOnly = new xs:boolean($scfIMSOnly);
    }

    public function getScfIMSOnly()
    {
        return (!$this->scfIMSOnly) ?: $this->scfIMSOnly->value();
    }

    public function setSignalingIPAddress($signalingIPAddress)
    {
        $signalingIPAddress and $this->signalingIPAddress = new IPAddress($signalingIPAddress);
    }

    public function getSignalingIPAddress()
    {
        return (!$this->signalingIPAddress) ?: $this->signalingIPAddress->value();
    }

    public function setSignalingPort($signalingPort)
    {
        $signalingPort and $this->signalingPort = new Port($signalingPort);
    }

    public function getSignalingPort()
    {
        return (!$this->signalingPort) ?: $this->signalingPort->value();
    }
}

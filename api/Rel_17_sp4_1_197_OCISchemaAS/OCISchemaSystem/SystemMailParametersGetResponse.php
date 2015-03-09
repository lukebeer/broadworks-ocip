<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMTPFromAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMTPSubject;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMailParametersGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMailParametersGetListRequest.
 *         Contains a list of system Mail parameters.
 */
class SystemMailParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $primaryServerNetAddress          = null;
    protected $secondaryServerNetAddress        = null;
    protected $defaultFromAddress               = null;
    protected $defaultSubject                   = null;
    protected $supportDNSSRVForMailServerAccess = null;

    /**
     * @return SystemMailParametersGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setPrimaryServerNetAddress($primaryServerNetAddress = null)
    {
        $this->primaryServerNetAddress = ($primaryServerNetAddress InstanceOf NetAddress)
             ? $primaryServerNetAddress
             : new NetAddress($primaryServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getPrimaryServerNetAddress()
    {
        return (!$this->primaryServerNetAddress) ?: $this->primaryServerNetAddress->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setSecondaryServerNetAddress($secondaryServerNetAddress = null)
    {
        $this->secondaryServerNetAddress = ($secondaryServerNetAddress InstanceOf NetAddress)
             ? $secondaryServerNetAddress
             : new NetAddress($secondaryServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getSecondaryServerNetAddress()
    {
        return (!$this->secondaryServerNetAddress) ?: $this->secondaryServerNetAddress->getValue();
    }

    /**
     * SMTP from address.
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf SMTPFromAddress)
             ? $defaultFromAddress
             : new SMTPFromAddress($defaultFromAddress);
    }

    /**
     * SMTP from address.
     */
    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->getValue();
    }

    /**
     * SMTP subject.
     */
    public function setDefaultSubject($defaultSubject = null)
    {
        $this->defaultSubject = ($defaultSubject InstanceOf SMTPSubject)
             ? $defaultSubject
             : new SMTPSubject($defaultSubject);
    }

    /**
     * SMTP subject.
     */
    public function getDefaultSubject()
    {
        return (!$this->defaultSubject) ?: $this->defaultSubject->getValue();
    }

    /**
     * 
     */
    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess = null)
    {
        $this->supportDNSSRVForMailServerAccess = (boolean) $supportDNSSRVForMailServerAccess;
    }

    /**
     * 
     */
    public function getSupportDNSSRVForMailServerAccess()
    {
        return (!$this->supportDNSSRVForMailServerAccess) ?: $this->supportDNSSRVForMailServerAccess;
    }
}

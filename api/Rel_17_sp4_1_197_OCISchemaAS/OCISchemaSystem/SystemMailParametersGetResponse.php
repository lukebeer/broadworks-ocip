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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name = 'SystemMailParametersGetResponse';
    protected $primaryServerNetAddress;
    protected $secondaryServerNetAddress;
    protected $defaultFromAddress;
    protected $defaultSubject;
    protected $supportDNSSRVForMailServerAccess;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMailParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPrimaryServerNetAddress($primaryServerNetAddress = null)
    {
        $this->primaryServerNetAddress = ($primaryServerNetAddress InstanceOf NetAddress)
             ? $primaryServerNetAddress
             : new NetAddress($primaryServerNetAddress);
        $this->primaryServerNetAddress->setName('primaryServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $primaryServerNetAddress
     */
    public function getPrimaryServerNetAddress()
    {
        return ($this->primaryServerNetAddress) ? $this->primaryServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSecondaryServerNetAddress($secondaryServerNetAddress = null)
    {
        $this->secondaryServerNetAddress = ($secondaryServerNetAddress InstanceOf NetAddress)
             ? $secondaryServerNetAddress
             : new NetAddress($secondaryServerNetAddress);
        $this->secondaryServerNetAddress->setName('secondaryServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $secondaryServerNetAddress
     */
    public function getSecondaryServerNetAddress()
    {
        return ($this->secondaryServerNetAddress) ? $this->secondaryServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf SMTPFromAddress)
             ? $defaultFromAddress
             : new SMTPFromAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return SMTPFromAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress) ? $this->defaultFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultSubject($defaultSubject = null)
    {
        $this->defaultSubject = ($defaultSubject InstanceOf SMTPSubject)
             ? $defaultSubject
             : new SMTPSubject($defaultSubject);
        $this->defaultSubject->setName('defaultSubject');
        return $this;
    }

    /**
     * 
     * @return SMTPSubject $defaultSubject
     */
    public function getDefaultSubject()
    {
        return ($this->defaultSubject) ? $this->defaultSubject->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess = null)
    {
        $this->supportDNSSRVForMailServerAccess = new PrimitiveType($supportDNSSRVForMailServerAccess);
        $this->supportDNSSRVForMailServerAccess->setName('supportDNSSRVForMailServerAccess');
        return $this;
    }

    /**
     * 
     * @return boolean $supportDNSSRVForMailServerAccess
     */
    public function getSupportDNSSRVForMailServerAccess()
    {
        return ($this->supportDNSSRVForMailServerAccess) ? $this->supportDNSSRVForMailServerAccess->getValue() : null;
    }
}

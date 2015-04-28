<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMTPFromAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMTPSubject;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMailParametersGetListRequest.
 *         Contains a list of system Mail parameters.
 */
class SystemMailParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMailParametersGetResponse';
    protected $primaryServerNetAddress;
    protected $secondaryServerNetAddress;
    protected $defaultFromAddress;
    protected $defaultSubject;
    protected $supportDNSSRVForMailServerAccess;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMailParametersGetResponse $response
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
        $this->primaryServerNetAddress->setElementName('primaryServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $primaryServerNetAddress
     */
    public function getPrimaryServerNetAddress()
    {
        return ($this->primaryServerNetAddress)
            ? $this->primaryServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSecondaryServerNetAddress($secondaryServerNetAddress = null)
    {
        $this->secondaryServerNetAddress = ($secondaryServerNetAddress InstanceOf NetAddress)
             ? $secondaryServerNetAddress
             : new NetAddress($secondaryServerNetAddress);
        $this->secondaryServerNetAddress->setElementName('secondaryServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $secondaryServerNetAddress
     */
    public function getSecondaryServerNetAddress()
    {
        return ($this->secondaryServerNetAddress)
            ? $this->secondaryServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf SMTPFromAddress)
             ? $defaultFromAddress
             : new SMTPFromAddress($defaultFromAddress);
        $this->defaultFromAddress->setElementName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return SMTPFromAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress)
            ? $this->defaultFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultSubject($defaultSubject = null)
    {
        $this->defaultSubject = ($defaultSubject InstanceOf SMTPSubject)
             ? $defaultSubject
             : new SMTPSubject($defaultSubject);
        $this->defaultSubject->setElementName('defaultSubject');
        return $this;
    }

    /**
     * 
     * @return SMTPSubject $defaultSubject
     */
    public function getDefaultSubject()
    {
        return ($this->defaultSubject)
            ? $this->defaultSubject->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess = null)
    {
        $this->supportDNSSRVForMailServerAccess = new PrimitiveType($supportDNSSRVForMailServerAccess);
        $this->supportDNSSRVForMailServerAccess->setElementName('supportDNSSRVForMailServerAccess');
        return $this;
    }

    /**
     * 
     * @return boolean $supportDNSSRVForMailServerAccess
     */
    public function getSupportDNSSRVForMailServerAccess()
    {
        return ($this->supportDNSSRVForMailServerAccess)
            ? $this->supportDNSSRVForMailServerAccess->getElementValue()
            : null;
    }
}

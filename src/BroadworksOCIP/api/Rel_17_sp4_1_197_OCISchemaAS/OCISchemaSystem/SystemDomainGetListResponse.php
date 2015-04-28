<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains a simple list of all system-level domain names.
 */
class SystemDomainGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDomainGetListResponse';
    protected $systemDefaultDomain;
    protected $domain;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSystemDefaultDomain($systemDefaultDomain = null)
    {
        $this->systemDefaultDomain = ($systemDefaultDomain InstanceOf NetAddress)
             ? $systemDefaultDomain
             : new NetAddress($systemDefaultDomain);
        $this->systemDefaultDomain->setElementName('systemDefaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $systemDefaultDomain
     */
    public function getSystemDefaultDomain()
    {
        return ($this->systemDefaultDomain)
            ? $this->systemDefaultDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDomain($domain = null)
    {
        $this->domain = ($domain InstanceOf NetAddress)
             ? $domain
             : new NetAddress($domain);
        $this->domain->setElementName('domain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $domain
     */
    public function getDomain()
    {
        return ($this->domain)
            ? $this->domain->getElementValue()
            : null;
    }
}

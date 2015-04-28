<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains a simple list of all group domain names.
 */
class GroupDomainGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDomainGetAssignedListResponse';
    protected $groupDefaultDomain;
    protected $domain;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDomainGetAssignedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupDefaultDomain($groupDefaultDomain = null)
    {
        $this->groupDefaultDomain = ($groupDefaultDomain InstanceOf NetAddress)
             ? $groupDefaultDomain
             : new NetAddress($groupDefaultDomain);
        $this->groupDefaultDomain->setElementName('groupDefaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $groupDefaultDomain
     */
    public function getGroupDefaultDomain()
    {
        return ($this->groupDefaultDomain)
            ? $this->groupDefaultDomain->getElementValue()
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

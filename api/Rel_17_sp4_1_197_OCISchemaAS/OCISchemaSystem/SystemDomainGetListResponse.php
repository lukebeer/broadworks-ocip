<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a simple list of all system-level domain names.
 */
class SystemDomainGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemDomainGetListResponse';
    protected $systemDefaultDomain = null;
    protected $domain              = null;

    /**
     * @return SystemDomainGetListResponse
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
        if (!$systemDefaultDomain) return $this;
        $this->systemDefaultDomain = ($systemDefaultDomain InstanceOf NetAddress)
             ? $systemDefaultDomain
             : new NetAddress($systemDefaultDomain);
        $this->systemDefaultDomain->setName('systemDefaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getSystemDefaultDomain()
    {
        return $this->systemDefaultDomain->getValue();
    }

    /**
     * 
     */
    public function setDomain($domain = null)
    {
        if (!$domain) return $this;
        $this->domain = ($domain InstanceOf NetAddress)
             ? $domain
             : new NetAddress($domain);
        $this->domain->setName('domain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getDomain()
    {
        return $this->domain->getValue();
    }
}

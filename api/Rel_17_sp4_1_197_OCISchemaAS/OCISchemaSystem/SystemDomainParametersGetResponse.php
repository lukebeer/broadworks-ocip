<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDomainParametersGetRequest.
 *         Contains the system Domain parameters.
 */
class SystemDomainParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemDomainParametersGetResponse';
    protected $useAliasForDomain = null;
    protected $defaultDomain     = null;

    /**
     * @return SystemDomainParametersGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseAliasForDomain($useAliasForDomain = null)
    {
        if (!$useAliasForDomain) return $this;
        $this->useAliasForDomain = new PrimitiveType($useAliasForDomain);
        $this->useAliasForDomain->setName('useAliasForDomain');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseAliasForDomain()
    {
        return $this->useAliasForDomain->getValue();
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        if (!$defaultDomain) return $this;
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain->getValue();
    }
}

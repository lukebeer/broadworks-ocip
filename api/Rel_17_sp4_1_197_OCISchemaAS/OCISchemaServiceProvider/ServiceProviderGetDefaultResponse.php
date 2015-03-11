<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderGetDefaultRequest. All values are default values for
 *         a service provider or enterprise's profile.
 */
class ServiceProviderGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'ServiceProviderGetDefaultResponse';
    protected $isEnterprise  = null;
    protected $defaultDomain = null;

    /**
     * @return ServiceProviderGetDefaultResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsEnterprise($isEnterprise = null)
    {
        if (!$isEnterprise) return $this;
        $this->isEnterprise = new PrimitiveType($isEnterprise);
        $this->isEnterprise->setName('isEnterprise');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise->getValue();
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

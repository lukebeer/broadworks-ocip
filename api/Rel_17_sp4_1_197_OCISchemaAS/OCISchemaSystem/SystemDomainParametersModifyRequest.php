<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainParametersModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify system Domain parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemDomainParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $useAliasForDomain = null;
    protected $defaultDomain     = null;

    public function __construct(
         $useAliasForDomain = null,
         $defaultDomain = null
    ) {
        $this->setUseAliasForDomain($useAliasForDomain);
        $this->setDefaultDomain($defaultDomain);
    }

    /**
     * @return SystemDomainParametersModifyResponse
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
        $this->useAliasForDomain = (boolean) $useAliasForDomain;
    }

    /**
     * 
     */
    public function getUseAliasForDomain()
    {
        return (!$this->useAliasForDomain) ?: $this->useAliasForDomain;
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify system Domain parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemDomainParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDomainParametersModifyRequest';
    protected $useAliasForDomain;
    protected $defaultDomain;

    public function __construct(
         $useAliasForDomain = null,
         $defaultDomain = null
    ) {
        $this->setUseAliasForDomain($useAliasForDomain);
        $this->setDefaultDomain($defaultDomain);
    }

    /**
     * @return mixed $response
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
        $this->useAliasForDomain = new PrimitiveType($useAliasForDomain);
        $this->useAliasForDomain->setElementName('useAliasForDomain');
        return $this;
    }

    /**
     * 
     * @return boolean $useAliasForDomain
     */
    public function getUseAliasForDomain()
    {
        return ($this->useAliasForDomain)
            ? $this->useAliasForDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setElementName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $defaultDomain
     */
    public function getDefaultDomain()
    {
        return ($this->defaultDomain)
            ? $this->defaultDomain->getElementValue()
            : null;
    }
}

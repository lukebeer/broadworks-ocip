<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ShInterfacePublicIdentityRefreshDelaySeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ShInterfaceRequestTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemShInterfaceParametersGetRequest.  Contains the Sh Interface system parameters.
 */
class SystemShInterfaceParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemShInterfaceParametersGetResponse';
    protected $hssRealm;
    protected $requestTimeoutSeconds;
    protected $publicIdentityRefreshDelaySeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemShInterfaceParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHssRealm($hssRealm = null)
    {
        $this->hssRealm = ($hssRealm InstanceOf DomainName)
             ? $hssRealm
             : new DomainName($hssRealm);
        $this->hssRealm->setElementName('hssRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName $hssRealm
     */
    public function getHssRealm()
    {
        return ($this->hssRealm)
            ? $this->hssRealm->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequestTimeoutSeconds($requestTimeoutSeconds = null)
    {
        $this->requestTimeoutSeconds = ($requestTimeoutSeconds InstanceOf ShInterfaceRequestTimeoutSeconds)
             ? $requestTimeoutSeconds
             : new ShInterfaceRequestTimeoutSeconds($requestTimeoutSeconds);
        $this->requestTimeoutSeconds->setElementName('requestTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ShInterfaceRequestTimeoutSeconds $requestTimeoutSeconds
     */
    public function getRequestTimeoutSeconds()
    {
        return ($this->requestTimeoutSeconds)
            ? $this->requestTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds = null)
    {
        $this->publicIdentityRefreshDelaySeconds = ($publicIdentityRefreshDelaySeconds InstanceOf ShInterfacePublicIdentityRefreshDelaySeconds)
             ? $publicIdentityRefreshDelaySeconds
             : new ShInterfacePublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds);
        $this->publicIdentityRefreshDelaySeconds->setElementName('publicIdentityRefreshDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return ShInterfacePublicIdentityRefreshDelaySeconds $publicIdentityRefreshDelaySeconds
     */
    public function getPublicIdentityRefreshDelaySeconds()
    {
        return ($this->publicIdentityRefreshDelaySeconds)
            ? $this->publicIdentityRefreshDelaySeconds->getElementValue()
            : null;
    }
}

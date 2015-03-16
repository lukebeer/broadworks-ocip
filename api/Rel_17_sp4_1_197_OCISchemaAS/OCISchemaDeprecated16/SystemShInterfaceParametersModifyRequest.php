<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ShInterfacePublicIdentityRefreshDelaySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ShInterfaceRequestTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemShInterfaceParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemShInterfaceParametersModifyRequest';
    protected $hssRealm;
    protected $requestTimeoutSeconds;
    protected $publicIdentityRefreshDelaySeconds;

    public function __construct(
         $hssRealm = null,
         $requestTimeoutSeconds = null,
         $publicIdentityRefreshDelaySeconds = null
    ) {
        $this->setHssRealm($hssRealm);
        $this->setRequestTimeoutSeconds($requestTimeoutSeconds);
        $this->setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds);
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
    public function setHssRealm($hssRealm = null)
    {
        $this->hssRealm = ($hssRealm InstanceOf DomainName)
             ? $hssRealm
             : new DomainName($hssRealm);
        $this->hssRealm->setName('hssRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName $hssRealm
     */
    public function getHssRealm()
    {
        return ($this->hssRealm) ? $this->hssRealm->getValue() : null;
    }

    /**
     * 
     */
    public function setRequestTimeoutSeconds($requestTimeoutSeconds = null)
    {
        $this->requestTimeoutSeconds = ($requestTimeoutSeconds InstanceOf ShInterfaceRequestTimeoutSeconds)
             ? $requestTimeoutSeconds
             : new ShInterfaceRequestTimeoutSeconds($requestTimeoutSeconds);
        $this->requestTimeoutSeconds->setName('requestTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ShInterfaceRequestTimeoutSeconds $requestTimeoutSeconds
     */
    public function getRequestTimeoutSeconds()
    {
        return ($this->requestTimeoutSeconds) ? $this->requestTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds = null)
    {
        $this->publicIdentityRefreshDelaySeconds = ($publicIdentityRefreshDelaySeconds InstanceOf ShInterfacePublicIdentityRefreshDelaySeconds)
             ? $publicIdentityRefreshDelaySeconds
             : new ShInterfacePublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds);
        $this->publicIdentityRefreshDelaySeconds->setName('publicIdentityRefreshDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return ShInterfacePublicIdentityRefreshDelaySeconds $publicIdentityRefreshDelaySeconds
     */
    public function getPublicIdentityRefreshDelaySeconds()
    {
        return ($this->publicIdentityRefreshDelaySeconds) ? $this->publicIdentityRefreshDelaySeconds->getValue() : null;
    }
}

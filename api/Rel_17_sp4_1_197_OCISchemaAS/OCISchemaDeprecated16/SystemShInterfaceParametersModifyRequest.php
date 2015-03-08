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


/**
     * Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemShInterfaceParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $hssRealm                          = null;
    protected $requestTimeoutSeconds             = null;
    protected $publicIdentityRefreshDelaySeconds = null;

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
     * Network domain name.
     */
    public function setHssRealm($hssRealm = null)
    {
        $this->hssRealm = ($hssRealm InstanceOf DomainName)
             ? $hssRealm
             : new DomainName($hssRealm);
    }

    /**
     * Network domain name.
     */
    public function getHssRealm()
    {
        return (!$this->hssRealm) ?: $this->hssRealm->getValue();
    }

    /**
     * The amount of time to wait for a response to an Sh Interface request.
     */
    public function setRequestTimeoutSeconds($requestTimeoutSeconds = null)
    {
        $this->requestTimeoutSeconds = ($requestTimeoutSeconds InstanceOf ShInterfaceRequestTimeoutSeconds)
             ? $requestTimeoutSeconds
             : new ShInterfaceRequestTimeoutSeconds($requestTimeoutSeconds);
    }

    /**
     * The amount of time to wait for a response to an Sh Interface request.
     */
    public function getRequestTimeoutSeconds()
    {
        return (!$this->requestTimeoutSeconds) ?: $this->requestTimeoutSeconds->getValue();
    }

    /**
     * The amount of time to wait after a Public Identity has been added before dispatching the Public Identity refresh procedure.  A value of 0 indicates no delay.
     */
    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds = null)
    {
        $this->publicIdentityRefreshDelaySeconds = ($publicIdentityRefreshDelaySeconds InstanceOf ShInterfacePublicIdentityRefreshDelaySeconds)
             ? $publicIdentityRefreshDelaySeconds
             : new ShInterfacePublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds);
    }

    /**
     * The amount of time to wait after a Public Identity has been added before dispatching the Public Identity refresh procedure.  A value of 0 indicates no delay.
     */
    public function getPublicIdentityRefreshDelaySeconds()
    {
        return (!$this->publicIdentityRefreshDelaySeconds) ?: $this->publicIdentityRefreshDelaySeconds->getValue();
    }
}

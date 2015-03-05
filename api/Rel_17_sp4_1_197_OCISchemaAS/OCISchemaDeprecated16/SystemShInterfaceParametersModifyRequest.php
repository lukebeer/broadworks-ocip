<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ShInterfaceRequestTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ShInterfacePublicIdentityRefreshDelaySeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemShInterfaceParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $hssRealm=null,
             $requestTimeoutSeconds=null,
             $publicIdentityRefreshDelaySeconds=null
    ) {
        $this->hssRealm                          = new DomainName($hssRealm);
        $this->requestTimeoutSeconds             = $requestTimeoutSeconds;
        $this->publicIdentityRefreshDelaySeconds = $publicIdentityRefreshDelaySeconds;
        $this->args                              = func_get_args();
    }

    public function setHssRealm($hssRealm)
    {
        $hssRealm and $this->hssRealm = new DomainName($hssRealm);
    }

    public function getHssRealm()
    {
        return (!$this->hssRealm) ?: $this->hssRealm->value();
    }

    public function setRequestTimeoutSeconds($requestTimeoutSeconds)
    {
        $requestTimeoutSeconds and $this->requestTimeoutSeconds = new ShInterfaceRequestTimeoutSeconds($requestTimeoutSeconds);
    }

    public function getRequestTimeoutSeconds()
    {
        return (!$this->requestTimeoutSeconds) ?: $this->requestTimeoutSeconds->value();
    }

    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds)
    {
        $publicIdentityRefreshDelaySeconds and $this->publicIdentityRefreshDelaySeconds = new ShInterfacePublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds);
    }

    public function getPublicIdentityRefreshDelaySeconds()
    {
        return (!$this->publicIdentityRefreshDelaySeconds) ?: $this->publicIdentityRefreshDelaySeconds->value();
    }
}

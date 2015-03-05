<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify session admission control capacity for the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderSessionAdmissionControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $restrictAggregateSessions=null,
             $maxSessions=null,
             $maxUserOriginatingSessions=null,
             $maxUserTerminatingSessions=null,
             $countIntraServiceProviderSessions=null
    ) {
        $this->serviceProviderId                 = new ServiceProviderId($serviceProviderId);
        $this->restrictAggregateSessions         = $restrictAggregateSessions;
        $this->maxSessions                       = new NonNegativeInt($maxSessions);
        $this->maxUserOriginatingSessions        = new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserTerminatingSessions        = new NonNegativeInt($maxUserTerminatingSessions);
        $this->countIntraServiceProviderSessions = $countIntraServiceProviderSessions;
        $this->args                              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setRestrictAggregateSessions($restrictAggregateSessions)
    {
        $restrictAggregateSessions and $this->restrictAggregateSessions = new xs:boolean($restrictAggregateSessions);
    }

    public function getRestrictAggregateSessions()
    {
        return (!$this->restrictAggregateSessions) ?: $this->restrictAggregateSessions->value();
    }

    public function setMaxSessions($maxSessions)
    {
        $maxSessions and $this->maxSessions = new NonNegativeInt($maxSessions);
    }

    public function getMaxSessions()
    {
        return (!$this->maxSessions) ?: $this->maxSessions->value();
    }

    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $maxUserOriginatingSessions and $this->maxUserOriginatingSessions = new NonNegativeInt($maxUserOriginatingSessions);
    }

    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->value();
    }

    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $maxUserTerminatingSessions and $this->maxUserTerminatingSessions = new NonNegativeInt($maxUserTerminatingSessions);
    }

    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->value();
    }

    public function setCountIntraServiceProviderSessions($countIntraServiceProviderSessions)
    {
        $countIntraServiceProviderSessions and $this->countIntraServiceProviderSessions = new xs:boolean($countIntraServiceProviderSessions);
    }

    public function getCountIntraServiceProviderSessions()
    {
        return (!$this->countIntraServiceProviderSessions) ?: $this->countIntraServiceProviderSessions->value();
    }
}

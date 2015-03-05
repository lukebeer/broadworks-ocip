<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkMaximumRerouteAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkRouteExhaustionAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseEnterpriseTrunkGetRequest.
 */
class EnterpriseEnterpriseTrunkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maximumRerouteAttempts,
             $routeExhaustionAction,
             $routeExhaustionForwardAddress=null
    ) {
        $this->maximumRerouteAttempts        = $maximumRerouteAttempts;
        $this->routeExhaustionAction         = $routeExhaustionAction;
        $this->routeExhaustionForwardAddress = new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
        $this->args                          = func_get_args();
    }

    public function setMaximumRerouteAttempts($maximumRerouteAttempts)
    {
        $maximumRerouteAttempts and $this->maximumRerouteAttempts = new EnterpriseTrunkMaximumRerouteAttempts($maximumRerouteAttempts);
    }

    public function getMaximumRerouteAttempts()
    {
        return (!$this->maximumRerouteAttempts) ?: $this->maximumRerouteAttempts->value();
    }

    public function setRouteExhaustionAction($routeExhaustionAction)
    {
        $routeExhaustionAction and $this->routeExhaustionAction = new EnterpriseTrunkRouteExhaustionAction($routeExhaustionAction);
    }

    public function getRouteExhaustionAction()
    {
        return (!$this->routeExhaustionAction) ?: $this->routeExhaustionAction->value();
    }

    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress)
    {
        $routeExhaustionForwardAddress and $this->routeExhaustionForwardAddress = new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
    }

    public function getRouteExhaustionForwardAddress()
    {
        return (!$this->routeExhaustionForwardAddress) ?: $this->routeExhaustionForwardAddress->value();
    }
}

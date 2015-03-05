<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkMaximumRerouteAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkRouteExhaustionAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add an enterprise trunk in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEnterpriseTrunkAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $enterpriseTrunkName,
             $maximumRerouteAttempts,
             $routeExhaustionAction,
             $routeExhaustionForwardAddress=null
    ) {
        $this->serviceProviderId             = new ServiceProviderId($serviceProviderId);
        $this->groupId                       = new GroupId($groupId);
        $this->enterpriseTrunkName           = new EnterpriseTrunkName($enterpriseTrunkName);
        $this->maximumRerouteAttempts        = $maximumRerouteAttempts;
        $this->routeExhaustionAction         = $routeExhaustionAction;
        $this->routeExhaustionForwardAddress = new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
        $this->args                          = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $enterpriseTrunkName and $this->enterpriseTrunkName = new EnterpriseTrunkName($enterpriseTrunkName);
    }

    public function getEnterpriseTrunkName()
    {
        return (!$this->enterpriseTrunkName) ?: $this->enterpriseTrunkName->value();
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

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkMaximumRerouteAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkRouteExhaustionAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify an enterprise trunk in an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseEnterpriseTrunkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceProviderId             = null;
    protected $enterpriseTrunkName           = null;
    protected $newEnterpriseTrunkName        = null;
    protected $maximumRerouteAttempts        = null;
    protected $routeExhaustionAction         = null;
    protected $routeExhaustionForwardAddress = null;

    public function __construct(
         $serviceProviderId,
         $enterpriseTrunkName,
         $newEnterpriseTrunkName = null,
         $maximumRerouteAttempts = null,
         $routeExhaustionAction = null,
         $routeExhaustionForwardAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEnterpriseTrunkName($enterpriseTrunkName);
        $this->setNewEnterpriseTrunkName($newEnterpriseTrunkName);
        $this->setMaximumRerouteAttempts($maximumRerouteAttempts);
        $this->setRouteExhaustionAction($routeExhaustionAction);
        $this->setRouteExhaustionForwardAddress($routeExhaustionForwardAddress);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Enterprise Trunk name.
     *         Uniquely identifies an Enterprise Trunk in an enterprise or group.
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName = null)
    {
        $this->enterpriseTrunkName = ($enterpriseTrunkName InstanceOf EnterpriseTrunkName)
             ? $enterpriseTrunkName
             : new EnterpriseTrunkName($enterpriseTrunkName);
    }

    /**
     * Enterprise Trunk name.
     *         Uniquely identifies an Enterprise Trunk in an enterprise or group.
     */
    public function getEnterpriseTrunkName()
    {
        return (!$this->enterpriseTrunkName) ?: $this->enterpriseTrunkName->getValue();
    }

    /**
     * Enterprise Trunk name.
     *         Uniquely identifies an Enterprise Trunk in an enterprise or group.
     */
    public function setNewEnterpriseTrunkName($newEnterpriseTrunkName = null)
    {
        $this->newEnterpriseTrunkName = ($newEnterpriseTrunkName InstanceOf EnterpriseTrunkName)
             ? $newEnterpriseTrunkName
             : new EnterpriseTrunkName($newEnterpriseTrunkName);
    }

    /**
     * Enterprise Trunk name.
     *         Uniquely identifies an Enterprise Trunk in an enterprise or group.
     */
    public function getNewEnterpriseTrunkName()
    {
        return (!$this->newEnterpriseTrunkName) ?: $this->newEnterpriseTrunkName->getValue();
    }

    /**
     * Determines the maximum number of reroute attempts within an enterprise trunk.
     */
    public function setMaximumRerouteAttempts($maximumRerouteAttempts = null)
    {
        $this->maximumRerouteAttempts = ($maximumRerouteAttempts InstanceOf EnterpriseTrunkMaximumRerouteAttempts)
             ? $maximumRerouteAttempts
             : new EnterpriseTrunkMaximumRerouteAttempts($maximumRerouteAttempts);
    }

    /**
     * Determines the maximum number of reroute attempts within an enterprise trunk.
     */
    public function getMaximumRerouteAttempts()
    {
        return (!$this->maximumRerouteAttempts) ?: $this->maximumRerouteAttempts->getValue();
    }

    /**
     * Enterprise Trunk Route Exhaustion Action
     */
    public function setRouteExhaustionAction($routeExhaustionAction = null)
    {
        $this->routeExhaustionAction = ($routeExhaustionAction InstanceOf EnterpriseTrunkRouteExhaustionAction)
             ? $routeExhaustionAction
             : new EnterpriseTrunkRouteExhaustionAction($routeExhaustionAction);
    }

    /**
     * Enterprise Trunk Route Exhaustion Action
     */
    public function getRouteExhaustionAction()
    {
        return (!$this->routeExhaustionAction) ?: $this->routeExhaustionAction->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress = null)
    {
        $this->routeExhaustionForwardAddress = ($routeExhaustionForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $routeExhaustionForwardAddress
             : new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getRouteExhaustionForwardAddress()
    {
        return (!$this->routeExhaustionForwardAddress) ?: $this->routeExhaustionForwardAddress->getValue();
    }
}

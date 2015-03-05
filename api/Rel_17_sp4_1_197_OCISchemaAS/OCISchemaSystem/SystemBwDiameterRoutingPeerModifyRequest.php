<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterPriority;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterWeight;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $instance,
             $realm,
             $applicationId,
             $identity,
             $priority=null,
             $weight=null
    ) {
        $this->instance      = $instance;
        $this->realm         = new DomainName($realm);
        $this->applicationId = $applicationId;
        $this->identity      = new DomainName($identity);
        $this->priority      = $priority;
        $this->weight        = $weight;
        $this->args          = func_get_args();
    }

    public function setInstance($instance)
    {
        $instance and $this->instance = new BwDiameterPeerInstance($instance);
    }

    public function getInstance()
    {
        return (!$this->instance) ?: $this->instance->value();
    }

    public function setRealm($realm)
    {
        $realm and $this->realm = new DomainName($realm);
    }

    public function getRealm()
    {
        return (!$this->realm) ?: $this->realm->value();
    }

    public function setApplicationId($applicationId)
    {
        $applicationId and $this->applicationId = new BwDiameterApplicationId($applicationId);
    }

    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->value();
    }

    public function setIdentity($identity)
    {
        $identity and $this->identity = new DomainName($identity);
    }

    public function getIdentity()
    {
        return (!$this->identity) ?: $this->identity->value();
    }

    public function setPriority($priority)
    {
        $priority and $this->priority = new BwDiameterPriority($priority);
    }

    public function getPriority()
    {
        return (!$this->priority) ?: $this->priority->value();
    }

    public function setWeight($weight)
    {
        $weight and $this->weight = new BwDiameterWeight($weight);
    }

    public function getWeight()
    {
        return (!$this->weight) ?: $this->weight->value();
    }
}

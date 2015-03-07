<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPriority;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterWeight;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $instance       = null;
    protected $realm          = null;
    protected $applicationId  = null;
    protected $identity       = null;
    protected $priority       = null;
    protected $weight         = null;

    public function __construct(
         $instance,
         $realm,
         $applicationId,
         $identity,
         $priority = null,
         $weight = null
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setIdentity($identity);
        $this->setPriority($priority);
        $this->setWeight($weight);
    }

    public function setInstance($instance = null)
    {
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
    }

    public function getInstance()
    {
        return (!$this->instance) ?: $this->instance->value();
    }

    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
    }

    public function getRealm()
    {
        return (!$this->realm) ?: $this->realm->value();
    }

    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
    }

    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->value();
    }

    public function setIdentity($identity = null)
    {
        $this->identity = ($identity InstanceOf DomainName)
             ? $identity
             : new DomainName($identity);
    }

    public function getIdentity()
    {
        return (!$this->identity) ?: $this->identity->value();
    }

    public function setPriority($priority = null)
    {
        $this->priority = ($priority InstanceOf BwDiameterPriority)
             ? $priority
             : new BwDiameterPriority($priority);
    }

    public function getPriority()
    {
        return (!$this->priority) ?: $this->priority->value();
    }

    public function setWeight($weight = null)
    {
        $this->weight = ($weight InstanceOf BwDiameterWeight)
             ? $weight
             : new BwDiameterWeight($weight);
    }

    public function getWeight()
    {
        return (!$this->weight) ?: $this->weight->value();
    }
}

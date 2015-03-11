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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'SystemBwDiameterRoutingPeerAddRequest';
    protected $instance      = null;
    protected $realm         = null;
    protected $applicationId = null;
    protected $identity      = null;
    protected $priority      = null;
    protected $weight        = null;

    public function __construct(
         $instance,
         $realm,
         $applicationId,
         $identity,
         $priority,
         $weight
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setIdentity($identity);
        $this->setPriority($priority);
        $this->setWeight($weight);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstance($instance = null)
    {
        if (!$instance) return $this;
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
        $this->instance->setName('instance');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPeerInstance
     */
    public function getInstance()
    {
        return $this->instance->getValue();
    }

    /**
     * 
     */
    public function setRealm($realm = null)
    {
        if (!$realm) return $this;
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
        $this->realm->setName('realm');
        return $this;
    }

    /**
     * 
     * @return DomainName
     */
    public function getRealm()
    {
        return $this->realm->getValue();
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        if (!$applicationId) return $this;
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return BwDiameterApplicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId->getValue();
    }

    /**
     * 
     */
    public function setIdentity($identity = null)
    {
        if (!$identity) return $this;
        $this->identity = ($identity InstanceOf DomainName)
             ? $identity
             : new DomainName($identity);
        $this->identity->setName('identity');
        return $this;
    }

    /**
     * 
     * @return DomainName
     */
    public function getIdentity()
    {
        return $this->identity->getValue();
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        if (!$priority) return $this;
        $this->priority = ($priority InstanceOf BwDiameterPriority)
             ? $priority
             : new BwDiameterPriority($priority);
        $this->priority->setName('priority');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPriority
     */
    public function getPriority()
    {
        return $this->priority->getValue();
    }

    /**
     * 
     */
    public function setWeight($weight = null)
    {
        if (!$weight) return $this;
        $this->weight = ($weight InstanceOf BwDiameterWeight)
             ? $weight
             : new BwDiameterWeight($weight);
        $this->weight->setName('weight');
        return $this;
    }

    /**
     * 
     * @return BwDiameterWeight
     */
    public function getWeight()
    {
        return $this->weight->getValue();
    }
}

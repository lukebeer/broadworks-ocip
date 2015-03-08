<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Remove a Diameter routing peer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $instance      = null;
    protected $realm         = null;
    protected $applicationId = null;
    protected $identity      = null;

    public function __construct(
         $instance,
         $realm,
         $applicationId,
         $identity
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setIdentity($identity);
    }

    /**
     * The diameter peer instance type for an entry in the Peer Table.
     */
    public function setInstance($instance = null)
    {
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
    }

    /**
     * The diameter peer instance type for an entry in the Peer Table.
     */
    public function getInstance()
    {
        return (!$this->instance) ?: $this->instance->getValue();
    }

    /**
     * Network domain name.
     */
    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
    }

    /**
     * Network domain name.
     */
    public function getRealm()
    {
        return (!$this->realm) ?: $this->realm->getValue();
    }

    /**
     * Choices for locally supported Diameter Application Ids.
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
    }

    /**
     * Choices for locally supported Diameter Application Ids.
     */
    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->getValue();
    }

    /**
     * Network domain name.
     */
    public function setIdentity($identity = null)
    {
        $this->identity = ($identity InstanceOf DomainName)
             ? $identity
             : new DomainName($identity);
    }

    /**
     * Network domain name.
     */
    public function getIdentity()
    {
        return (!$this->identity) ?: $this->identity->getValue();
    }
}

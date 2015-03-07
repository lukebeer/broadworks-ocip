<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Remove a Diameter peer.  A peer cannot be removed if is referenced by a Realm Routing Table entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterPeerDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $instance  = null;
    protected $identity  = null;

    public function __construct(
         $instance,
         $identity
    ) {
        $this->setInstance($instance);
        $this->setIdentity($identity);
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
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the attributes of an entry in the Diameter Peer Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterPeerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $instance,
             $identity,
             $ipAddress=null,
             $port=null,
             $enabled=null
    ) {
        $this->instance  = $instance;
        $this->identity  = new DomainName($identity);
        $this->ipAddress = new IPAddress($ipAddress);
        $this->port      = new Port1025($port);
        $this->enabled   = $enabled;
        $this->args      = func_get_args();
    }

    public function setInstance($instance)
    {
        $instance and $this->instance = new BwDiameterPeerInstance($instance);
    }

    public function getInstance()
    {
        return (!$this->instance) ?: $this->instance->value();
    }

    public function setIdentity($identity)
    {
        $identity and $this->identity = new DomainName($identity);
    }

    public function getIdentity()
    {
        return (!$this->identity) ?: $this->identity->value();
    }

    public function setIpAddress($ipAddress)
    {
        $ipAddress and $this->ipAddress = new IPAddress($ipAddress);
    }

    public function getIpAddress()
    {
        return (!$this->ipAddress) ?: $this->ipAddress->value();
    }

    public function setPort($port)
    {
        $port and $this->port = new Port1025($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setEnabled($enabled)
    {
        $enabled and $this->enabled = new xs:boolean($enabled);
    }

    public function getEnabled()
    {
        return (!$this->enabled) ?: $this->enabled->value();
    }
}

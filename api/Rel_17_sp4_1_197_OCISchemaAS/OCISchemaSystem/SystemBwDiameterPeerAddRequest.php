<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a static entry in the Diameter Peer Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterPeerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $instance   = null;
    protected $identity   = null;
    protected $ipAddress  = null;
    protected $port       = null;
    protected $enabled    = null;

    public function __construct(
         $instance,
         $identity,
         $ipAddress = null,
         $port,
         $enabled
    ) {
        $this->setInstance($instance);
        $this->setIdentity($identity);
        $this->setIpAddress($ipAddress);
        $this->setPort($port);
        $this->setEnabled($enabled);
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

    public function setIpAddress($ipAddress = null)
    {
        $this->ipAddress = ($ipAddress InstanceOf IPAddress)
             ? $ipAddress
             : new IPAddress($ipAddress);
    }

    public function getIpAddress()
    {
        return (!$this->ipAddress) ?: $this->ipAddress->value();
    }

    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setEnabled(xs:boolean $enabled = null)
    {
    }

    public function getEnabled()
    {
        return (!$this->enabled) ?: $this->enabled->value();
    }
}

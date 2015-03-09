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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterPeerModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the attributes of an entry in the Diameter Peer Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterPeerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $instance  = null;
    protected $identity  = null;
    protected $ipAddress = null;
    protected $port      = null;
    protected $enabled   = null;

    public function __construct(
         $instance,
         $identity,
         $ipAddress = null,
         $port = null,
         $enabled = null
    ) {
        $this->setInstance($instance);
        $this->setIdentity($identity);
        $this->setIpAddress($ipAddress);
        $this->setPort($port);
        $this->setEnabled($enabled);
    }

    /**
     * @return SystemBwDiameterPeerModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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

    /**
     * Numeric IP Address.
     */
    public function setIpAddress($ipAddress = null)
    {
        $this->ipAddress = ($ipAddress InstanceOf IPAddress)
             ? $ipAddress
             : new IPAddress($ipAddress);
    }

    /**
     * Numeric IP Address.
     */
    public function getIpAddress()
    {
        return (!$this->ipAddress) ?: $this->ipAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getPort()
    {
        return (!$this->port) ?: $this->port->getValue();
    }

    /**
     * 
     */
    public function setEnabled($enabled = null)
    {
        $this->enabled = (boolean) $enabled;
    }

    /**
     * 
     */
    public function getEnabled()
    {
        return (!$this->enabled) ?: $this->enabled;
    }
}

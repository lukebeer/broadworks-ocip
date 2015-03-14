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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name      = 'SystemBwDiameterPeerModifyRequest';
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
     * @return mixed $response
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
     * @return BwDiameterPeerInstance $instance
     */
    public function getInstance()
    {
        return $this->instance->getValue();
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
     * @return DomainName $identity
     */
    public function getIdentity()
    {
        return $this->identity->getValue();
    }

    /**
     * 
     */
    public function setIpAddress($ipAddress = null)
    {
        if (!$ipAddress) return $this;
        $this->ipAddress = ($ipAddress InstanceOf IPAddress)
             ? $ipAddress
             : new IPAddress($ipAddress);
        $this->ipAddress->setName('ipAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $ipAddress
     */
    public function getIpAddress()
    {
        return $this->ipAddress->getValue();
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        if (!$port) return $this;
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return $this->port->getValue();
    }

    /**
     * 
     */
    public function setEnabled($enabled = null)
    {
        if (!$enabled) return $this;
        $this->enabled = new PrimitiveType($enabled);
        $this->enabled->setName('enabled');
        return $this;
    }

    /**
     * 
     * @return boolean $enabled
     */
    public function getEnabled()
    {
        return $this->enabled->getValue();
    }
}

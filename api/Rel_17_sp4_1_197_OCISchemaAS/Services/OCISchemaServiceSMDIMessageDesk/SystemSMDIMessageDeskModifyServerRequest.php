<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a SMDI Server in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskModifyServerRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $deviceName  = null;
    protected $netAddress  = null;
    protected $port        = null;
    protected $description = null;

    public function __construct(
         $deviceName,
         $netAddress = null,
         $port = null,
         $description = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setDescription($description);
    }

    /**
     * SMDI device name.
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf SMDIDeviceName)
             ? $deviceName
             : new SMDIDeviceName($deviceName);
    }

    /**
     * SMDI device name.
     */
    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
    }

    /**
     * TCP/IP Port.
     */
    public function getPort()
    {
        return (!$this->port) ?: $this->port->getValue();
    }

    /**
     * SMDI server description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf SMDIServerDescription)
             ? $description
             : new SMDIServerDescription($description);
    }

    /**
     * SMDI server description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}

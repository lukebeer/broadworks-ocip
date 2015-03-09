<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPServerCallCenterMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPConnectionPingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CCC2MaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCAPParametersGetResponse14sp3;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCAPParametersGetListRequest14sp3.
 *         Contains a list of system CAP parameters.
 */
class SystemCAPParametersGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $serverPort                              = null;
    protected $maxClientConnections                    = null;
    protected $enableConnectionPing                    = null;
    protected $connectionPingIntervalMinutes           = null;
    protected $CCC2ServerPort                          = null;
    protected $CCC2MaxClientConnections                = null;
    protected $capServerCallCenterPort                 = null;
    protected $capServerCallCenterMaxClientConnections = null;

    /**
     * @return SystemCAPParametersGetResponse14sp3
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->getValue();
    }

    /**
     * Number of client connections.
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf CAPMaxClientConnections)
             ? $maxClientConnections
             : new CAPMaxClientConnections($maxClientConnections);
    }

    /**
     * Number of client connections.
     */
    public function getMaxClientConnections()
    {
        return (!$this->maxClientConnections) ?: $this->maxClientConnections->getValue();
    }

    /**
     * 
     */
    public function setEnableConnectionPing($enableConnectionPing = null)
    {
        $this->enableConnectionPing = (boolean) $enableConnectionPing;
    }

    /**
     * 
     */
    public function getEnableConnectionPing()
    {
        return (!$this->enableConnectionPing) ?: $this->enableConnectionPing;
    }

    /**
     * Connection ping interval in minutes
     */
    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes = null)
    {
        $this->connectionPingIntervalMinutes = ($connectionPingIntervalMinutes InstanceOf CAPConnectionPingIntervalMinutes)
             ? $connectionPingIntervalMinutes
             : new CAPConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
    }

    /**
     * Connection ping interval in minutes
     */
    public function getConnectionPingIntervalMinutes()
    {
        return (!$this->connectionPingIntervalMinutes) ?: $this->connectionPingIntervalMinutes->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setCCC2ServerPort($CCC2ServerPort = null)
    {
        $this->CCC2ServerPort = ($CCC2ServerPort InstanceOf Port1025)
             ? $CCC2ServerPort
             : new Port1025($CCC2ServerPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getCCC2ServerPort()
    {
        return (!$this->CCC2ServerPort) ?: $this->CCC2ServerPort->getValue();
    }

    /**
     * CCC2 to number of client connections.
     */
    public function setCCC2MaxClientConnections($CCC2MaxClientConnections = null)
    {
        $this->CCC2MaxClientConnections = ($CCC2MaxClientConnections InstanceOf CCC2MaxClientConnections)
             ? $CCC2MaxClientConnections
             : new CCC2MaxClientConnections($CCC2MaxClientConnections);
    }

    /**
     * CCC2 to number of client connections.
     */
    public function getCCC2MaxClientConnections()
    {
        return (!$this->CCC2MaxClientConnections) ?: $this->CCC2MaxClientConnections->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setCapServerCallCenterPort($capServerCallCenterPort = null)
    {
        $this->capServerCallCenterPort = ($capServerCallCenterPort InstanceOf Port1025)
             ? $capServerCallCenterPort
             : new Port1025($capServerCallCenterPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getCapServerCallCenterPort()
    {
        return (!$this->capServerCallCenterPort) ?: $this->capServerCallCenterPort->getValue();
    }

    /**
     * CAPServerCallCenter to number of client connections.
     */
    public function setCapServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections = null)
    {
        $this->capServerCallCenterMaxClientConnections = ($capServerCallCenterMaxClientConnections InstanceOf CAPServerCallCenterMaxClientConnections)
             ? $capServerCallCenterMaxClientConnections
             : new CAPServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections);
    }

    /**
     * CAPServerCallCenter to number of client connections.
     */
    public function getCapServerCallCenterMaxClientConnections()
    {
        return (!$this->capServerCallCenterMaxClientConnections) ?: $this->capServerCallCenterMaxClientConnections->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPConnectionPingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CCC2MaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCAPParametersGetRequest.
 *         Contains a list of system CAP parameters.
 *         Replaced By: SystemCAPParametersGetResponse14sp3
 */
class SystemCAPParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $serverPort                     = null;
    protected $maxClientConnections           = null;
    protected $enableConnectionPing           = null;
    protected $connectionPingIntervalMinutes  = null;
    protected $CCC2ServerPort                 = null;
    protected $CCC2MaxClientConnections       = null;


    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf CAPMaxClientConnections)
             ? $maxClientConnections
             : new CAPMaxClientConnections($maxClientConnections);
    }

    public function getMaxClientConnections()
    {
        return (!$this->maxClientConnections) ?: $this->maxClientConnections->value();
    }

    public function setEnableConnectionPing(xs:boolean $enableConnectionPing = null)
    {
    }

    public function getEnableConnectionPing()
    {
        return (!$this->enableConnectionPing) ?: $this->enableConnectionPing->value();
    }

    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes = null)
    {
        $this->connectionPingIntervalMinutes = ($connectionPingIntervalMinutes InstanceOf CAPConnectionPingIntervalMinutes)
             ? $connectionPingIntervalMinutes
             : new CAPConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
    }

    public function getConnectionPingIntervalMinutes()
    {
        return (!$this->connectionPingIntervalMinutes) ?: $this->connectionPingIntervalMinutes->value();
    }

    public function setCCC2ServerPort($CCC2ServerPort = null)
    {
        $this->CCC2ServerPort = ($CCC2ServerPort InstanceOf Port1025)
             ? $CCC2ServerPort
             : new Port1025($CCC2ServerPort);
    }

    public function getCCC2ServerPort()
    {
        return (!$this->CCC2ServerPort) ?: $this->CCC2ServerPort->value();
    }

    public function setCCC2MaxClientConnections($CCC2MaxClientConnections = null)
    {
        $this->CCC2MaxClientConnections = ($CCC2MaxClientConnections InstanceOf CCC2MaxClientConnections)
             ? $CCC2MaxClientConnections
             : new CCC2MaxClientConnections($CCC2MaxClientConnections);
    }

    public function getCCC2MaxClientConnections()
    {
        return (!$this->CCC2MaxClientConnections) ?: $this->CCC2MaxClientConnections->value();
    }
}

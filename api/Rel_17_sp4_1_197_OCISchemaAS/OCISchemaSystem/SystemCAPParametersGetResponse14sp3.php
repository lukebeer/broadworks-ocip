<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CAPMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CAPConnectionPingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CCC2MaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CAPServerCallCenterMaxClientConnections;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCAPParametersGetListRequest14sp3.
 *         Contains a list of system CAP parameters.
 */
class SystemCAPParametersGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serverPort,
             $maxClientConnections,
             $enableConnectionPing,
             $connectionPingIntervalMinutes,
             $CCC2ServerPort,
             $CCC2MaxClientConnections,
             $capServerCallCenterPort,
             $capServerCallCenterMaxClientConnections
    ) {
        $this->serverPort                              = new Port1025($serverPort);
        $this->maxClientConnections                    = $maxClientConnections;
        $this->enableConnectionPing                    = $enableConnectionPing;
        $this->connectionPingIntervalMinutes           = $connectionPingIntervalMinutes;
        $this->CCC2ServerPort                          = new Port1025($CCC2ServerPort);
        $this->CCC2MaxClientConnections                = $CCC2MaxClientConnections;
        $this->capServerCallCenterPort                 = new Port1025($capServerCallCenterPort);
        $this->capServerCallCenterMaxClientConnections = $capServerCallCenterMaxClientConnections;
        $this->args                                    = func_get_args();
    }

    public function setServerPort($serverPort)
    {
        $serverPort and $this->serverPort = new Port1025($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setMaxClientConnections($maxClientConnections)
    {
        $maxClientConnections and $this->maxClientConnections = new CAPMaxClientConnections($maxClientConnections);
    }

    public function getMaxClientConnections()
    {
        return (!$this->maxClientConnections) ?: $this->maxClientConnections->value();
    }

    public function setEnableConnectionPing($enableConnectionPing)
    {
        $enableConnectionPing and $this->enableConnectionPing = new xs:boolean($enableConnectionPing);
    }

    public function getEnableConnectionPing()
    {
        return (!$this->enableConnectionPing) ?: $this->enableConnectionPing->value();
    }

    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes)
    {
        $connectionPingIntervalMinutes and $this->connectionPingIntervalMinutes = new CAPConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
    }

    public function getConnectionPingIntervalMinutes()
    {
        return (!$this->connectionPingIntervalMinutes) ?: $this->connectionPingIntervalMinutes->value();
    }

    public function setCCC2ServerPort($CCC2ServerPort)
    {
        $CCC2ServerPort and $this->CCC2ServerPort = new Port1025($CCC2ServerPort);
    }

    public function getCCC2ServerPort()
    {
        return (!$this->CCC2ServerPort) ?: $this->CCC2ServerPort->value();
    }

    public function setCCC2MaxClientConnections($CCC2MaxClientConnections)
    {
        $CCC2MaxClientConnections and $this->CCC2MaxClientConnections = new CCC2MaxClientConnections($CCC2MaxClientConnections);
    }

    public function getCCC2MaxClientConnections()
    {
        return (!$this->CCC2MaxClientConnections) ?: $this->CCC2MaxClientConnections->value();
    }

    public function setCapServerCallCenterPort($capServerCallCenterPort)
    {
        $capServerCallCenterPort and $this->capServerCallCenterPort = new Port1025($capServerCallCenterPort);
    }

    public function getCapServerCallCenterPort()
    {
        return (!$this->capServerCallCenterPort) ?: $this->capServerCallCenterPort->value();
    }

    public function setCapServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections)
    {
        $capServerCallCenterMaxClientConnections and $this->capServerCallCenterMaxClientConnections = new CAPServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections);
    }

    public function getCapServerCallCenterMaxClientConnections()
    {
        return (!$this->capServerCallCenterMaxClientConnections) ?: $this->capServerCallCenterMaxClientConnections->value();
    }
}

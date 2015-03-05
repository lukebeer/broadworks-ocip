<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCIReportingConnectionPingIntervalSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemOCIReportingParametersGetRequest14sp1.
 *         Contains a list of system OCI Reporting parameters.
 */
class SystemOCIReportingParametersGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serverPort,
             $enableConnectionPing,
             $connectionPingIntervalSeconds,
             $alterPasswords,
             $enablePublicIdentityReporting
    ) {
        $this->serverPort                    = new Port1025($serverPort);
        $this->enableConnectionPing          = $enableConnectionPing;
        $this->connectionPingIntervalSeconds = new OCIReportingConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
        $this->alterPasswords                = $alterPasswords;
        $this->enablePublicIdentityReporting = $enablePublicIdentityReporting;
        $this->args                          = func_get_args();
    }

    public function setServerPort($serverPort)
    {
        $serverPort and $this->serverPort = new Port1025($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setEnableConnectionPing($enableConnectionPing)
    {
        $enableConnectionPing and $this->enableConnectionPing = new xs:boolean($enableConnectionPing);
    }

    public function getEnableConnectionPing()
    {
        return (!$this->enableConnectionPing) ?: $this->enableConnectionPing->value();
    }

    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds)
    {
        $connectionPingIntervalSeconds and $this->connectionPingIntervalSeconds = new OCIReportingConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
    }

    public function getConnectionPingIntervalSeconds()
    {
        return (!$this->connectionPingIntervalSeconds) ?: $this->connectionPingIntervalSeconds->value();
    }

    public function setAlterPasswords($alterPasswords)
    {
        $alterPasswords and $this->alterPasswords = new xs:boolean($alterPasswords);
    }

    public function getAlterPasswords()
    {
        return (!$this->alterPasswords) ?: $this->alterPasswords->value();
    }

    public function setEnablePublicIdentityReporting($enablePublicIdentityReporting)
    {
        $enablePublicIdentityReporting and $this->enablePublicIdentityReporting = new xs:boolean($enablePublicIdentityReporting);
    }

    public function getEnablePublicIdentityReporting()
    {
        return (!$this->enablePublicIdentityReporting) ?: $this->enablePublicIdentityReporting->value();
    }
}

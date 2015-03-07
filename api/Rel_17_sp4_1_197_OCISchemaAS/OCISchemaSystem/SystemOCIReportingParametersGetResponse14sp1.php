<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCIReportingConnectionPingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemOCIReportingParametersGetRequest14sp1.
 *         Contains a list of system OCI Reporting parameters.
 */
class SystemOCIReportingParametersGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $serverPort                     = null;
    protected $enableConnectionPing           = null;
    protected $connectionPingIntervalSeconds  = null;
    protected $alterPasswords                 = null;
    protected $enablePublicIdentityReporting  = null;


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

    public function setEnableConnectionPing(xs:boolean $enableConnectionPing = null)
    {
    }

    public function getEnableConnectionPing()
    {
        return (!$this->enableConnectionPing) ?: $this->enableConnectionPing->value();
    }

    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds = null)
    {
        $this->connectionPingIntervalSeconds = ($connectionPingIntervalSeconds InstanceOf OCIReportingConnectionPingIntervalSeconds)
             ? $connectionPingIntervalSeconds
             : new OCIReportingConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
    }

    public function getConnectionPingIntervalSeconds()
    {
        return (!$this->connectionPingIntervalSeconds) ?: $this->connectionPingIntervalSeconds->value();
    }

    public function setAlterPasswords(xs:boolean $alterPasswords = null)
    {
    }

    public function getAlterPasswords()
    {
        return (!$this->alterPasswords) ?: $this->alterPasswords->value();
    }

    public function setEnablePublicIdentityReporting(xs:boolean $enablePublicIdentityReporting = null)
    {
    }

    public function getEnablePublicIdentityReporting()
    {
        return (!$this->enablePublicIdentityReporting) ?: $this->enablePublicIdentityReporting->value();
    }
}

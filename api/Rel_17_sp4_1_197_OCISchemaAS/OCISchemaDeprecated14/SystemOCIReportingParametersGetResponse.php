<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCIReportingConnectionPingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemOCIReportingParametersGetListRequest.
 *         Contains a list of system OCI Reporting parameters.
 */
class SystemOCIReportingParametersGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemOCIReportingParametersGetResponse';
    public    $name                          = __CLASS__;
    protected $serverPort                    = null;
    protected $enableConnectionPing          = null;
    protected $connectionPingIntervalSeconds = null;
    protected $alterPasswords                = null;


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
        return (!$this->enableConnectionPing) ?: $this->enableConnectionPing->getValue();
    }

    /**
     * Connection ping interval in seconds
     */
    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds = null)
    {
        $this->connectionPingIntervalSeconds = ($connectionPingIntervalSeconds InstanceOf OCIReportingConnectionPingIntervalSeconds)
             ? $connectionPingIntervalSeconds
             : new OCIReportingConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
    }

    /**
     * Connection ping interval in seconds
     */
    public function getConnectionPingIntervalSeconds()
    {
        return (!$this->connectionPingIntervalSeconds) ?: $this->connectionPingIntervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setAlterPasswords($alterPasswords = null)
    {
        $this->alterPasswords = (boolean) $alterPasswords;
    }

    /**
     * 
     */
    public function getAlterPasswords()
    {
        return (!$this->alterPasswords) ?: $this->alterPasswords->getValue();
    }
}

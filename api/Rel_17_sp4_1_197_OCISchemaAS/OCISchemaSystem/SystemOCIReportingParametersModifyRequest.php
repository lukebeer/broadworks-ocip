<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCIReportingConnectionPingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify OCI Reporting system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCIReportingParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = 'SystemOCIReportingParametersModifyRequest';
    protected $serverPort                    = null;
    protected $enableConnectionPing          = null;
    protected $connectionPingIntervalSeconds = null;
    protected $alterPasswords                = null;
    protected $enablePublicIdentityReporting = null;

    public function __construct(
         $serverPort = null,
         $enableConnectionPing = null,
         $connectionPingIntervalSeconds = null,
         $alterPasswords = null,
         $enablePublicIdentityReporting = null
    ) {
        $this->setServerPort($serverPort);
        $this->setEnableConnectionPing($enableConnectionPing);
        $this->setConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
        $this->setAlterPasswords($alterPasswords);
        $this->setEnablePublicIdentityReporting($enablePublicIdentityReporting);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        if (!$serverPort) return $this;
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getServerPort()
    {
        return $this->serverPort->getValue();
    }

    /**
     * 
     */
    public function setEnableConnectionPing($enableConnectionPing = null)
    {
        if (!$enableConnectionPing) return $this;
        $this->enableConnectionPing = new PrimitiveType($enableConnectionPing);
        $this->enableConnectionPing->setName('enableConnectionPing');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableConnectionPing()
    {
        return $this->enableConnectionPing->getValue();
    }

    /**
     * 
     */
    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds = null)
    {
        if (!$connectionPingIntervalSeconds) return $this;
        $this->connectionPingIntervalSeconds = ($connectionPingIntervalSeconds InstanceOf OCIReportingConnectionPingIntervalSeconds)
             ? $connectionPingIntervalSeconds
             : new OCIReportingConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
        $this->connectionPingIntervalSeconds->setName('connectionPingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return OCIReportingConnectionPingIntervalSeconds
     */
    public function getConnectionPingIntervalSeconds()
    {
        return $this->connectionPingIntervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setAlterPasswords($alterPasswords = null)
    {
        if (!$alterPasswords) return $this;
        $this->alterPasswords = new PrimitiveType($alterPasswords);
        $this->alterPasswords->setName('alterPasswords');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlterPasswords()
    {
        return $this->alterPasswords->getValue();
    }

    /**
     * 
     */
    public function setEnablePublicIdentityReporting($enablePublicIdentityReporting = null)
    {
        if (!$enablePublicIdentityReporting) return $this;
        $this->enablePublicIdentityReporting = new PrimitiveType($enablePublicIdentityReporting);
        $this->enablePublicIdentityReporting->setName('enablePublicIdentityReporting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnablePublicIdentityReporting()
    {
        return $this->enablePublicIdentityReporting->getValue();
    }
}

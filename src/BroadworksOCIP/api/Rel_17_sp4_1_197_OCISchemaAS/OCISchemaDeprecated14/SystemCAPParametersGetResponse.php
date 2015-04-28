<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPConnectionPingIntervalMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CCC2MaxClientConnections;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPMaxClientConnections;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCAPParametersGetRequest.
 *         Contains a list of system CAP parameters.
 *         Replaced By: SystemCAPParametersGetResponse14sp3
 */
class SystemCAPParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCAPParametersGetResponse';
    protected $serverPort;
    protected $maxClientConnections;
    protected $enableConnectionPing;
    protected $connectionPingIntervalMinutes;
    protected $CCC2ServerPort;
    protected $CCC2MaxClientConnections;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemCAPParametersGetResponse $response
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
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setElementName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort)
            ? $this->serverPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf CAPMaxClientConnections)
             ? $maxClientConnections
             : new CAPMaxClientConnections($maxClientConnections);
        $this->maxClientConnections->setElementName('maxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CAPMaxClientConnections $maxClientConnections
     */
    public function getMaxClientConnections()
    {
        return ($this->maxClientConnections)
            ? $this->maxClientConnections->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableConnectionPing($enableConnectionPing = null)
    {
        $this->enableConnectionPing = new PrimitiveType($enableConnectionPing);
        $this->enableConnectionPing->setElementName('enableConnectionPing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableConnectionPing
     */
    public function getEnableConnectionPing()
    {
        return ($this->enableConnectionPing)
            ? $this->enableConnectionPing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes = null)
    {
        $this->connectionPingIntervalMinutes = ($connectionPingIntervalMinutes InstanceOf CAPConnectionPingIntervalMinutes)
             ? $connectionPingIntervalMinutes
             : new CAPConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
        $this->connectionPingIntervalMinutes->setElementName('connectionPingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return CAPConnectionPingIntervalMinutes $connectionPingIntervalMinutes
     */
    public function getConnectionPingIntervalMinutes()
    {
        return ($this->connectionPingIntervalMinutes)
            ? $this->connectionPingIntervalMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCCC2ServerPort($CCC2ServerPort = null)
    {
        $this->CCC2ServerPort = ($CCC2ServerPort InstanceOf Port1025)
             ? $CCC2ServerPort
             : new Port1025($CCC2ServerPort);
        $this->CCC2ServerPort->setElementName('CCC2ServerPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $CCC2ServerPort
     */
    public function getCCC2ServerPort()
    {
        return ($this->CCC2ServerPort)
            ? $this->CCC2ServerPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCCC2MaxClientConnections($CCC2MaxClientConnections = null)
    {
        $this->CCC2MaxClientConnections = ($CCC2MaxClientConnections InstanceOf CCC2MaxClientConnections)
             ? $CCC2MaxClientConnections
             : new CCC2MaxClientConnections($CCC2MaxClientConnections);
        $this->CCC2MaxClientConnections->setElementName('CCC2MaxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CCC2MaxClientConnections $CCC2MaxClientConnections
     */
    public function getCCC2MaxClientConnections()
    {
        return ($this->CCC2MaxClientConnections)
            ? $this->CCC2MaxClientConnections->getElementValue()
            : null;
    }
}

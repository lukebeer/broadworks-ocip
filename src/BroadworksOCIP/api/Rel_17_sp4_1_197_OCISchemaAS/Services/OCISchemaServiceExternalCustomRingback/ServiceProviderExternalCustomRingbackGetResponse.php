<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackPrefixDigits;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderExternalCustomRingbackGetRequest.
 */
class ServiceProviderExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderExternalCustomRingbackGetResponse';
    protected $prefixDigits;
    protected $serverNetAddress;
    protected $serverPort;
    protected $timeoutSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ServiceProviderExternalCustomRingbackGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf ExternalCustomRingbackPrefixDigits)
             ? $prefixDigits
             : new ExternalCustomRingbackPrefixDigits($prefixDigits);
        $this->prefixDigits->setElementName('prefixDigits');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackPrefixDigits $prefixDigits
     */
    public function getPrefixDigits()
    {
        return ($this->prefixDigits)
            ? $this->prefixDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setElementName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return ($this->serverNetAddress)
            ? $this->serverNetAddress->getElementValue()
            : null;
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
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ExternalCustomRingbackTimeoutSeconds)
             ? $timeoutSeconds
             : new ExternalCustomRingbackTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setElementName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return ($this->timeoutSeconds)
            ? $this->timeoutSeconds->getElementValue()
            : null;
    }
}

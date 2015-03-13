<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderExternalCustomRingbackGetRequest.
 */
class ServiceProviderExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'ServiceProviderExternalCustomRingbackGetResponse';
    protected $prefixDigits     = null;
    protected $serverNetAddress = null;
    protected $serverPort       = null;
    protected $timeoutSeconds   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ServiceProviderExternalCustomRingbackGetResponse $response
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
        if (!$prefixDigits) return $this;
        $this->prefixDigits = ($prefixDigits InstanceOf ExternalCustomRingbackPrefixDigits)
             ? $prefixDigits
             : new ExternalCustomRingbackPrefixDigits($prefixDigits);
        $this->prefixDigits->setName('prefixDigits');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackPrefixDigits $prefixDigits
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits->getValue();
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        if (!$serverNetAddress) return $this;
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress->getValue();
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
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return $this->serverPort->getValue();
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        if (!$timeoutSeconds) return $this;
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ExternalCustomRingbackTimeoutSeconds)
             ? $timeoutSeconds
             : new ExternalCustomRingbackTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds->getValue();
    }
}

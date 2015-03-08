<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderExternalCustomRingbackGetRequest.
 */
class ServiceProviderExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback\ServiceProviderExternalCustomRingbackGetResponse';
    public    $name             = __CLASS__;
    protected $prefixDigits     = null;
    protected $serverNetAddress = null;
    protected $serverPort       = null;
    protected $timeoutSeconds   = null;


    /**
     * Prefix digits prepended to the address to reach the external ringback server.
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf ExternalCustomRingbackPrefixDigits)
             ? $prefixDigits
             : new ExternalCustomRingbackPrefixDigits($prefixDigits);
    }

    /**
     * Prefix digits prepended to the address to reach the external ringback server.
     */
    public function getPrefixDigits()
    {
        return (!$this->prefixDigits) ?: $this->prefixDigits->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->getValue();
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
     * Time to wait for any External Media Server to reply with custom ringback.
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ExternalCustomRingbackTimeoutSeconds)
             ? $timeoutSeconds
             : new ExternalCustomRingbackTimeoutSeconds($timeoutSeconds);
    }

    /**
     * Time to wait for any External Media Server to reply with custom ringback.
     */
    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->getValue();
    }
}

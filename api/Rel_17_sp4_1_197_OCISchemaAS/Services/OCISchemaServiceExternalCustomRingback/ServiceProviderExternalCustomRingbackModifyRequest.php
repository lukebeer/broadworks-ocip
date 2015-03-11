<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider level data associated with External Custom Ringback.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderExternalCustomRingbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'ServiceProviderExternalCustomRingbackModifyRequest';
    protected $serviceProviderId = null;
    protected $prefixDigits      = null;
    protected $serverNetAddress  = null;
    protected $serverPort        = null;
    protected $timeoutSeconds    = null;

    public function __construct(
         $serviceProviderId,
         $prefixDigits = null,
         $serverNetAddress = null,
         $serverPort = null,
         $timeoutSeconds = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setPrefixDigits($prefixDigits);
        $this->setServerNetAddress($serverNetAddress);
        $this->setServerPort($serverPort);
        $this->setTimeoutSeconds($timeoutSeconds);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
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
     * @return ExternalCustomRingbackPrefixDigits
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
     * @return NetAddress
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
     * @return Port1025
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
     * @return ExternalCustomRingbackTimeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds->getValue();
    }
}

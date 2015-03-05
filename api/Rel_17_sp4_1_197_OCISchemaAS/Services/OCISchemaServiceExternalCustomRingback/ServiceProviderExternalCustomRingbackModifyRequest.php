<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExternalCustomRingbackPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExternalCustomRingbackTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the service provider level data associated with External Custom Ringback.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderExternalCustomRingbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $prefixDigits=null,
             $serverNetAddress=null,
             $serverPort=null,
             $timeoutSeconds=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->prefixDigits      = $prefixDigits;
        $this->serverNetAddress  = new NetAddress($serverNetAddress);
        $this->serverPort        = new Port1025($serverPort);
        $this->timeoutSeconds    = $timeoutSeconds;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setPrefixDigits($prefixDigits)
    {
        $prefixDigits and $this->prefixDigits = new ExternalCustomRingbackPrefixDigits($prefixDigits);
    }

    public function getPrefixDigits()
    {
        return (!$this->prefixDigits) ?: $this->prefixDigits->value();
    }

    public function setServerNetAddress($serverNetAddress)
    {
        $serverNetAddress and $this->serverNetAddress = new NetAddress($serverNetAddress);
    }

    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->value();
    }

    public function setServerPort($serverPort)
    {
        $serverPort and $this->serverPort = new Port1025($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setTimeoutSeconds($timeoutSeconds)
    {
        $timeoutSeconds and $this->timeoutSeconds = new ExternalCustomRingbackTimeoutSeconds($timeoutSeconds);
    }

    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->value();
    }
}

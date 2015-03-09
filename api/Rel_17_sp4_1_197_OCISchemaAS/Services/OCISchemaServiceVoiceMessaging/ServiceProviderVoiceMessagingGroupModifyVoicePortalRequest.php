<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoicePortalScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupModifyVoicePortalResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to change the service provider's or enterprise's voice portal settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $voicePortalScope  = null;

    public function __construct(
         $serviceProviderId,
         $voicePortalScope = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setVoicePortalScope($voicePortalScope);
    }

    /**
     * @return ServiceProviderVoiceMessagingGroupModifyVoicePortalResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Voice Portal Scope.
     *         The Service Provider option allows users to log in to their voice portal using the voice portal
     *         of any group that is both hosted on the same application server and within the same service provider
     *         or enterprise.
     *         The Group option keeps groups completely independent. Users can only log in to their voice portal
     *         using the access number for their group.
     */
    public function setVoicePortalScope($voicePortalScope = null)
    {
        $this->voicePortalScope = ($voicePortalScope InstanceOf ServiceProviderVoicePortalScope)
             ? $voicePortalScope
             : new ServiceProviderVoicePortalScope($voicePortalScope);
    }

    /**
     * Voice Portal Scope.
     *         The Service Provider option allows users to log in to their voice portal using the voice portal
     *         of any group that is both hosted on the same application server and within the same service provider
     *         or enterprise.
     *         The Group option keeps groups completely independent. Users can only log in to their voice portal
     *         using the access number for their group.
     */
    public function getVoicePortalScope()
    {
        return (!$this->voicePortalScope) ?: $this->voicePortalScope->getValue();
    }
}

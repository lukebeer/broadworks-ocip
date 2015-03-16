<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoicePortalScope;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderVoiceMessagingGroupGetVoicePortalRequest.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderVoiceMessagingGroupGetVoicePortalResponse';
    protected $voicePortalScope;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupGetVoicePortalResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setVoicePortalScope($voicePortalScope = null)
    {
        $this->voicePortalScope = ($voicePortalScope InstanceOf ServiceProviderVoicePortalScope)
             ? $voicePortalScope
             : new ServiceProviderVoicePortalScope($voicePortalScope);
        $this->voicePortalScope->setName('voicePortalScope');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderVoicePortalScope $voicePortalScope
     */
    public function getVoicePortalScope()
    {
        return ($this->voicePortalScope) ? $this->voicePortalScope->getValue() : null;
    }
}

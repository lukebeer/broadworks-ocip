<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoicePortalScope;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderVoiceMessagingGroupGetVoicePortalRequest.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderVoiceMessagingGroupGetVoicePortalResponse';
    protected $voicePortalScope;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupGetVoicePortalResponse $response
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
        $this->voicePortalScope->setElementName('voicePortalScope');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderVoicePortalScope $voicePortalScope
     */
    public function getVoicePortalScope()
    {
        return ($this->voicePortalScope)
            ? $this->voicePortalScope->getElementValue()
            : null;
    }
}

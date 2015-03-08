<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoicePortalScope;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderVoiceMessagingGroupGetVoicePortalRequest.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $voicePortalScope = null;


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

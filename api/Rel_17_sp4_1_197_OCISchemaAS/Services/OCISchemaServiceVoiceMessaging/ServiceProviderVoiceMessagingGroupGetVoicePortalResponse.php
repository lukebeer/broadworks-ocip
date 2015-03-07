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
    public    $name              = __CLASS__;
    protected $voicePortalScope  = null;


    public function setVoicePortalScope($voicePortalScope = null)
    {
        $this->voicePortalScope = ($voicePortalScope InstanceOf ServiceProviderVoicePortalScope)
             ? $voicePortalScope
             : new ServiceProviderVoicePortalScope($voicePortalScope);
    }

    public function getVoicePortalScope()
    {
        return (!$this->voicePortalScope) ?: $this->voicePortalScope->value();
    }
}

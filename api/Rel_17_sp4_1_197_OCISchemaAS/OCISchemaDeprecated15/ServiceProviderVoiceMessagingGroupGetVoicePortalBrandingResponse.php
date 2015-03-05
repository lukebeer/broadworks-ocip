<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest.
 *         Replaced By: ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $voicePortalGreetingSelection,
             $voicePortalGreetingFileDescription=null,
             $voiceMessagingGreetingSelection,
             $voiceMessagingGreetingFileDescription=null
    ) {
        $this->voicePortalGreetingSelection          = $voicePortalGreetingSelection;
        $this->voicePortalGreetingFileDescription    = new FileDescription($voicePortalGreetingFileDescription);
        $this->voiceMessagingGreetingSelection       = $voiceMessagingGreetingSelection;
        $this->voiceMessagingGreetingFileDescription = new FileDescription($voiceMessagingGreetingFileDescription);
        $this->args                                  = func_get_args();
    }

    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection)
    {
        $voicePortalGreetingSelection and $this->voicePortalGreetingSelection = new VoiceMessagingBrandingSelection($voicePortalGreetingSelection);
    }

    public function getVoicePortalGreetingSelection()
    {
        return (!$this->voicePortalGreetingSelection) ?: $this->voicePortalGreetingSelection->value();
    }

    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription)
    {
        $voicePortalGreetingFileDescription and $this->voicePortalGreetingFileDescription = new FileDescription($voicePortalGreetingFileDescription);
    }

    public function getVoicePortalGreetingFileDescription()
    {
        return (!$this->voicePortalGreetingFileDescription) ?: $this->voicePortalGreetingFileDescription->value();
    }

    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection)
    {
        $voiceMessagingGreetingSelection and $this->voiceMessagingGreetingSelection = new VoiceMessagingBrandingSelection($voiceMessagingGreetingSelection);
    }

    public function getVoiceMessagingGreetingSelection()
    {
        return (!$this->voiceMessagingGreetingSelection) ?: $this->voiceMessagingGreetingSelection->value();
    }

    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription)
    {
        $voiceMessagingGreetingFileDescription and $this->voiceMessagingGreetingFileDescription = new FileDescription($voiceMessagingGreetingFileDescription);
    }

    public function getVoiceMessagingGreetingFileDescription()
    {
        return (!$this->voiceMessagingGreetingFileDescription) ?: $this->voiceMessagingGreetingFileDescription->value();
    }
}

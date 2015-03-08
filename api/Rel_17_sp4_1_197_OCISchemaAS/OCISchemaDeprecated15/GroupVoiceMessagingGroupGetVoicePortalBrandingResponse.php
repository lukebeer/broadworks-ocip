<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest.
 *         Replaced By: GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupVoiceMessagingGroupGetVoicePortalBrandingResponse';
    public    $name                                  = __CLASS__;
    protected $voicePortalGreetingSelection          = null;
    protected $voicePortalGreetingFileDescription    = null;
    protected $voiceMessagingGreetingSelection       = null;
    protected $voiceMessagingGreetingFileDescription = null;


    /**
     * Branding Selection.
     */
    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection = null)
    {
        $this->voicePortalGreetingSelection = ($voicePortalGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voicePortalGreetingSelection
             : new VoiceMessagingBrandingSelection($voicePortalGreetingSelection);
    }

    /**
     * Branding Selection.
     */
    public function getVoicePortalGreetingSelection()
    {
        return (!$this->voicePortalGreetingSelection) ?: $this->voicePortalGreetingSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription = null)
    {
        $this->voicePortalGreetingFileDescription = ($voicePortalGreetingFileDescription InstanceOf FileDescription)
             ? $voicePortalGreetingFileDescription
             : new FileDescription($voicePortalGreetingFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return (!$this->voicePortalGreetingFileDescription) ?: $this->voicePortalGreetingFileDescription->getValue();
    }

    /**
     * Branding Selection.
     */
    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection = null)
    {
        $this->voiceMessagingGreetingSelection = ($voiceMessagingGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voiceMessagingGreetingSelection
             : new VoiceMessagingBrandingSelection($voiceMessagingGreetingSelection);
    }

    /**
     * Branding Selection.
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return (!$this->voiceMessagingGreetingSelection) ?: $this->voiceMessagingGreetingSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription = null)
    {
        $this->voiceMessagingGreetingFileDescription = ($voiceMessagingGreetingFileDescription InstanceOf FileDescription)
             ? $voiceMessagingGreetingFileDescription
             : new FileDescription($voiceMessagingGreetingFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return (!$this->voiceMessagingGreetingFileDescription) ?: $this->voiceMessagingGreetingFileDescription->getValue();
    }
}

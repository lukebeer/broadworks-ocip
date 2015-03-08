<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16';
    public    $name                                  = __CLASS__;
    protected $voicePortalGreetingSelection          = null;
    protected $voicePortalGreetingFileDescription    = null;
    protected $voicePortalGreetingMediaType          = null;
    protected $voiceMessagingGreetingSelection       = null;
    protected $voiceMessagingGreetingFileDescription = null;
    protected $voiceMessagingGreetingMediaType       = null;


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
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setVoicePortalGreetingMediaType($voicePortalGreetingMediaType = null)
    {
        $this->voicePortalGreetingMediaType = ($voicePortalGreetingMediaType InstanceOf MediaFileType)
             ? $voicePortalGreetingMediaType
             : new MediaFileType($voicePortalGreetingMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getVoicePortalGreetingMediaType()
    {
        return (!$this->voicePortalGreetingMediaType) ?: $this->voicePortalGreetingMediaType->getValue();
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

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setVoiceMessagingGreetingMediaType($voiceMessagingGreetingMediaType = null)
    {
        $this->voiceMessagingGreetingMediaType = ($voiceMessagingGreetingMediaType InstanceOf MediaFileType)
             ? $voiceMessagingGreetingMediaType
             : new MediaFileType($voiceMessagingGreetingMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getVoiceMessagingGreetingMediaType()
    {
        return (!$this->voiceMessagingGreetingMediaType) ?: $this->voiceMessagingGreetingMediaType->getValue();
    }
}

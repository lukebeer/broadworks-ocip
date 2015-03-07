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
 * Response to the ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $voicePortalGreetingSelection           = null;
    protected $voicePortalGreetingFileDescription     = null;
    protected $voicePortalGreetingMediaFileType       = null;
    protected $voiceMessagingGreetingSelection        = null;
    protected $voiceMessagingGreetingFileDescription  = null;
    protected $voiceMessagingGreetingMediaFileType    = null;


    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection = null)
    {
        $this->voicePortalGreetingSelection = ($voicePortalGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voicePortalGreetingSelection
             : new VoiceMessagingBrandingSelection($voicePortalGreetingSelection);
    }

    public function getVoicePortalGreetingSelection()
    {
        return (!$this->voicePortalGreetingSelection) ?: $this->voicePortalGreetingSelection->value();
    }

    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription = null)
    {
        $this->voicePortalGreetingFileDescription = ($voicePortalGreetingFileDescription InstanceOf FileDescription)
             ? $voicePortalGreetingFileDescription
             : new FileDescription($voicePortalGreetingFileDescription);
    }

    public function getVoicePortalGreetingFileDescription()
    {
        return (!$this->voicePortalGreetingFileDescription) ?: $this->voicePortalGreetingFileDescription->value();
    }

    public function setVoicePortalGreetingMediaFileType($voicePortalGreetingMediaFileType = null)
    {
        $this->voicePortalGreetingMediaFileType = ($voicePortalGreetingMediaFileType InstanceOf MediaFileType)
             ? $voicePortalGreetingMediaFileType
             : new MediaFileType($voicePortalGreetingMediaFileType);
    }

    public function getVoicePortalGreetingMediaFileType()
    {
        return (!$this->voicePortalGreetingMediaFileType) ?: $this->voicePortalGreetingMediaFileType->value();
    }

    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection = null)
    {
        $this->voiceMessagingGreetingSelection = ($voiceMessagingGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voiceMessagingGreetingSelection
             : new VoiceMessagingBrandingSelection($voiceMessagingGreetingSelection);
    }

    public function getVoiceMessagingGreetingSelection()
    {
        return (!$this->voiceMessagingGreetingSelection) ?: $this->voiceMessagingGreetingSelection->value();
    }

    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription = null)
    {
        $this->voiceMessagingGreetingFileDescription = ($voiceMessagingGreetingFileDescription InstanceOf FileDescription)
             ? $voiceMessagingGreetingFileDescription
             : new FileDescription($voiceMessagingGreetingFileDescription);
    }

    public function getVoiceMessagingGreetingFileDescription()
    {
        return (!$this->voiceMessagingGreetingFileDescription) ?: $this->voiceMessagingGreetingFileDescription->value();
    }

    public function setVoiceMessagingGreetingMediaFileType($voiceMessagingGreetingMediaFileType = null)
    {
        $this->voiceMessagingGreetingMediaFileType = ($voiceMessagingGreetingMediaFileType InstanceOf MediaFileType)
             ? $voiceMessagingGreetingMediaFileType
             : new MediaFileType($voiceMessagingGreetingMediaFileType);
    }

    public function getVoiceMessagingGreetingMediaFileType()
    {
        return (!$this->voiceMessagingGreetingMediaFileType) ?: $this->voiceMessagingGreetingMediaFileType->value();
    }
}

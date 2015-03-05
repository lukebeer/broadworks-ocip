<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the service provider's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $voicePortalGreetingSelection=null,
             LabeledFileResource $voicePortalGreetingFile=null,
             $voiceMessagingGreetingSelection=null,
             LabeledFileResource $voiceMessagingGreetingFile=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->voicePortalGreetingSelection    = $voicePortalGreetingSelection;
        $this->voicePortalGreetingFile         = $voicePortalGreetingFile;
        $this->voiceMessagingGreetingSelection = $voiceMessagingGreetingSelection;
        $this->voiceMessagingGreetingFile      = $voiceMessagingGreetingFile;
        $this->args                            = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection)
    {
        $voicePortalGreetingSelection and $this->voicePortalGreetingSelection = new VoiceMessagingBrandingSelection($voicePortalGreetingSelection);
    }

    public function getVoicePortalGreetingSelection()
    {
        return (!$this->voicePortalGreetingSelection) ?: $this->voicePortalGreetingSelection->value();
    }

    public function setVoicePortalGreetingFile($voicePortalGreetingFile)
    {
        $voicePortalGreetingFile and $this->voicePortalGreetingFile = new LabeledFileResource($voicePortalGreetingFile);
    }

    public function getVoicePortalGreetingFile()
    {
        return (!$this->voicePortalGreetingFile) ?: $this->voicePortalGreetingFile->value();
    }

    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection)
    {
        $voiceMessagingGreetingSelection and $this->voiceMessagingGreetingSelection = new VoiceMessagingBrandingSelection($voiceMessagingGreetingSelection);
    }

    public function getVoiceMessagingGreetingSelection()
    {
        return (!$this->voiceMessagingGreetingSelection) ?: $this->voiceMessagingGreetingSelection->value();
    }

    public function setVoiceMessagingGreetingFile($voiceMessagingGreetingFile)
    {
        $voiceMessagingGreetingFile and $this->voiceMessagingGreetingFile = new LabeledFileResource($voiceMessagingGreetingFile);
    }

    public function getVoiceMessagingGreetingFile()
    {
        return (!$this->voiceMessagingGreetingFile) ?: $this->voiceMessagingGreetingFile->value();
    }
}

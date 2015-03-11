<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = 'ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest';
    protected $serviceProviderId               = null;
    protected $voicePortalGreetingSelection    = null;
    protected $voicePortalGreetingFile         = null;
    protected $voiceMessagingGreetingSelection = null;
    protected $voiceMessagingGreetingFile      = null;

    public function __construct(
         $serviceProviderId,
         $voicePortalGreetingSelection = null,
         LabeledFileResource $voicePortalGreetingFile = null,
         $voiceMessagingGreetingSelection = null,
         LabeledFileResource $voiceMessagingGreetingFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setVoicePortalGreetingSelection($voicePortalGreetingSelection);
        $this->setVoicePortalGreetingFile($voicePortalGreetingFile);
        $this->setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection);
        $this->setVoiceMessagingGreetingFile($voiceMessagingGreetingFile);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection = null)
    {
        if (!$voicePortalGreetingSelection) return $this;
        $this->voicePortalGreetingSelection = ($voicePortalGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voicePortalGreetingSelection
             : new VoiceMessagingBrandingSelection($voicePortalGreetingSelection);
        $this->voicePortalGreetingSelection->setName('voicePortalGreetingSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingBrandingSelection
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalGreetingFile(LabeledFileResource $voicePortalGreetingFile = null)
    {
        if (!$voicePortalGreetingFile) return $this;
        $this->voicePortalGreetingFile = $voicePortalGreetingFile;
        $this->voicePortalGreetingFile->setName('voicePortalGreetingFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile;
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection = null)
    {
        if (!$voiceMessagingGreetingSelection) return $this;
        $this->voiceMessagingGreetingSelection = ($voiceMessagingGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voiceMessagingGreetingSelection
             : new VoiceMessagingBrandingSelection($voiceMessagingGreetingSelection);
        $this->voiceMessagingGreetingSelection->setName('voiceMessagingGreetingSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingBrandingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingFile(LabeledFileResource $voiceMessagingGreetingFile = null)
    {
        if (!$voiceMessagingGreetingFile) return $this;
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        $this->voiceMessagingGreetingFile->setName('voiceMessagingGreetingFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile;
    }
}

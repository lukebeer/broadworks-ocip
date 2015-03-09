<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingResponse16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $voicePortalGreetingSelection    = null;
    protected $voicePortalGreetingFile         = null;
    protected $voiceMessagingGreetingSelection = null;
    protected $voiceMessagingGreetingFile      = null;

    public function __construct(
         $serviceProviderId,
         $voicePortalGreetingSelection = null,
          $voicePortalGreetingFile = null,
         $voiceMessagingGreetingSelection = null,
          $voiceMessagingGreetingFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setVoicePortalGreetingSelection($voicePortalGreetingSelection);
        $this->setVoicePortalGreetingFile($voicePortalGreetingFile);
        $this->setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection);
        $this->setVoiceMessagingGreetingFile($voiceMessagingGreetingFile);
    }

    /**
     * @return ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setVoicePortalGreetingFile(LabeledMediaFileResource $voicePortalGreetingFile = null)
    {
        $this->voicePortalGreetingFile =  $voicePortalGreetingFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getVoicePortalGreetingFile()
    {
        return (!$this->voicePortalGreetingFile) ?: $this->voicePortalGreetingFile->getValue();
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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setVoiceMessagingGreetingFile(LabeledMediaFileResource $voiceMessagingGreetingFile = null)
    {
        $this->voiceMessagingGreetingFile =  $voiceMessagingGreetingFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getVoiceMessagingGreetingFile()
    {
        return (!$this->voiceMessagingGreetingFile) ?: $this->voiceMessagingGreetingFile->getValue();
    }
}

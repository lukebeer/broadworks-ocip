<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                  = 'ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16';
    protected $voicePortalGreetingSelection          = null;
    protected $voicePortalGreetingFileDescription    = null;
    protected $voicePortalGreetingMediaFileType      = null;
    protected $voiceMessagingGreetingSelection       = null;
    protected $voiceMessagingGreetingFileDescription = null;
    protected $voiceMessagingGreetingMediaFileType   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return VoiceMessagingBrandingSelection $voicePortalGreetingSelection
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription = null)
    {
        if (!$voicePortalGreetingFileDescription) return $this;
        $this->voicePortalGreetingFileDescription = ($voicePortalGreetingFileDescription InstanceOf FileDescription)
             ? $voicePortalGreetingFileDescription
             : new FileDescription($voicePortalGreetingFileDescription);
        $this->voicePortalGreetingFileDescription->setName('voicePortalGreetingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $voicePortalGreetingFileDescription
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return $this->voicePortalGreetingFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalGreetingMediaFileType($voicePortalGreetingMediaFileType = null)
    {
        if (!$voicePortalGreetingMediaFileType) return $this;
        $this->voicePortalGreetingMediaFileType = ($voicePortalGreetingMediaFileType InstanceOf MediaFileType)
             ? $voicePortalGreetingMediaFileType
             : new MediaFileType($voicePortalGreetingMediaFileType);
        $this->voicePortalGreetingMediaFileType->setName('voicePortalGreetingMediaFileType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $voicePortalGreetingMediaFileType
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return $this->voicePortalGreetingMediaFileType->getValue();
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
     * @return VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription = null)
    {
        if (!$voiceMessagingGreetingFileDescription) return $this;
        $this->voiceMessagingGreetingFileDescription = ($voiceMessagingGreetingFileDescription InstanceOf FileDescription)
             ? $voiceMessagingGreetingFileDescription
             : new FileDescription($voiceMessagingGreetingFileDescription);
        $this->voiceMessagingGreetingFileDescription->setName('voiceMessagingGreetingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $voiceMessagingGreetingFileDescription
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return $this->voiceMessagingGreetingFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingMediaFileType($voiceMessagingGreetingMediaFileType = null)
    {
        if (!$voiceMessagingGreetingMediaFileType) return $this;
        $this->voiceMessagingGreetingMediaFileType = ($voiceMessagingGreetingMediaFileType InstanceOf MediaFileType)
             ? $voiceMessagingGreetingMediaFileType
             : new MediaFileType($voiceMessagingGreetingMediaFileType);
        $this->voiceMessagingGreetingMediaFileType->setName('voiceMessagingGreetingMediaFileType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $voiceMessagingGreetingMediaFileType
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return $this->voiceMessagingGreetingMediaFileType->getValue();
    }
}

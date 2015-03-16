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
    public    $elementName = 'ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16';
    protected $voicePortalGreetingSelection;
    protected $voicePortalGreetingFileDescription;
    protected $voicePortalGreetingMediaFileType;
    protected $voiceMessagingGreetingSelection;
    protected $voiceMessagingGreetingFileDescription;
    protected $voiceMessagingGreetingMediaFileType;

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
        $this->voicePortalGreetingSelection = ($voicePortalGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voicePortalGreetingSelection
             : new VoiceMessagingBrandingSelection($voicePortalGreetingSelection);
        $this->voicePortalGreetingSelection->setElementName('voicePortalGreetingSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingBrandingSelection $voicePortalGreetingSelection
     */
    public function getVoicePortalGreetingSelection()
    {
        return ($this->voicePortalGreetingSelection)
            ? $this->voicePortalGreetingSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription = null)
    {
        $this->voicePortalGreetingFileDescription = ($voicePortalGreetingFileDescription InstanceOf FileDescription)
             ? $voicePortalGreetingFileDescription
             : new FileDescription($voicePortalGreetingFileDescription);
        $this->voicePortalGreetingFileDescription->setElementName('voicePortalGreetingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $voicePortalGreetingFileDescription
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return ($this->voicePortalGreetingFileDescription)
            ? $this->voicePortalGreetingFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalGreetingMediaFileType($voicePortalGreetingMediaFileType = null)
    {
        $this->voicePortalGreetingMediaFileType = ($voicePortalGreetingMediaFileType InstanceOf MediaFileType)
             ? $voicePortalGreetingMediaFileType
             : new MediaFileType($voicePortalGreetingMediaFileType);
        $this->voicePortalGreetingMediaFileType->setElementName('voicePortalGreetingMediaFileType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $voicePortalGreetingMediaFileType
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return ($this->voicePortalGreetingMediaFileType)
            ? $this->voicePortalGreetingMediaFileType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection = null)
    {
        $this->voiceMessagingGreetingSelection = ($voiceMessagingGreetingSelection InstanceOf VoiceMessagingBrandingSelection)
             ? $voiceMessagingGreetingSelection
             : new VoiceMessagingBrandingSelection($voiceMessagingGreetingSelection);
        $this->voiceMessagingGreetingSelection->setElementName('voiceMessagingGreetingSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return ($this->voiceMessagingGreetingSelection)
            ? $this->voiceMessagingGreetingSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription = null)
    {
        $this->voiceMessagingGreetingFileDescription = ($voiceMessagingGreetingFileDescription InstanceOf FileDescription)
             ? $voiceMessagingGreetingFileDescription
             : new FileDescription($voiceMessagingGreetingFileDescription);
        $this->voiceMessagingGreetingFileDescription->setElementName('voiceMessagingGreetingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $voiceMessagingGreetingFileDescription
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return ($this->voiceMessagingGreetingFileDescription)
            ? $this->voiceMessagingGreetingFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingMediaFileType($voiceMessagingGreetingMediaFileType = null)
    {
        $this->voiceMessagingGreetingMediaFileType = ($voiceMessagingGreetingMediaFileType InstanceOf MediaFileType)
             ? $voiceMessagingGreetingMediaFileType
             : new MediaFileType($voiceMessagingGreetingMediaFileType);
        $this->voiceMessagingGreetingMediaFileType->setElementName('voiceMessagingGreetingMediaFileType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $voiceMessagingGreetingMediaFileType
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return ($this->voiceMessagingGreetingMediaFileType)
            ? $this->voiceMessagingGreetingMediaFileType->getElementValue()
            : null;
    }
}

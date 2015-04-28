<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16';
    protected $voicePortalGreetingSelection;
    protected $voicePortalGreetingFileDescription;
    protected $voicePortalGreetingMediaType;
    protected $voiceMessagingGreetingSelection;
    protected $voiceMessagingGreetingFileDescription;
    protected $voiceMessagingGreetingMediaType;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16 $response
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
    public function setVoicePortalGreetingMediaType($voicePortalGreetingMediaType = null)
    {
        $this->voicePortalGreetingMediaType = ($voicePortalGreetingMediaType InstanceOf MediaFileType)
             ? $voicePortalGreetingMediaType
             : new MediaFileType($voicePortalGreetingMediaType);
        $this->voicePortalGreetingMediaType->setElementName('voicePortalGreetingMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $voicePortalGreetingMediaType
     */
    public function getVoicePortalGreetingMediaType()
    {
        return ($this->voicePortalGreetingMediaType)
            ? $this->voicePortalGreetingMediaType->getElementValue()
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
    public function setVoiceMessagingGreetingMediaType($voiceMessagingGreetingMediaType = null)
    {
        $this->voiceMessagingGreetingMediaType = ($voiceMessagingGreetingMediaType InstanceOf MediaFileType)
             ? $voiceMessagingGreetingMediaType
             : new MediaFileType($voiceMessagingGreetingMediaType);
        $this->voiceMessagingGreetingMediaType->setElementName('voiceMessagingGreetingMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $voiceMessagingGreetingMediaType
     */
    public function getVoiceMessagingGreetingMediaType()
    {
        return ($this->voiceMessagingGreetingMediaType)
            ? $this->voiceMessagingGreetingMediaType->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the group's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16';
    protected $serviceProviderId;
    protected $groupId;
    protected $voicePortalGreetingSelection;
    protected $voicePortalGreetingFile;
    protected $voiceMessagingGreetingSelection;
    protected $voiceMessagingGreetingFile;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $voicePortalGreetingSelection = null,
         $voicePortalGreetingFile = null,
         $voiceMessagingGreetingSelection = null,
         $voiceMessagingGreetingFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setVoicePortalGreetingSelection($voicePortalGreetingSelection);
        $this->setVoicePortalGreetingFile($voicePortalGreetingFile);
        $this->setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection);
        $this->setVoiceMessagingGreetingFile($voiceMessagingGreetingFile);
    }

    /**
     * @return mixed $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
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
    public function setVoicePortalGreetingFile(LabeledMediaFileResource $voicePortalGreetingFile = null)
    {
        $this->voicePortalGreetingFile = ($voicePortalGreetingFile InstanceOf LabeledMediaFileResource)
             ? $voicePortalGreetingFile
             : new LabeledMediaFileResource($voicePortalGreetingFile);
        $this->voicePortalGreetingFile->setElementName('voicePortalGreetingFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $voicePortalGreetingFile
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
    public function setVoiceMessagingGreetingFile(LabeledMediaFileResource $voiceMessagingGreetingFile = null)
    {
        $this->voiceMessagingGreetingFile = ($voiceMessagingGreetingFile InstanceOf LabeledMediaFileResource)
             ? $voiceMessagingGreetingFile
             : new LabeledMediaFileResource($voiceMessagingGreetingFile);
        $this->voiceMessagingGreetingFile->setElementName('voiceMessagingGreetingFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $voiceMessagingGreetingFile
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile;
    }
}

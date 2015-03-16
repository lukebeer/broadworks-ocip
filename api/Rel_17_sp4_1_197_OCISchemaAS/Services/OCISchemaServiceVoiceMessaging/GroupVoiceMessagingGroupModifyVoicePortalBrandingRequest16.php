<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingBrandingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16';
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
         LabeledMediaFileResource $voicePortalGreetingFile = null,
         $voiceMessagingGreetingSelection = null,
         LabeledMediaFileResource $voiceMessagingGreetingFile = null
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection = null)
    {
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
        return ($this->voicePortalGreetingSelection) ? $this->voicePortalGreetingSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalGreetingFile(LabeledMediaFileResource $voicePortalGreetingFile = null)
    {
        $this->voicePortalGreetingFile = ($voicePortalGreetingFile InstanceOf LabeledMediaFileResource)
             ? $voicePortalGreetingFile
             : new LabeledMediaFileResource($voicePortalGreetingFile);
        $this->voicePortalGreetingFile->setName('voicePortalGreetingFile');
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
        $this->voiceMessagingGreetingSelection->setName('voiceMessagingGreetingSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return ($this->voiceMessagingGreetingSelection) ? $this->voiceMessagingGreetingSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingGreetingFile(LabeledMediaFileResource $voiceMessagingGreetingFile = null)
    {
        $this->voiceMessagingGreetingFile = ($voiceMessagingGreetingFile InstanceOf LabeledMediaFileResource)
             ? $voiceMessagingGreetingFile
             : new LabeledMediaFileResource($voiceMessagingGreetingFile);
        $this->voiceMessagingGreetingFile->setName('voiceMessagingGreetingFile');
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

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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the group's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16
 */
class GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $voicePortalGreetingSelection    = null;
    protected $voicePortalGreetingFile         = null;
    protected $voiceMessagingGreetingSelection = null;
    protected $voiceMessagingGreetingFile      = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $voicePortalGreetingSelection = null,
         LabeledFileResource $voicePortalGreetingFile = null,
         $voiceMessagingGreetingSelection = null,
         LabeledFileResource $voiceMessagingGreetingFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setVoicePortalGreetingSelection($voicePortalGreetingSelection);
        $this->setVoicePortalGreetingFile($voicePortalGreetingFile);
        $this->setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection);
        $this->setVoiceMessagingGreetingFile($voiceMessagingGreetingFile);
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
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
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
    public function setVoicePortalGreetingFile(LabeledFileResource $voicePortalGreetingFile = null)
    {
        $this->voicePortalGreetingFile = LabeledFileResource $voicePortalGreetingFile;
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
    public function setVoiceMessagingGreetingFile(LabeledFileResource $voiceMessagingGreetingFile = null)
    {
        $this->voiceMessagingGreetingFile = LabeledFileResource $voiceMessagingGreetingFile;
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

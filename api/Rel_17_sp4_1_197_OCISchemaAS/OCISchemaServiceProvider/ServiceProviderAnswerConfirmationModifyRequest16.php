<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAnswerConfirmationModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $announcementMessageSelection = null;
    protected $confirmationMessageAudioFile = null;
    protected $confirmationTimoutSeconds    = null;

    public function __construct(
         $serviceProviderId,
         $announcementMessageSelection = null,
         LabeledMediaFileResource $confirmationMessageAudioFile = null,
         $confirmationTimoutSeconds = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setAnnouncementMessageSelection($announcementMessageSelection);
        $this->setConfirmationMessageAudioFile($confirmationMessageAudioFile);
        $this->setConfirmationTimoutSeconds($confirmationTimoutSeconds);
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
     * Anser Confirmation Announcement Selection.
     */
    public function setAnnouncementMessageSelection($announcementMessageSelection = null)
    {
        $this->announcementMessageSelection = ($announcementMessageSelection InstanceOf AnswerConfirmationAnnouncementSelection)
             ? $announcementMessageSelection
             : new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
    }

    /**
     * Anser Confirmation Announcement Selection.
     */
    public function getAnnouncementMessageSelection()
    {
        return (!$this->announcementMessageSelection) ?: $this->announcementMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setConfirmationMessageAudioFile(LabeledMediaFileResource $confirmationMessageAudioFile = null)
    {
        $this->confirmationMessageAudioFile = LabeledMediaFileResource $confirmationMessageAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getConfirmationMessageAudioFile()
    {
        return (!$this->confirmationMessageAudioFile) ?: $this->confirmationMessageAudioFile->getValue();
    }

    /**
     * The timer determines how long the system will wait for the confirmation.
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds = null)
    {
        $this->confirmationTimoutSeconds = ($confirmationTimoutSeconds InstanceOf AnswerConfirmationTimeoutSeconds)
             ? $confirmationTimoutSeconds
             : new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
    }

    /**
     * The timer determines how long the system will wait for the confirmation.
     */
    public function getConfirmationTimoutSeconds()
    {
        return (!$this->confirmationTimoutSeconds) ?: $this->confirmationTimoutSeconds->getValue();
    }
}

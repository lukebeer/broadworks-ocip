<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the ServiceProviderAnswerConfirmationGetRequest.
 *         Replaced By: ServiceProviderAnswerConfirmationGetResponse16
 */
class ServiceProviderAnswerConfirmationGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\ServiceProviderAnswerConfirmationGetResponse';
    public    $name                                    = __CLASS__;
    protected $announcementMessageSelection            = null;
    protected $confirmationMessageAudioFileDescription = null;
    protected $confirmationTimoutSeconds               = null;


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
     * Description of a file resource.
     */
    public function setConfirmationMessageAudioFileDescription($confirmationMessageAudioFileDescription = null)
    {
        $this->confirmationMessageAudioFileDescription = ($confirmationMessageAudioFileDescription InstanceOf FileDescription)
             ? $confirmationMessageAudioFileDescription
             : new FileDescription($confirmationMessageAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getConfirmationMessageAudioFileDescription()
    {
        return (!$this->confirmationMessageAudioFileDescription) ?: $this->confirmationMessageAudioFileDescription->getValue();
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

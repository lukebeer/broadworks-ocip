<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderAnswerConfirmationGetRequest16.
 */
class ServiceProviderAnswerConfirmationGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                    = 'ServiceProviderAnswerConfirmationGetResponse16';
    protected $announcementMessageSelection            = null;
    protected $confirmationMessageAudioFileDescription = null;
    protected $confirmationMessageMediaType            = null;
    protected $confirmationTimoutSeconds               = null;

    /**
     * @return ServiceProviderAnswerConfirmationGetResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnnouncementMessageSelection($announcementMessageSelection = null)
    {
        if (!$announcementMessageSelection) return $this;
        $this->announcementMessageSelection = ($announcementMessageSelection InstanceOf AnswerConfirmationAnnouncementSelection)
             ? $announcementMessageSelection
             : new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
        $this->announcementMessageSelection->setName('announcementMessageSelection');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationAnnouncementSelection
     */
    public function getAnnouncementMessageSelection()
    {
        return $this->announcementMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setConfirmationMessageAudioFileDescription($confirmationMessageAudioFileDescription = null)
    {
        if (!$confirmationMessageAudioFileDescription) return $this;
        $this->confirmationMessageAudioFileDescription = ($confirmationMessageAudioFileDescription InstanceOf FileDescription)
             ? $confirmationMessageAudioFileDescription
             : new FileDescription($confirmationMessageAudioFileDescription);
        $this->confirmationMessageAudioFileDescription->setName('confirmationMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getConfirmationMessageAudioFileDescription()
    {
        return $this->confirmationMessageAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setConfirmationMessageMediaType($confirmationMessageMediaType = null)
    {
        if (!$confirmationMessageMediaType) return $this;
        $this->confirmationMessageMediaType = ($confirmationMessageMediaType InstanceOf MediaFileType)
             ? $confirmationMessageMediaType
             : new MediaFileType($confirmationMessageMediaType);
        $this->confirmationMessageMediaType->setName('confirmationMessageMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getConfirmationMessageMediaType()
    {
        return $this->confirmationMessageMediaType->getValue();
    }

    /**
     * 
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds = null)
    {
        if (!$confirmationTimoutSeconds) return $this;
        $this->confirmationTimoutSeconds = ($confirmationTimoutSeconds InstanceOf AnswerConfirmationTimeoutSeconds)
             ? $confirmationTimoutSeconds
             : new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
        $this->confirmationTimoutSeconds->setName('confirmationTimoutSeconds');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationTimeoutSeconds
     */
    public function getConfirmationTimoutSeconds()
    {
        return $this->confirmationTimoutSeconds->getValue();
    }
}

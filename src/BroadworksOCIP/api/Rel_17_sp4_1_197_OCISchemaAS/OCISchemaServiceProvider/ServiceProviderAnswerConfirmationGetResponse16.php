<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationAnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the ServiceProviderAnswerConfirmationGetRequest16.
 */
class ServiceProviderAnswerConfirmationGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAnswerConfirmationGetResponse16';
    protected $announcementMessageSelection;
    protected $confirmationMessageAudioFileDescription;
    protected $confirmationMessageMediaType;
    protected $confirmationTimoutSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAnswerConfirmationGetResponse16 $response
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
        $this->announcementMessageSelection = ($announcementMessageSelection InstanceOf AnswerConfirmationAnnouncementSelection)
             ? $announcementMessageSelection
             : new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
        $this->announcementMessageSelection->setElementName('announcementMessageSelection');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationAnnouncementSelection $announcementMessageSelection
     */
    public function getAnnouncementMessageSelection()
    {
        return ($this->announcementMessageSelection)
            ? $this->announcementMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfirmationMessageAudioFileDescription($confirmationMessageAudioFileDescription = null)
    {
        $this->confirmationMessageAudioFileDescription = ($confirmationMessageAudioFileDescription InstanceOf FileDescription)
             ? $confirmationMessageAudioFileDescription
             : new FileDescription($confirmationMessageAudioFileDescription);
        $this->confirmationMessageAudioFileDescription->setElementName('confirmationMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $confirmationMessageAudioFileDescription
     */
    public function getConfirmationMessageAudioFileDescription()
    {
        return ($this->confirmationMessageAudioFileDescription)
            ? $this->confirmationMessageAudioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfirmationMessageMediaType($confirmationMessageMediaType = null)
    {
        $this->confirmationMessageMediaType = ($confirmationMessageMediaType InstanceOf MediaFileType)
             ? $confirmationMessageMediaType
             : new MediaFileType($confirmationMessageMediaType);
        $this->confirmationMessageMediaType->setElementName('confirmationMessageMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $confirmationMessageMediaType
     */
    public function getConfirmationMessageMediaType()
    {
        return ($this->confirmationMessageMediaType)
            ? $this->confirmationMessageMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds = null)
    {
        $this->confirmationTimoutSeconds = ($confirmationTimoutSeconds InstanceOf AnswerConfirmationTimeoutSeconds)
             ? $confirmationTimoutSeconds
             : new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
        $this->confirmationTimoutSeconds->setElementName('confirmationTimoutSeconds');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationTimeoutSeconds $confirmationTimoutSeconds
     */
    public function getConfirmationTimoutSeconds()
    {
        return ($this->confirmationTimoutSeconds)
            ? $this->confirmationTimoutSeconds->getElementValue()
            : null;
    }
}

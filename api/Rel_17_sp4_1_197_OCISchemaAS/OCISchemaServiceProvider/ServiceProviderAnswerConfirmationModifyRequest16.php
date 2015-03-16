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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAnswerConfirmationModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderAnswerConfirmationModifyRequest16';
    protected $serviceProviderId;
    protected $announcementMessageSelection;
    protected $confirmationMessageAudioFile;
    protected $confirmationTimoutSeconds;

    public function __construct(
         $serviceProviderId = '',
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
    public function setAnnouncementMessageSelection($announcementMessageSelection = null)
    {
        $this->announcementMessageSelection = ($announcementMessageSelection InstanceOf AnswerConfirmationAnnouncementSelection)
             ? $announcementMessageSelection
             : new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
        $this->announcementMessageSelection->setName('announcementMessageSelection');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationAnnouncementSelection $announcementMessageSelection
     */
    public function getAnnouncementMessageSelection()
    {
        return ($this->announcementMessageSelection) ? $this->announcementMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setConfirmationMessageAudioFile(LabeledMediaFileResource $confirmationMessageAudioFile = null)
    {
        $this->confirmationMessageAudioFile = ($confirmationMessageAudioFile InstanceOf LabeledMediaFileResource)
             ? $confirmationMessageAudioFile
             : new LabeledMediaFileResource($confirmationMessageAudioFile);
        $this->confirmationMessageAudioFile->setName('confirmationMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $confirmationMessageAudioFile
     */
    public function getConfirmationMessageAudioFile()
    {
        return $this->confirmationMessageAudioFile;
    }

    /**
     * 
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds = null)
    {
        $this->confirmationTimoutSeconds = ($confirmationTimoutSeconds InstanceOf AnswerConfirmationTimeoutSeconds)
             ? $confirmationTimoutSeconds
             : new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
        $this->confirmationTimoutSeconds->setName('confirmationTimoutSeconds');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationTimeoutSeconds $confirmationTimoutSeconds
     */
    public function getConfirmationTimoutSeconds()
    {
        return ($this->confirmationTimoutSeconds) ? $this->confirmationTimoutSeconds->getValue() : null;
    }
}

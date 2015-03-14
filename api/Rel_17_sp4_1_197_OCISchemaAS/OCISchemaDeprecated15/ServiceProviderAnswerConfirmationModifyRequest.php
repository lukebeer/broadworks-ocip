<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderAnswerConfirmationModifyRequest16
 */
class ServiceProviderAnswerConfirmationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'ServiceProviderAnswerConfirmationModifyRequest';
    protected $serviceProviderId            = null;
    protected $announcementMessageSelection = null;
    protected $confirmationMessageAudioFile = null;
    protected $confirmationTimoutSeconds    = null;

    public function __construct(
         $serviceProviderId,
         $announcementMessageSelection = null,
         LabeledFileResource $confirmationMessageAudioFile = null,
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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
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
     * @return AnswerConfirmationAnnouncementSelection $announcementMessageSelection
     */
    public function getAnnouncementMessageSelection()
    {
        return $this->announcementMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setConfirmationMessageAudioFile(LabeledFileResource $confirmationMessageAudioFile = null)
    {
        if (!$confirmationMessageAudioFile) return $this;
        $this->confirmationMessageAudioFile = $confirmationMessageAudioFile;
        $this->confirmationMessageAudioFile->setName('confirmationMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $confirmationMessageAudioFile
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
        if (!$confirmationTimoutSeconds) return $this;
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
        return $this->confirmationTimoutSeconds->getValue();
    }
}

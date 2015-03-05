<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnswerConfirmationAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnswerConfirmationTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAnswerConfirmationModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $announcementMessageSelection=null,
             LabeledMediaFileResource $confirmationMessageAudioFile=null,
             $confirmationTimoutSeconds=null
    ) {
        $this->serviceProviderId            = new ServiceProviderId($serviceProviderId);
        $this->announcementMessageSelection = $announcementMessageSelection;
        $this->confirmationMessageAudioFile = $confirmationMessageAudioFile;
        $this->confirmationTimoutSeconds    = $confirmationTimoutSeconds;
        $this->args                         = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setAnnouncementMessageSelection($announcementMessageSelection)
    {
        $announcementMessageSelection and $this->announcementMessageSelection = new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
    }

    public function getAnnouncementMessageSelection()
    {
        return (!$this->announcementMessageSelection) ?: $this->announcementMessageSelection->value();
    }

    public function setConfirmationMessageAudioFile($confirmationMessageAudioFile)
    {
        $confirmationMessageAudioFile and $this->confirmationMessageAudioFile = new LabeledMediaFileResource($confirmationMessageAudioFile);
    }

    public function getConfirmationMessageAudioFile()
    {
        return (!$this->confirmationMessageAudioFile) ?: $this->confirmationMessageAudioFile->value();
    }

    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds)
    {
        $confirmationTimoutSeconds and $this->confirmationTimoutSeconds = new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
    }

    public function getConfirmationTimoutSeconds()
    {
        return (!$this->confirmationTimoutSeconds) ?: $this->confirmationTimoutSeconds->value();
    }
}

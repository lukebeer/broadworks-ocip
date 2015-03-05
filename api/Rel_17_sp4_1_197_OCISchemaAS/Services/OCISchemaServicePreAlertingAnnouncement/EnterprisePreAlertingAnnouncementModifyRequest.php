<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreAlertingAnnouncementInterrupt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreAlertingAnnouncementInterruptDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the enterprise level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterprisePreAlertingAnnouncementModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $announcementInterruption=null,
             $interruptionDigitSequence=null,
             $audioSelection=null,
             ExtendedMediaFileResource $audioFile=null,
             $videoSelection=null,
             ExtendedMediaFileResource $videoFile=null
    ) {
        $this->serviceProviderId         = new ServiceProviderId($serviceProviderId);
        $this->announcementInterruption  = $announcementInterruption;
        $this->interruptionDigitSequence = $interruptionDigitSequence;
        $this->audioSelection            = new ExtendedFileResourceSelection($audioSelection);
        $this->audioFile                 = $audioFile;
        $this->videoSelection            = new ExtendedFileResourceSelection($videoSelection);
        $this->videoFile                 = $videoFile;
        $this->args                      = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setAnnouncementInterruption($announcementInterruption)
    {
        $announcementInterruption and $this->announcementInterruption = new PreAlertingAnnouncementInterrupt($announcementInterruption);
    }

    public function getAnnouncementInterruption()
    {
        return (!$this->announcementInterruption) ?: $this->announcementInterruption->value();
    }

    public function setInterruptionDigitSequence($interruptionDigitSequence)
    {
        $interruptionDigitSequence and $this->interruptionDigitSequence = new PreAlertingAnnouncementInterruptDigits($interruptionDigitSequence);
    }

    public function getInterruptionDigitSequence()
    {
        return (!$this->interruptionDigitSequence) ?: $this->interruptionDigitSequence->value();
    }

    public function setAudioSelection($audioSelection)
    {
        $audioSelection and $this->audioSelection = new ExtendedFileResourceSelection($audioSelection);
    }

    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->value();
    }

    public function setAudioFile($audioFile)
    {
        $audioFile and $this->audioFile = new ExtendedMediaFileResource($audioFile);
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoSelection($videoSelection)
    {
        $videoSelection and $this->videoSelection = new ExtendedFileResourceSelection($videoSelection);
    }

    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->value();
    }

    public function setVideoFile($videoFile)
    {
        $videoFile and $this->videoFile = new ExtendedMediaFileResource($videoFile);
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }
}

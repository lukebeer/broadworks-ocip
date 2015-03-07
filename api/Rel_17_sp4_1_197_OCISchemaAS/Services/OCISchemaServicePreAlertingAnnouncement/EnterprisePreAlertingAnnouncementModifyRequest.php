<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterruptDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterrupt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the enterprise level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterprisePreAlertingAnnouncementModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $serviceProviderId          = null;
    protected $announcementInterruption   = null;
    protected $interruptionDigitSequence  = null;
    protected $audioSelection             = null;
    protected $audioFile                  = null;
    protected $videoSelection             = null;
    protected $videoFile                  = null;

    public function __construct(
         $serviceProviderId,
         $announcementInterruption = null,
         $interruptionDigitSequence = null,
         $audioSelection = null,
         ExtendedMediaFileResource $audioFile = null,
         $videoSelection = null,
         ExtendedMediaFileResource $videoFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setAnnouncementInterruption($announcementInterruption);
        $this->setInterruptionDigitSequence($interruptionDigitSequence);
        $this->setAudioSelection($audioSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoSelection($videoSelection);
        $this->setVideoFile($videoFile);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setAnnouncementInterruption($announcementInterruption = null)
    {
        $this->announcementInterruption = ($announcementInterruption InstanceOf PreAlertingAnnouncementInterrupt)
             ? $announcementInterruption
             : new PreAlertingAnnouncementInterrupt($announcementInterruption);
    }

    public function getAnnouncementInterruption()
    {
        return (!$this->announcementInterruption) ?: $this->announcementInterruption->value();
    }

    public function setInterruptionDigitSequence($interruptionDigitSequence = null)
    {
        $this->interruptionDigitSequence = ($interruptionDigitSequence InstanceOf PreAlertingAnnouncementInterruptDigits)
             ? $interruptionDigitSequence
             : new PreAlertingAnnouncementInterruptDigits($interruptionDigitSequence);
    }

    public function getInterruptionDigitSequence()
    {
        return (!$this->interruptionDigitSequence) ?: $this->interruptionDigitSequence->value();
    }

    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
    }

    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->value();
    }

    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
    }

    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->value();
    }

    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }
}

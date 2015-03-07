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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the group level pre-alerting service settings.
 *         The response is either a GroupPreAlertingAnnouncementGetResponse or an ErrorResponse.
 */
class GroupPreAlertingAnnouncementGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $announcementInterruption   = null;
    protected $interruptionDigitSequence  = null;
    protected $audioSelection             = null;
    protected $audioFileDescription       = null;
    protected $audioMediaType             = null;
    protected $audioFileUrl               = null;
    protected $videoSelection             = null;
    protected $videoFileDescription       = null;
    protected $videoMediaType             = null;
    protected $videoFileUrl               = null;


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

    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
    }

    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->value();
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

    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
    }

    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->value();
    }
}

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
     * Get the Enterprise level pre-alerting service settings.
 *         The response is either a EnterprisePreAlertingAnnouncementGetResponse or an ErrorResponse.
 */
class EnterprisePreAlertingAnnouncementGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement\EnterprisePreAlertingAnnouncementGetResponse';
    public    $name                      = __CLASS__;
    protected $announcementInterruption  = null;
    protected $interruptionDigitSequence = null;
    protected $audioSelection            = null;
    protected $audioFileDescription      = null;
    protected $audioMediaType            = null;
    protected $audioFileUrl              = null;
    protected $videoSelection            = null;
    protected $videoFileDescription      = null;
    protected $videoMediaType            = null;
    protected $videoFileUrl              = null;


    /**
     * Pre-alerting Announcement interrupt type.
     */
    public function setAnnouncementInterruption($announcementInterruption = null)
    {
        $this->announcementInterruption = ($announcementInterruption InstanceOf PreAlertingAnnouncementInterrupt)
             ? $announcementInterruption
             : new PreAlertingAnnouncementInterrupt($announcementInterruption);
    }

    /**
     * Pre-alerting Announcement interrupt type.
     */
    public function getAnnouncementInterruption()
    {
        return (!$this->announcementInterruption) ?: $this->announcementInterruption->getValue();
    }

    /**
     * Pre-alerting Announcement Interrupt digit sequence.
     *         The Interrupt digit sequence may contain digits 0-9, *, and #.
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence = null)
    {
        $this->interruptionDigitSequence = ($interruptionDigitSequence InstanceOf PreAlertingAnnouncementInterruptDigits)
             ? $interruptionDigitSequence
             : new PreAlertingAnnouncementInterruptDigits($interruptionDigitSequence);
    }

    /**
     * Pre-alerting Announcement Interrupt digit sequence.
     *         The Interrupt digit sequence may contain digits 0-9, *, and #.
     */
    public function getInterruptionDigitSequence()
    {
        return (!$this->interruptionDigitSequence) ?: $this->interruptionDigitSequence->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->getValue();
    }

    /**
     * URL.
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    /**
     * URL.
     */
    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->getValue();
    }

    /**
     * URL.
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    /**
     * URL.
     */
    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->getValue();
    }
}

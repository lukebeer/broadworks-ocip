<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreAlertingAnnouncementInterrupt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreAlertingAnnouncementInterruptDigits;
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
    public    $name = __CLASS__;

    public function __construct(
             $announcementInterruption,
             $interruptionDigitSequence=null,
             $audioSelection,
             $audioFileDescription=null,
             $audioMediaType=null,
             $audioFileUrl=null,
             $videoSelection,
             $videoFileDescription=null,
             $videoMediaType=null,
             $videoFileUrl=null
    ) {
        $this->announcementInterruption  = $announcementInterruption;
        $this->interruptionDigitSequence = $interruptionDigitSequence;
        $this->audioSelection            = new ExtendedFileResourceSelection($audioSelection);
        $this->audioFileDescription      = new FileDescription($audioFileDescription);
        $this->audioMediaType            = new MediaFileType($audioMediaType);
        $this->audioFileUrl              = new URL($audioFileUrl);
        $this->videoSelection            = new ExtendedFileResourceSelection($videoSelection);
        $this->videoFileDescription      = new FileDescription($videoFileDescription);
        $this->videoMediaType            = new MediaFileType($videoMediaType);
        $this->videoFileUrl              = new URL($videoFileUrl);
        $this->args                      = func_get_args();
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

    public function setAudioFileDescription($audioFileDescription)
    {
        $audioFileDescription and $this->audioFileDescription = new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType)
    {
        $audioMediaType and $this->audioMediaType = new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
    }

    public function setAudioFileUrl($audioFileUrl)
    {
        $audioFileUrl and $this->audioFileUrl = new URL($audioFileUrl);
    }

    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->value();
    }

    public function setVideoSelection($videoSelection)
    {
        $videoSelection and $this->videoSelection = new ExtendedFileResourceSelection($videoSelection);
    }

    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->value();
    }

    public function setVideoFileDescription($videoFileDescription)
    {
        $videoFileDescription and $this->videoFileDescription = new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType)
    {
        $videoMediaType and $this->videoMediaType = new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
    }

    public function setVideoFileUrl($videoFileUrl)
    {
        $videoFileUrl and $this->videoFileUrl = new URL($videoFileUrl);
    }

    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->value();
    }
}

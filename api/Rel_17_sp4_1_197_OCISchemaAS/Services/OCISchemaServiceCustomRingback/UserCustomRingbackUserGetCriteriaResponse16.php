<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCustomRingbackUserGetCriteriaRequest16.
 */
class UserCustomRingbackUserGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TimeSchedule $timeSchedule=null,
             HolidaySchedule $holidaySchedule=null,
             $blacklisted,
             CriteriaFromDn $fromDnCriteria,
             $audioSelection,
             $audioFileDescription=null,
             $audioMediaType=null,
             $audioFileUrl=null,
             $videoSelection,
             $videoFileDescription=null,
             $videoMediaType=null,
             $videoFileUrl=null,
             $callWaitingAudioSelection=null,
             $callWaitingAudioFileDescription=null,
             $callWaitingAudioMediaType=null,
             $callWaitingAudioFileUrl=null,
             $callWaitingVideoSelection=null,
             $callWaitingVideoFileDescription=null,
             $callWaitingVideoMediaType=null,
             $callWaitingVideoFileUrl=null
    ) {
        $this->timeSchedule                    = $timeSchedule;
        $this->holidaySchedule                 = $holidaySchedule;
        $this->blacklisted                     = $blacklisted;
        $this->fromDnCriteria                  = $fromDnCriteria;
        $this->audioSelection                  = new ExtendedFileResourceSelection($audioSelection);
        $this->audioFileDescription            = new FileDescription($audioFileDescription);
        $this->audioMediaType                  = new MediaFileType($audioMediaType);
        $this->audioFileUrl                    = new URL($audioFileUrl);
        $this->videoSelection                  = new ExtendedFileResourceSelection($videoSelection);
        $this->videoFileDescription            = new FileDescription($videoFileDescription);
        $this->videoMediaType                  = new MediaFileType($videoMediaType);
        $this->videoFileUrl                    = new URL($videoFileUrl);
        $this->callWaitingAudioSelection       = new ExtendedFileResourceSelection($callWaitingAudioSelection);
        $this->callWaitingAudioFileDescription = new FileDescription($callWaitingAudioFileDescription);
        $this->callWaitingAudioMediaType       = new MediaFileType($callWaitingAudioMediaType);
        $this->callWaitingAudioFileUrl         = new URL($callWaitingAudioFileUrl);
        $this->callWaitingVideoSelection       = new ExtendedFileResourceSelection($callWaitingVideoSelection);
        $this->callWaitingVideoFileDescription = new FileDescription($callWaitingVideoFileDescription);
        $this->callWaitingVideoMediaType       = new MediaFileType($callWaitingVideoMediaType);
        $this->callWaitingVideoFileUrl         = new URL($callWaitingVideoFileUrl);
        $this->args                            = func_get_args();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new TimeSchedule($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule($holidaySchedule)
    {
        $holidaySchedule and $this->holidaySchedule = new HolidaySchedule($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setBlacklisted($blacklisted)
    {
        $blacklisted and $this->blacklisted = new xs:boolean($blacklisted);
    }

    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted->value();
    }

    public function setFromDnCriteria($fromDnCriteria)
    {
        $fromDnCriteria and $this->fromDnCriteria = new CriteriaFromDn($fromDnCriteria);
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
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

    public function setCallWaitingAudioSelection($callWaitingAudioSelection)
    {
        $callWaitingAudioSelection and $this->callWaitingAudioSelection = new ExtendedFileResourceSelection($callWaitingAudioSelection);
    }

    public function getCallWaitingAudioSelection()
    {
        return (!$this->callWaitingAudioSelection) ?: $this->callWaitingAudioSelection->value();
    }

    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription)
    {
        $callWaitingAudioFileDescription and $this->callWaitingAudioFileDescription = new FileDescription($callWaitingAudioFileDescription);
    }

    public function getCallWaitingAudioFileDescription()
    {
        return (!$this->callWaitingAudioFileDescription) ?: $this->callWaitingAudioFileDescription->value();
    }

    public function setCallWaitingAudioMediaType($callWaitingAudioMediaType)
    {
        $callWaitingAudioMediaType and $this->callWaitingAudioMediaType = new MediaFileType($callWaitingAudioMediaType);
    }

    public function getCallWaitingAudioMediaType()
    {
        return (!$this->callWaitingAudioMediaType) ?: $this->callWaitingAudioMediaType->value();
    }

    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl)
    {
        $callWaitingAudioFileUrl and $this->callWaitingAudioFileUrl = new URL($callWaitingAudioFileUrl);
    }

    public function getCallWaitingAudioFileUrl()
    {
        return (!$this->callWaitingAudioFileUrl) ?: $this->callWaitingAudioFileUrl->value();
    }

    public function setCallWaitingVideoSelection($callWaitingVideoSelection)
    {
        $callWaitingVideoSelection and $this->callWaitingVideoSelection = new ExtendedFileResourceSelection($callWaitingVideoSelection);
    }

    public function getCallWaitingVideoSelection()
    {
        return (!$this->callWaitingVideoSelection) ?: $this->callWaitingVideoSelection->value();
    }

    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription)
    {
        $callWaitingVideoFileDescription and $this->callWaitingVideoFileDescription = new FileDescription($callWaitingVideoFileDescription);
    }

    public function getCallWaitingVideoFileDescription()
    {
        return (!$this->callWaitingVideoFileDescription) ?: $this->callWaitingVideoFileDescription->value();
    }

    public function setCallWaitingVideoMediaType($callWaitingVideoMediaType)
    {
        $callWaitingVideoMediaType and $this->callWaitingVideoMediaType = new MediaFileType($callWaitingVideoMediaType);
    }

    public function getCallWaitingVideoMediaType()
    {
        return (!$this->callWaitingVideoMediaType) ?: $this->callWaitingVideoMediaType->value();
    }

    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl)
    {
        $callWaitingVideoFileUrl and $this->callWaitingVideoFileUrl = new URL($callWaitingVideoFileUrl);
    }

    public function getCallWaitingVideoFileUrl()
    {
        return (!$this->callWaitingVideoFileUrl) ?: $this->callWaitingVideoFileUrl->value();
    }
}

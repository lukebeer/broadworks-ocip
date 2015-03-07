<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCustomRingbackUserGetCriteriaRequest16.
 */
class UserCustomRingbackUserGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $timeSchedule                     = null;
    protected $holidaySchedule                  = null;
    protected $blacklisted                      = null;
    protected $fromDnCriteria                   = null;
    protected $audioSelection                   = null;
    protected $audioFileDescription             = null;
    protected $audioMediaType                   = null;
    protected $audioFileUrl                     = null;
    protected $videoSelection                   = null;
    protected $videoFileDescription             = null;
    protected $videoMediaType                   = null;
    protected $videoFileUrl                     = null;
    protected $callWaitingAudioSelection        = null;
    protected $callWaitingAudioFileDescription  = null;
    protected $callWaitingAudioMediaType        = null;
    protected $callWaitingAudioFileUrl          = null;
    protected $callWaitingVideoSelection        = null;
    protected $callWaitingVideoFileDescription  = null;
    protected $callWaitingVideoMediaType        = null;
    protected $callWaitingVideoFileUrl          = null;


    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setBlacklisted(xs:boolean $blacklisted = null)
    {
    }

    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted->value();
    }

    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
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

    public function setCallWaitingAudioSelection($callWaitingAudioSelection = null)
    {
        $this->callWaitingAudioSelection = ($callWaitingAudioSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingAudioSelection
             : new ExtendedFileResourceSelection($callWaitingAudioSelection);
    }

    public function getCallWaitingAudioSelection()
    {
        return (!$this->callWaitingAudioSelection) ?: $this->callWaitingAudioSelection->value();
    }

    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription = null)
    {
        $this->callWaitingAudioFileDescription = ($callWaitingAudioFileDescription InstanceOf FileDescription)
             ? $callWaitingAudioFileDescription
             : new FileDescription($callWaitingAudioFileDescription);
    }

    public function getCallWaitingAudioFileDescription()
    {
        return (!$this->callWaitingAudioFileDescription) ?: $this->callWaitingAudioFileDescription->value();
    }

    public function setCallWaitingAudioMediaType($callWaitingAudioMediaType = null)
    {
        $this->callWaitingAudioMediaType = ($callWaitingAudioMediaType InstanceOf MediaFileType)
             ? $callWaitingAudioMediaType
             : new MediaFileType($callWaitingAudioMediaType);
    }

    public function getCallWaitingAudioMediaType()
    {
        return (!$this->callWaitingAudioMediaType) ?: $this->callWaitingAudioMediaType->value();
    }

    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl = null)
    {
        $this->callWaitingAudioFileUrl = ($callWaitingAudioFileUrl InstanceOf URL)
             ? $callWaitingAudioFileUrl
             : new URL($callWaitingAudioFileUrl);
    }

    public function getCallWaitingAudioFileUrl()
    {
        return (!$this->callWaitingAudioFileUrl) ?: $this->callWaitingAudioFileUrl->value();
    }

    public function setCallWaitingVideoSelection($callWaitingVideoSelection = null)
    {
        $this->callWaitingVideoSelection = ($callWaitingVideoSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingVideoSelection
             : new ExtendedFileResourceSelection($callWaitingVideoSelection);
    }

    public function getCallWaitingVideoSelection()
    {
        return (!$this->callWaitingVideoSelection) ?: $this->callWaitingVideoSelection->value();
    }

    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription = null)
    {
        $this->callWaitingVideoFileDescription = ($callWaitingVideoFileDescription InstanceOf FileDescription)
             ? $callWaitingVideoFileDescription
             : new FileDescription($callWaitingVideoFileDescription);
    }

    public function getCallWaitingVideoFileDescription()
    {
        return (!$this->callWaitingVideoFileDescription) ?: $this->callWaitingVideoFileDescription->value();
    }

    public function setCallWaitingVideoMediaType($callWaitingVideoMediaType = null)
    {
        $this->callWaitingVideoMediaType = ($callWaitingVideoMediaType InstanceOf MediaFileType)
             ? $callWaitingVideoMediaType
             : new MediaFileType($callWaitingVideoMediaType);
    }

    public function getCallWaitingVideoMediaType()
    {
        return (!$this->callWaitingVideoMediaType) ?: $this->callWaitingVideoMediaType->value();
    }

    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl = null)
    {
        $this->callWaitingVideoFileUrl = ($callWaitingVideoFileUrl InstanceOf URL)
             ? $callWaitingVideoFileUrl
             : new URL($callWaitingVideoFileUrl);
    }

    public function getCallWaitingVideoFileUrl()
    {
        return (!$this->callWaitingVideoFileUrl) ?: $this->callWaitingVideoFileUrl->value();
    }
}

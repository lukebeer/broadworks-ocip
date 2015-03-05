<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCustomRingbackUserGetCriteriaRequest15sp2.
 *         Replaced By: UserCustomRingbackUserAddCriteriaResponse16
 */
class UserCustomRingbackUserGetCriteriaResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TimeSchedule $timeSchedule=null,
             CriteriaFromDn $fromDnCriteria,
             $audioSelection,
             $audioFileDescription=null,
             $audioFileUrl=null,
             $videoSelection,
             $videoFileDescription=null,
             $videoFileUrl=null,
             $callWaitingAudioSelection=null,
             $callWaitingAudioFileDescription=null,
             $callWaitingAudioFileUrl=null,
             $callWaitingVideoSelection=null,
             $callWaitingVideoFileDescription=null,
             $callWaitingVideoFileUrl=null
    ) {
        $this->timeSchedule                    = $timeSchedule;
        $this->fromDnCriteria                  = $fromDnCriteria;
        $this->audioSelection                  = new ExtendedFileResourceSelection($audioSelection);
        $this->audioFileDescription            = new FileDescription($audioFileDescription);
        $this->audioFileUrl                    = new URL($audioFileUrl);
        $this->videoSelection                  = new ExtendedFileResourceSelection($videoSelection);
        $this->videoFileDescription            = new FileDescription($videoFileDescription);
        $this->videoFileUrl                    = new URL($videoFileUrl);
        $this->callWaitingAudioSelection       = new ExtendedFileResourceSelection($callWaitingAudioSelection);
        $this->callWaitingAudioFileDescription = new FileDescription($callWaitingAudioFileDescription);
        $this->callWaitingAudioFileUrl         = new URL($callWaitingAudioFileUrl);
        $this->callWaitingVideoSelection       = new ExtendedFileResourceSelection($callWaitingVideoSelection);
        $this->callWaitingVideoFileDescription = new FileDescription($callWaitingVideoFileDescription);
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

    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl)
    {
        $callWaitingVideoFileUrl and $this->callWaitingVideoFileUrl = new URL($callWaitingVideoFileUrl);
    }

    public function getCallWaitingVideoFileUrl()
    {
        return (!$this->callWaitingVideoFileUrl) ?: $this->callWaitingVideoFileUrl->value();
    }
}

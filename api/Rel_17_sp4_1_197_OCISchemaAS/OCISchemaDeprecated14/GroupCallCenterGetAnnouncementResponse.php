<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest.
 */
class GroupCallCenterGetAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $entranceMessageSelection,
             $entranceMessageAudioFileDescription=null,
             $entranceMessageVideoFileDescription=null,
             $periodicComfortMessageSelection,
             $periodicComfortMessageAudioFileDescription=null,
             $periodicComfortMessageVideoFileDescription=null,
             $onHoldMessageSelection,
             $onHoldMessageAudioFileDescription=null,
             $onHoldMessageVideoFileDescription=null
    ) {
        $this->entranceMessageSelection                   = $entranceMessageSelection;
        $this->entranceMessageAudioFileDescription        = new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceMessageVideoFileDescription        = new FileDescription($entranceMessageVideoFileDescription);
        $this->periodicComfortMessageSelection            = $periodicComfortMessageSelection;
        $this->periodicComfortMessageAudioFileDescription = new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortMessageVideoFileDescription = new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->onHoldMessageSelection                     = $onHoldMessageSelection;
        $this->onHoldMessageAudioFileDescription          = new FileDescription($onHoldMessageAudioFileDescription);
        $this->onHoldMessageVideoFileDescription          = new FileDescription($onHoldMessageVideoFileDescription);
        $this->args                                       = func_get_args();
    }

    public function setEntranceMessageSelection($entranceMessageSelection)
    {
        $entranceMessageSelection and $this->entranceMessageSelection = new CallCenterAnnouncementSelection($entranceMessageSelection);
    }

    public function getEntranceMessageSelection()
    {
        return (!$this->entranceMessageSelection) ?: $this->entranceMessageSelection->value();
    }

    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription)
    {
        $entranceMessageAudioFileDescription and $this->entranceMessageAudioFileDescription = new FileDescription($entranceMessageAudioFileDescription);
    }

    public function getEntranceMessageAudioFileDescription()
    {
        return (!$this->entranceMessageAudioFileDescription) ?: $this->entranceMessageAudioFileDescription->value();
    }

    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription)
    {
        $entranceMessageVideoFileDescription and $this->entranceMessageVideoFileDescription = new FileDescription($entranceMessageVideoFileDescription);
    }

    public function getEntranceMessageVideoFileDescription()
    {
        return (!$this->entranceMessageVideoFileDescription) ?: $this->entranceMessageVideoFileDescription->value();
    }

    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection)
    {
        $periodicComfortMessageSelection and $this->periodicComfortMessageSelection = new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
    }

    public function getPeriodicComfortMessageSelection()
    {
        return (!$this->periodicComfortMessageSelection) ?: $this->periodicComfortMessageSelection->value();
    }

    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription)
    {
        $periodicComfortMessageAudioFileDescription and $this->periodicComfortMessageAudioFileDescription = new FileDescription($periodicComfortMessageAudioFileDescription);
    }

    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return (!$this->periodicComfortMessageAudioFileDescription) ?: $this->periodicComfortMessageAudioFileDescription->value();
    }

    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription)
    {
        $periodicComfortMessageVideoFileDescription and $this->periodicComfortMessageVideoFileDescription = new FileDescription($periodicComfortMessageVideoFileDescription);
    }

    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return (!$this->periodicComfortMessageVideoFileDescription) ?: $this->periodicComfortMessageVideoFileDescription->value();
    }

    public function setOnHoldMessageSelection($onHoldMessageSelection)
    {
        $onHoldMessageSelection and $this->onHoldMessageSelection = new CallCenterAnnouncementSelection($onHoldMessageSelection);
    }

    public function getOnHoldMessageSelection()
    {
        return (!$this->onHoldMessageSelection) ?: $this->onHoldMessageSelection->value();
    }

    public function setOnHoldMessageAudioFileDescription($onHoldMessageAudioFileDescription)
    {
        $onHoldMessageAudioFileDescription and $this->onHoldMessageAudioFileDescription = new FileDescription($onHoldMessageAudioFileDescription);
    }

    public function getOnHoldMessageAudioFileDescription()
    {
        return (!$this->onHoldMessageAudioFileDescription) ?: $this->onHoldMessageAudioFileDescription->value();
    }

    public function setOnHoldMessageVideoFileDescription($onHoldMessageVideoFileDescription)
    {
        $onHoldMessageVideoFileDescription and $this->onHoldMessageVideoFileDescription = new FileDescription($onHoldMessageVideoFileDescription);
    }

    public function getOnHoldMessageVideoFileDescription()
    {
        return (!$this->onHoldMessageVideoFileDescription) ?: $this->onHoldMessageVideoFileDescription->value();
    }
}

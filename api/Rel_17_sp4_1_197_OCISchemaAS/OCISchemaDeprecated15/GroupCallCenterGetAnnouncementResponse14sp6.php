<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMusicOnHoldSourceRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest14sp6.
 */
class GroupCallCenterGetAnnouncementResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $entranceMessageSelection,
             $entranceMessageAudioFileDescription=null,
             $entranceMessageVideoFileDescription=null,
             $periodicComfortMessageSelection,
             $periodicComfortMessageAudioFileDescription=null,
             $periodicComfortMessageVideoFileDescription=null,
             $onHoldSource,
             $onHoldUseAlternateSourceForInternalCalls,
             $onHoldInternalSource=null
    ) {
        $this->entranceMessageSelection                   = $entranceMessageSelection;
        $this->entranceMessageAudioFileDescription        = new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceMessageVideoFileDescription        = new FileDescription($entranceMessageVideoFileDescription);
        $this->periodicComfortMessageSelection            = $periodicComfortMessageSelection;
        $this->periodicComfortMessageAudioFileDescription = new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortMessageVideoFileDescription = new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->onHoldSource                               = $onHoldSource;
        $this->onHoldUseAlternateSourceForInternalCalls   = $onHoldUseAlternateSourceForInternalCalls;
        $this->onHoldInternalSource                       = $onHoldInternalSource;
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

    public function setOnHoldSource($onHoldSource)
    {
        $onHoldSource and $this->onHoldSource = new CallCenterMusicOnHoldSourceRead($onHoldSource);
    }

    public function getOnHoldSource()
    {
        return (!$this->onHoldSource) ?: $this->onHoldSource->value();
    }

    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls)
    {
        $onHoldUseAlternateSourceForInternalCalls and $this->onHoldUseAlternateSourceForInternalCalls = new xs:boolean($onHoldUseAlternateSourceForInternalCalls);
    }

    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->onHoldUseAlternateSourceForInternalCalls) ?: $this->onHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setOnHoldInternalSource($onHoldInternalSource)
    {
        $onHoldInternalSource and $this->onHoldInternalSource = new CallCenterMusicOnHoldSourceRead($onHoldInternalSource);
    }

    public function getOnHoldInternalSource()
    {
        return (!$this->onHoldInternalSource) ?: $this->onHoldInternalSource->value();
    }
}

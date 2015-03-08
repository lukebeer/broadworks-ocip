<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallCenterMusicOnHoldSourceRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterGetAnnouncementRequest14sp6.
 */
class GroupCallCenterGetAnnouncementResponse14sp6 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupCallCenterGetAnnouncementResponse14sp6';
    public    $name                                       = __CLASS__;
    protected $entranceMessageSelection                   = null;
    protected $entranceMessageAudioFileDescription        = null;
    protected $entranceMessageVideoFileDescription        = null;
    protected $periodicComfortMessageSelection            = null;
    protected $periodicComfortMessageAudioFileDescription = null;
    protected $periodicComfortMessageVideoFileDescription = null;
    protected $onHoldSource                               = null;
    protected $onHoldUseAlternateSourceForInternalCalls   = null;
    protected $onHoldInternalSource                       = null;


    /**
     * Call Center Announcement Selection.
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
    }

    /**
     * Call Center Announcement Selection.
     */
    public function getEntranceMessageSelection()
    {
        return (!$this->entranceMessageSelection) ?: $this->entranceMessageSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return (!$this->entranceMessageAudioFileDescription) ?: $this->entranceMessageAudioFileDescription->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return (!$this->entranceMessageVideoFileDescription) ?: $this->entranceMessageVideoFileDescription->getValue();
    }

    /**
     * Call Center Announcement Selection.
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
    }

    /**
     * Call Center Announcement Selection.
     */
    public function getPeriodicComfortMessageSelection()
    {
        return (!$this->periodicComfortMessageSelection) ?: $this->periodicComfortMessageSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return (!$this->periodicComfortMessageAudioFileDescription) ?: $this->periodicComfortMessageAudioFileDescription->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return (!$this->periodicComfortMessageVideoFileDescription) ?: $this->periodicComfortMessageVideoFileDescription->getValue();
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function setOnHoldSource(CallCenterMusicOnHoldSourceRead $onHoldSource = null)
    {
        $this->onHoldSource = CallCenterMusicOnHoldSourceRead $onHoldSource;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function getOnHoldSource()
    {
        return (!$this->onHoldSource) ?: $this->onHoldSource->getValue();
    }

    /**
     * 
     */
    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->onHoldUseAlternateSourceForInternalCalls = (boolean) $onHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * 
     */
    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->onHoldUseAlternateSourceForInternalCalls) ?: $this->onHoldUseAlternateSourceForInternalCalls->getValue();
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function setOnHoldInternalSource(CallCenterMusicOnHoldSourceRead $onHoldInternalSource = null)
    {
        $this->onHoldInternalSource = CallCenterMusicOnHoldSourceRead $onHoldInternalSource;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function getOnHoldInternalSource()
    {
        return (!$this->onHoldInternalSource) ?: $this->onHoldInternalSource->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterGetAnnouncementRequest.
 */
class GroupCallCenterGetAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $entranceMessageSelection                   = null;
    protected $entranceMessageAudioFileDescription        = null;
    protected $entranceMessageVideoFileDescription        = null;
    protected $periodicComfortMessageSelection            = null;
    protected $periodicComfortMessageAudioFileDescription = null;
    protected $periodicComfortMessageVideoFileDescription = null;
    protected $onHoldMessageSelection                     = null;
    protected $onHoldMessageAudioFileDescription          = null;
    protected $onHoldMessageVideoFileDescription          = null;


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
     * Call Center Announcement Selection.
     */
    public function setOnHoldMessageSelection($onHoldMessageSelection = null)
    {
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
    }

    /**
     * Call Center Announcement Selection.
     */
    public function getOnHoldMessageSelection()
    {
        return (!$this->onHoldMessageSelection) ?: $this->onHoldMessageSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setOnHoldMessageAudioFileDescription($onHoldMessageAudioFileDescription = null)
    {
        $this->onHoldMessageAudioFileDescription = ($onHoldMessageAudioFileDescription InstanceOf FileDescription)
             ? $onHoldMessageAudioFileDescription
             : new FileDescription($onHoldMessageAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getOnHoldMessageAudioFileDescription()
    {
        return (!$this->onHoldMessageAudioFileDescription) ?: $this->onHoldMessageAudioFileDescription->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setOnHoldMessageVideoFileDescription($onHoldMessageVideoFileDescription = null)
    {
        $this->onHoldMessageVideoFileDescription = ($onHoldMessageVideoFileDescription InstanceOf FileDescription)
             ? $onHoldMessageVideoFileDescription
             : new FileDescription($onHoldMessageVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getOnHoldMessageVideoFileDescription()
    {
        return (!$this->onHoldMessageVideoFileDescription) ?: $this->onHoldMessageVideoFileDescription->getValue();
    }
}

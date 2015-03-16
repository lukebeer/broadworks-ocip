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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest.
 */
class GroupCallCenterGetAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterGetAnnouncementResponse';
    protected $entranceMessageSelection;
    protected $entranceMessageAudioFileDescription;
    protected $entranceMessageVideoFileDescription;
    protected $periodicComfortMessageSelection;
    protected $periodicComfortMessageAudioFileDescription;
    protected $periodicComfortMessageVideoFileDescription;
    protected $onHoldMessageSelection;
    protected $onHoldMessageAudioFileDescription;
    protected $onHoldMessageVideoFileDescription;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetAnnouncementResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
        $this->entranceMessageSelection->setName('entranceMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $entranceMessageSelection
     */
    public function getEntranceMessageSelection()
    {
        return ($this->entranceMessageSelection) ? $this->entranceMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceMessageAudioFileDescription->setName('entranceMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $entranceMessageAudioFileDescription
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return ($this->entranceMessageAudioFileDescription) ? $this->entranceMessageAudioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
        $this->entranceMessageVideoFileDescription->setName('entranceMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $entranceMessageVideoFileDescription
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return ($this->entranceMessageVideoFileDescription) ? $this->entranceMessageVideoFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
        $this->periodicComfortMessageSelection->setName('periodicComfortMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $periodicComfortMessageSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return ($this->periodicComfortMessageSelection) ? $this->periodicComfortMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortMessageAudioFileDescription->setName('periodicComfortMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $periodicComfortMessageAudioFileDescription
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return ($this->periodicComfortMessageAudioFileDescription) ? $this->periodicComfortMessageAudioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->periodicComfortMessageVideoFileDescription->setName('periodicComfortMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $periodicComfortMessageVideoFileDescription
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return ($this->periodicComfortMessageVideoFileDescription) ? $this->periodicComfortMessageVideoFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setOnHoldMessageSelection($onHoldMessageSelection = null)
    {
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
        $this->onHoldMessageSelection->setName('onHoldMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $onHoldMessageSelection
     */
    public function getOnHoldMessageSelection()
    {
        return ($this->onHoldMessageSelection) ? $this->onHoldMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setOnHoldMessageAudioFileDescription($onHoldMessageAudioFileDescription = null)
    {
        $this->onHoldMessageAudioFileDescription = ($onHoldMessageAudioFileDescription InstanceOf FileDescription)
             ? $onHoldMessageAudioFileDescription
             : new FileDescription($onHoldMessageAudioFileDescription);
        $this->onHoldMessageAudioFileDescription->setName('onHoldMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $onHoldMessageAudioFileDescription
     */
    public function getOnHoldMessageAudioFileDescription()
    {
        return ($this->onHoldMessageAudioFileDescription) ? $this->onHoldMessageAudioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setOnHoldMessageVideoFileDescription($onHoldMessageVideoFileDescription = null)
    {
        $this->onHoldMessageVideoFileDescription = ($onHoldMessageVideoFileDescription InstanceOf FileDescription)
             ? $onHoldMessageVideoFileDescription
             : new FileDescription($onHoldMessageVideoFileDescription);
        $this->onHoldMessageVideoFileDescription->setName('onHoldMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $onHoldMessageVideoFileDescription
     */
    public function getOnHoldMessageVideoFileDescription()
    {
        return ($this->onHoldMessageVideoFileDescription) ? $this->onHoldMessageVideoFileDescription->getValue() : null;
    }
}

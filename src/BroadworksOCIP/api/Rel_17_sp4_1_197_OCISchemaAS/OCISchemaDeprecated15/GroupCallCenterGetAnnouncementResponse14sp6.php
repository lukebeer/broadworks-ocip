<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallCenterMusicOnHoldSourceRead;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest14sp6.
 */
class GroupCallCenterGetAnnouncementResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetAnnouncementResponse14sp6';
    protected $entranceMessageSelection;
    protected $entranceMessageAudioFileDescription;
    protected $entranceMessageVideoFileDescription;
    protected $periodicComfortMessageSelection;
    protected $periodicComfortMessageAudioFileDescription;
    protected $periodicComfortMessageVideoFileDescription;
    protected $onHoldSource;
    protected $onHoldUseAlternateSourceForInternalCalls;
    protected $onHoldInternalSource;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupCallCenterGetAnnouncementResponse14sp6 $response
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
        $this->entranceMessageSelection->setElementName('entranceMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $entranceMessageSelection
     */
    public function getEntranceMessageSelection()
    {
        return ($this->entranceMessageSelection)
            ? $this->entranceMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceMessageAudioFileDescription->setElementName('entranceMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $entranceMessageAudioFileDescription
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return ($this->entranceMessageAudioFileDescription)
            ? $this->entranceMessageAudioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
        $this->entranceMessageVideoFileDescription->setElementName('entranceMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $entranceMessageVideoFileDescription
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return ($this->entranceMessageVideoFileDescription)
            ? $this->entranceMessageVideoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
        $this->periodicComfortMessageSelection->setElementName('periodicComfortMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $periodicComfortMessageSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return ($this->periodicComfortMessageSelection)
            ? $this->periodicComfortMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortMessageAudioFileDescription->setElementName('periodicComfortMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $periodicComfortMessageAudioFileDescription
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return ($this->periodicComfortMessageAudioFileDescription)
            ? $this->periodicComfortMessageAudioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->periodicComfortMessageVideoFileDescription->setElementName('periodicComfortMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $periodicComfortMessageVideoFileDescription
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return ($this->periodicComfortMessageVideoFileDescription)
            ? $this->periodicComfortMessageVideoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnHoldSource(CallCenterMusicOnHoldSourceRead $onHoldSource = null)
    {
        $this->onHoldSource = ($onHoldSource InstanceOf CallCenterMusicOnHoldSourceRead)
             ? $onHoldSource
             : new CallCenterMusicOnHoldSourceRead($onHoldSource);
        $this->onHoldSource->setElementName('onHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMusicOnHoldSourceRead $onHoldSource
     */
    public function getOnHoldSource()
    {
        return $this->onHoldSource;
    }

    /**
     * 
     */
    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->onHoldUseAlternateSourceForInternalCalls = new PrimitiveType($onHoldUseAlternateSourceForInternalCalls);
        $this->onHoldUseAlternateSourceForInternalCalls->setElementName('onHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $onHoldUseAlternateSourceForInternalCalls
     */
    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return ($this->onHoldUseAlternateSourceForInternalCalls)
            ? $this->onHoldUseAlternateSourceForInternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnHoldInternalSource(CallCenterMusicOnHoldSourceRead $onHoldInternalSource = null)
    {
        $this->onHoldInternalSource = ($onHoldInternalSource InstanceOf CallCenterMusicOnHoldSourceRead)
             ? $onHoldInternalSource
             : new CallCenterMusicOnHoldSourceRead($onHoldInternalSource);
        $this->onHoldInternalSource->setElementName('onHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMusicOnHoldSourceRead $onHoldInternalSource
     */
    public function getOnHoldInternalSource()
    {
        return $this->onHoldInternalSource;
    }
}

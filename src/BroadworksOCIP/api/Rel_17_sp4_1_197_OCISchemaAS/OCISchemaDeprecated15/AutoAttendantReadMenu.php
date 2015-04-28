<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The configuration of the automated receptionist greeting
 *         prompt and dialing menu to be used during after business hours.
 */
class AutoAttendantReadMenu extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AutoAttendantReadMenu';
    protected $announcementSelection;
    protected $audioFileDescription;
    protected $videoFileDescription;
    protected $enableFirstMenuLevelExtensionDialing;
    protected $keyConfiguration;

    public function __construct(
         $announcementSelection = '',
         $audioFileDescription = null,
         $videoFileDescription = null,
         $enableFirstMenuLevelExtensionDialing = '',
         $keyConfiguration = null
    ) {
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFileDescription($audioFileDescription);
        $this->setVideoFileDescription($videoFileDescription);
        $this->setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing);
        $this->setKeyConfiguration($keyConfiguration);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnnouncementSelection($announcementSelection = null)
    {
        $this->announcementSelection = new SimpleContent($announcementSelection);
        $this->announcementSelection->setElementName('announcementSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $announcementSelection
     */
    public function getAnnouncementSelection()
    {
        return ($this->announcementSelection)
            ? $this->announcementSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = new SimpleContent($audioFileDescription);
        $this->audioFileDescription->setElementName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileDescription
     */
    public function getAudioFileDescription()
    {
        return ($this->audioFileDescription)
            ? $this->audioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = new SimpleContent($videoFileDescription);
        $this->videoFileDescription->setElementName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileDescription
     */
    public function getVideoFileDescription()
    {
        return ($this->videoFileDescription)
            ? $this->videoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing = null)
    {
        $this->enableFirstMenuLevelExtensionDialing = new SimpleContent($enableFirstMenuLevelExtensionDialing);
        $this->enableFirstMenuLevelExtensionDialing->setElementName('enableFirstMenuLevelExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enableFirstMenuLevelExtensionDialing
     */
    public function getEnableFirstMenuLevelExtensionDialing()
    {
        return ($this->enableFirstMenuLevelExtensionDialing)
            ? $this->enableFirstMenuLevelExtensionDialing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setKeyConfiguration($keyConfiguration = null)
    {
        $this->keyConfiguration = new SimpleContent($keyConfiguration);
        $this->keyConfiguration->setElementName('keyConfiguration');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $keyConfiguration
     */
    public function getKeyConfiguration()
    {
        return ($this->keyConfiguration)
            ? $this->keyConfiguration->getElementValue()
            : null;
    }
}

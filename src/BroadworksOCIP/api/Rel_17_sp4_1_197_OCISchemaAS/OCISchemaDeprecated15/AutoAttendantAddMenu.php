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
class AutoAttendantAddMenu extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AutoAttendantAddMenu';
    protected $announcementSelection;
    protected $audioFile;
    protected $videoFile;
    protected $enableFirstMenuLevelExtensionDialing;
    protected $keyConfiguration;

    public function __construct(
         $announcementSelection = '',
         $audioFile = null,
         $videoFile = null,
         $enableFirstMenuLevelExtensionDialing = '',
         $keyConfiguration = null
    ) {
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
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
    public function setAudioFile($audioFile = null)
    {
        $this->audioFile = new SimpleContent($audioFile);
        $this->audioFile->setElementName('audioFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFile
     */
    public function getAudioFile()
    {
        return ($this->audioFile)
            ? $this->audioFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFile($videoFile = null)
    {
        $this->videoFile = new SimpleContent($videoFile);
        $this->videoFile->setElementName('videoFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFile
     */
    public function getVideoFile()
    {
        return ($this->videoFile)
            ? $this->videoFile->getElementValue()
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

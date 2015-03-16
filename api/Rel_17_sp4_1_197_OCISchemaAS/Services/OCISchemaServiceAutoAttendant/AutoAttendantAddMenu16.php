<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The configuration of the automated receptionist greeting
 *         prompt and dialing menu to be used during after business hours.
 */
class AutoAttendantAddMenu16 extends ComplexType implements ComplexInterface
{
    public    $name = 'AutoAttendantAddMenu16';
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
        $this->announcementSelection->setName('announcementSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $announcementSelection
     */
    public function getAnnouncementSelection()
    {
        return ($this->announcementSelection) ? $this->announcementSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFile($audioFile = null)
    {
        $this->audioFile = new SimpleContent($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFile
     */
    public function getAudioFile()
    {
        return ($this->audioFile) ? $this->audioFile->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFile($videoFile = null)
    {
        $this->videoFile = new SimpleContent($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFile
     */
    public function getVideoFile()
    {
        return ($this->videoFile) ? $this->videoFile->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing = null)
    {
        $this->enableFirstMenuLevelExtensionDialing = new SimpleContent($enableFirstMenuLevelExtensionDialing);
        $this->enableFirstMenuLevelExtensionDialing->setName('enableFirstMenuLevelExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enableFirstMenuLevelExtensionDialing
     */
    public function getEnableFirstMenuLevelExtensionDialing()
    {
        return ($this->enableFirstMenuLevelExtensionDialing) ? $this->enableFirstMenuLevelExtensionDialing->getValue() : null;
    }

    /**
     * 
     */
    public function setKeyConfiguration($keyConfiguration = null)
    {
        $this->keyConfiguration = new SimpleContent($keyConfiguration);
        $this->keyConfiguration->setName('keyConfiguration');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $keyConfiguration
     */
    public function getKeyConfiguration()
    {
        return ($this->keyConfiguration) ? $this->keyConfiguration->getValue() : null;
    }
}

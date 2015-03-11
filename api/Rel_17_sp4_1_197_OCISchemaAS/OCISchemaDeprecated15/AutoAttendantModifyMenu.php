<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\AutoAttendantModifyMenu;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The configuration of the automated receptionist greeting
 *         prompt and dialing menu to be used during business hours.
 *         It is used when modifying an Auto Attendant group.
 */
class AutoAttendantModifyMenu extends ComplexType implements ComplexInterface
{
    public    $responseType                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\AutoAttendantModifyMenu';
    public    $name                                 = 'AutoAttendantModifyMenu';
    protected $announcementSelection                = null;
    protected $audioFile                            = null;
    protected $videoFile                            = null;
    protected $enableFirstMenuLevelExtensionDialing = null;
    protected $keyConfiguration                     = null;

    public function __construct(
         $announcementSelection = null,
         $audioFile = null,
         $videoFile = null,
         $enableFirstMenuLevelExtensionDialing = null,
         $keyConfiguration = null
    ) {
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
        $this->setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing);
        $this->setKeyConfiguration($keyConfiguration);
    }

    /**
     * @return AutoAttendantModifyMenu
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
        if (!$announcementSelection) return $this;
        $this->announcementSelection = new SimpleContent($announcementSelection);
        $this->announcementSelection->setName('announcementSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFile($audioFile = null)
    {
        if (!$audioFile) return $this;
        $this->audioFile = new SimpleContent($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioFile()
    {
        return $this->audioFile->getValue();
    }

    /**
     * 
     */
    public function setVideoFile($videoFile = null)
    {
        if (!$videoFile) return $this;
        $this->videoFile = new SimpleContent($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoFile()
    {
        return $this->videoFile->getValue();
    }

    /**
     * 
     */
    public function setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing = null)
    {
        if (!$enableFirstMenuLevelExtensionDialing) return $this;
        $this->enableFirstMenuLevelExtensionDialing = new SimpleContent($enableFirstMenuLevelExtensionDialing);
        $this->enableFirstMenuLevelExtensionDialing->setName('enableFirstMenuLevelExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEnableFirstMenuLevelExtensionDialing()
    {
        return $this->enableFirstMenuLevelExtensionDialing->getValue();
    }

    /**
     * 
     */
    public function setKeyConfiguration($keyConfiguration = null)
    {
        if (!$keyConfiguration) return $this;
        $this->keyConfiguration = new SimpleContent($keyConfiguration);
        $this->keyConfiguration->setName('keyConfiguration');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration->getValue();
    }
}

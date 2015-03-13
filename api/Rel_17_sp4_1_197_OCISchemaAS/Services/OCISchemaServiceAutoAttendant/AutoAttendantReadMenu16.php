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
class AutoAttendantReadMenu16 extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'AutoAttendantReadMenu16';
    protected $announcementSelection                = null;
    protected $audioFileDescription                 = null;
    protected $audioMediaType                       = null;
    protected $videoFileDescription                 = null;
    protected $videoMediaType                       = null;
    protected $enableFirstMenuLevelExtensionDialing = null;
    protected $keyConfiguration                     = null;

    public function __construct(
         $announcementSelection,
         $audioFileDescription = null,
         $audioMediaType = null,
         $videoFileDescription = null,
         $videoMediaType = null,
         $enableFirstMenuLevelExtensionDialing,
         $keyConfiguration = null
    ) {
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFileDescription($audioFileDescription);
        $this->setAudioMediaType($audioMediaType);
        $this->setVideoFileDescription($videoFileDescription);
        $this->setVideoMediaType($videoMediaType);
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
        if (!$announcementSelection) return $this;
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
        return $this->announcementSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        if (!$audioFileDescription) return $this;
        $this->audioFileDescription = new SimpleContent($audioFileDescription);
        $this->audioFileDescription->setName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileDescription
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        if (!$audioMediaType) return $this;
        $this->audioMediaType = new SimpleContent($audioMediaType);
        $this->audioMediaType->setName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMediaType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType->getValue();
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        if (!$videoFileDescription) return $this;
        $this->videoFileDescription = new SimpleContent($videoFileDescription);
        $this->videoFileDescription->setName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileDescription
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        if (!$videoMediaType) return $this;
        $this->videoMediaType = new SimpleContent($videoMediaType);
        $this->videoMediaType->setName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMediaType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType->getValue();
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
     * @return SimpleContent $enableFirstMenuLevelExtensionDialing
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
     * @return SimpleContent $keyConfiguration
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration->getValue();
    }
}

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
    public    $name = 'AutoAttendantReadMenu16';
    protected $announcementSelection;
    protected $audioFileDescription;
    protected $audioMediaType;
    protected $videoFileDescription;
    protected $videoMediaType;
    protected $enableFirstMenuLevelExtensionDialing;
    protected $keyConfiguration;

    public function __construct(
         $announcementSelection = '',
         $audioFileDescription = null,
         $audioMediaType = null,
         $videoFileDescription = null,
         $videoMediaType = null,
         $enableFirstMenuLevelExtensionDialing = '',
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
    public function setAudioFileDescription($audioFileDescription = null)
    {
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
        return ($this->audioFileDescription) ? $this->audioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
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
        return ($this->audioMediaType) ? $this->audioMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
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
        return ($this->videoFileDescription) ? $this->videoFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
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
        return ($this->videoMediaType) ? $this->videoMediaType->getValue() : null;
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

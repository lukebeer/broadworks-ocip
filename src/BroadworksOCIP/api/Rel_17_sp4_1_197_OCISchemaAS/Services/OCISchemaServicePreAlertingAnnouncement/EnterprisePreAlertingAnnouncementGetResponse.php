<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterruptDigits;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterrupt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the Enterprise level pre-alerting service settings.
 *         The response is either a EnterprisePreAlertingAnnouncementGetResponse or an ErrorResponse.
 */
class EnterprisePreAlertingAnnouncementGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterprisePreAlertingAnnouncementGetResponse';
    protected $announcementInterruption;
    protected $interruptionDigitSequence;
    protected $audioSelection;
    protected $audioFileDescription;
    protected $audioMediaType;
    protected $audioFileUrl;
    protected $videoSelection;
    protected $videoFileDescription;
    protected $videoMediaType;
    protected $videoFileUrl;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\EnterprisePreAlertingAnnouncementGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnnouncementInterruption($announcementInterruption = null)
    {
        $this->announcementInterruption = ($announcementInterruption InstanceOf PreAlertingAnnouncementInterrupt)
             ? $announcementInterruption
             : new PreAlertingAnnouncementInterrupt($announcementInterruption);
        $this->announcementInterruption->setElementName('announcementInterruption');
        return $this;
    }

    /**
     * 
     * @return PreAlertingAnnouncementInterrupt $announcementInterruption
     */
    public function getAnnouncementInterruption()
    {
        return ($this->announcementInterruption)
            ? $this->announcementInterruption->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence = null)
    {
        $this->interruptionDigitSequence = ($interruptionDigitSequence InstanceOf PreAlertingAnnouncementInterruptDigits)
             ? $interruptionDigitSequence
             : new PreAlertingAnnouncementInterruptDigits($interruptionDigitSequence);
        $this->interruptionDigitSequence->setElementName('interruptionDigitSequence');
        return $this;
    }

    /**
     * 
     * @return PreAlertingAnnouncementInterruptDigits $interruptionDigitSequence
     */
    public function getInterruptionDigitSequence()
    {
        return ($this->interruptionDigitSequence)
            ? $this->interruptionDigitSequence->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
        $this->audioSelection->setElementName('audioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioSelection
     */
    public function getAudioSelection()
    {
        return ($this->audioSelection)
            ? $this->audioSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
        $this->audioFileDescription->setElementName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $audioFileDescription
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
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
        $this->audioMediaType->setElementName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $audioMediaType
     */
    public function getAudioMediaType()
    {
        return ($this->audioMediaType)
            ? $this->audioMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
        $this->audioFileUrl->setElementName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $audioFileUrl
     */
    public function getAudioFileUrl()
    {
        return ($this->audioFileUrl)
            ? $this->audioFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
        $this->videoSelection->setElementName('videoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoSelection
     */
    public function getVideoSelection()
    {
        return ($this->videoSelection)
            ? $this->videoSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
        $this->videoFileDescription->setElementName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $videoFileDescription
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
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
        $this->videoMediaType->setElementName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $videoMediaType
     */
    public function getVideoMediaType()
    {
        return ($this->videoMediaType)
            ? $this->videoMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
        $this->videoFileUrl->setElementName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $videoFileUrl
     */
    public function getVideoFileUrl()
    {
        return ($this->videoFileUrl)
            ? $this->videoFileUrl->getElementValue()
            : null;
    }
}

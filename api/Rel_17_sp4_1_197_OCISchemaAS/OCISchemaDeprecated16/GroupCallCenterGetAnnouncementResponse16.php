<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest16.
 */
class GroupCallCenterGetAnnouncementResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetAnnouncementResponse16';
    protected $playEntranceMessage;
    protected $mandatoryEntranceMessage;
    protected $entranceAudioMessageSelection;
    protected $entranceAudioFileUrl;
    protected $entranceMessageAudioFileDescription;
    protected $entranceAudioFileMediaType;
    protected $entranceVideoMessageSelection;
    protected $entranceVideoFileUrl;
    protected $entranceMessageVideoFileDescription;
    protected $entranceVideoFileMediaType;
    protected $playPeriodicComfortMessage;
    protected $timeBetweenComfortMessagesSeconds;
    protected $periodicComfortAudioMessageSelection;
    protected $periodicComfortAudioFileUrl;
    protected $periodicComfortMessageAudioFileDescription;
    protected $periodicComfortAudioFileMediaType;
    protected $periodicComfortVideoMessageSelection;
    protected $periodicComfortVideoFileUrl;
    protected $periodicComfortMessageVideoFileDescription;
    protected $periodicComfortVideoFileMediaType;
    protected $enableMediaOnHoldForQueuedCalls;
    protected $mediaOnHoldSource;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls;
    protected $mediaOnHoldInternalSource;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterGetAnnouncementResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlayEntranceMessage($playEntranceMessage = null)
    {
        $this->playEntranceMessage = new PrimitiveType($playEntranceMessage);
        $this->playEntranceMessage->setElementName('playEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playEntranceMessage
     */
    public function getPlayEntranceMessage()
    {
        return ($this->playEntranceMessage)
            ? $this->playEntranceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        $this->mandatoryEntranceMessage = new PrimitiveType($mandatoryEntranceMessage);
        $this->mandatoryEntranceMessage->setElementName('mandatoryEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $mandatoryEntranceMessage
     */
    public function getMandatoryEntranceMessage()
    {
        return ($this->mandatoryEntranceMessage)
            ? $this->mandatoryEntranceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceAudioMessageSelection->setElementName('entranceAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $entranceAudioMessageSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return ($this->entranceAudioMessageSelection)
            ? $this->entranceAudioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceAudioFileUrl($entranceAudioFileUrl = null)
    {
        $this->entranceAudioFileUrl = ($entranceAudioFileUrl InstanceOf URL)
             ? $entranceAudioFileUrl
             : new URL($entranceAudioFileUrl);
        $this->entranceAudioFileUrl->setElementName('entranceAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $entranceAudioFileUrl
     */
    public function getEntranceAudioFileUrl()
    {
        return ($this->entranceAudioFileUrl)
            ? $this->entranceAudioFileUrl->getElementValue()
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
    public function setEntranceAudioFileMediaType($entranceAudioFileMediaType = null)
    {
        $this->entranceAudioFileMediaType = ($entranceAudioFileMediaType InstanceOf MediaFileType)
             ? $entranceAudioFileMediaType
             : new MediaFileType($entranceAudioFileMediaType);
        $this->entranceAudioFileMediaType->setElementName('entranceAudioFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $entranceAudioFileMediaType
     */
    public function getEntranceAudioFileMediaType()
    {
        return ($this->entranceAudioFileMediaType)
            ? $this->entranceAudioFileMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceVideoMessageSelection->setElementName('entranceVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $entranceVideoMessageSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return ($this->entranceVideoMessageSelection)
            ? $this->entranceVideoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceVideoFileUrl($entranceVideoFileUrl = null)
    {
        $this->entranceVideoFileUrl = ($entranceVideoFileUrl InstanceOf URL)
             ? $entranceVideoFileUrl
             : new URL($entranceVideoFileUrl);
        $this->entranceVideoFileUrl->setElementName('entranceVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $entranceVideoFileUrl
     */
    public function getEntranceVideoFileUrl()
    {
        return ($this->entranceVideoFileUrl)
            ? $this->entranceVideoFileUrl->getElementValue()
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
    public function setEntranceVideoFileMediaType($entranceVideoFileMediaType = null)
    {
        $this->entranceVideoFileMediaType = ($entranceVideoFileMediaType InstanceOf MediaFileType)
             ? $entranceVideoFileMediaType
             : new MediaFileType($entranceVideoFileMediaType);
        $this->entranceVideoFileMediaType->setElementName('entranceVideoFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $entranceVideoFileMediaType
     */
    public function getEntranceVideoFileMediaType()
    {
        return ($this->entranceVideoFileMediaType)
            ? $this->entranceVideoFileMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        $this->playPeriodicComfortMessage = new PrimitiveType($playPeriodicComfortMessage);
        $this->playPeriodicComfortMessage->setElementName('playPeriodicComfortMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playPeriodicComfortMessage
     */
    public function getPlayPeriodicComfortMessage()
    {
        return ($this->playPeriodicComfortMessage)
            ? $this->playPeriodicComfortMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setElementName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds $timeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return ($this->timeBetweenComfortMessagesSeconds)
            ? $this->timeBetweenComfortMessagesSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortAudioMessageSelection->setElementName('periodicComfortAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $periodicComfortAudioMessageSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return ($this->periodicComfortAudioMessageSelection)
            ? $this->periodicComfortAudioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl = null)
    {
        $this->periodicComfortAudioFileUrl = ($periodicComfortAudioFileUrl InstanceOf URL)
             ? $periodicComfortAudioFileUrl
             : new URL($periodicComfortAudioFileUrl);
        $this->periodicComfortAudioFileUrl->setElementName('periodicComfortAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $periodicComfortAudioFileUrl
     */
    public function getPeriodicComfortAudioFileUrl()
    {
        return ($this->periodicComfortAudioFileUrl)
            ? $this->periodicComfortAudioFileUrl->getElementValue()
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
    public function setPeriodicComfortAudioFileMediaType($periodicComfortAudioFileMediaType = null)
    {
        $this->periodicComfortAudioFileMediaType = ($periodicComfortAudioFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortAudioFileMediaType
             : new MediaFileType($periodicComfortAudioFileMediaType);
        $this->periodicComfortAudioFileMediaType->setElementName('periodicComfortAudioFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $periodicComfortAudioFileMediaType
     */
    public function getPeriodicComfortAudioFileMediaType()
    {
        return ($this->periodicComfortAudioFileMediaType)
            ? $this->periodicComfortAudioFileMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortVideoMessageSelection->setElementName('periodicComfortVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $periodicComfortVideoMessageSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return ($this->periodicComfortVideoMessageSelection)
            ? $this->periodicComfortVideoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl = null)
    {
        $this->periodicComfortVideoFileUrl = ($periodicComfortVideoFileUrl InstanceOf URL)
             ? $periodicComfortVideoFileUrl
             : new URL($periodicComfortVideoFileUrl);
        $this->periodicComfortVideoFileUrl->setElementName('periodicComfortVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $periodicComfortVideoFileUrl
     */
    public function getPeriodicComfortVideoFileUrl()
    {
        return ($this->periodicComfortVideoFileUrl)
            ? $this->periodicComfortVideoFileUrl->getElementValue()
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
    public function setPeriodicComfortVideoFileMediaType($periodicComfortVideoFileMediaType = null)
    {
        $this->periodicComfortVideoFileMediaType = ($periodicComfortVideoFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortVideoFileMediaType
             : new MediaFileType($periodicComfortVideoFileMediaType);
        $this->periodicComfortVideoFileMediaType->setElementName('periodicComfortVideoFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $periodicComfortVideoFileMediaType
     */
    public function getPeriodicComfortVideoFileMediaType()
    {
        return ($this->periodicComfortVideoFileMediaType)
            ? $this->periodicComfortVideoFileMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        $this->enableMediaOnHoldForQueuedCalls = new PrimitiveType($enableMediaOnHoldForQueuedCalls);
        $this->enableMediaOnHoldForQueuedCalls->setElementName('enableMediaOnHoldForQueuedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMediaOnHoldForQueuedCalls
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return ($this->enableMediaOnHoldForQueuedCalls)
            ? $this->enableMediaOnHoldForQueuedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceRead16)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceRead16($mediaOnHoldSource);
        $this->mediaOnHoldSource->setElementName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * 
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = new PrimitiveType($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->mediaOnHoldUseAlternateSourceForInternalCalls->setElementName('mediaOnHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $mediaOnHoldUseAlternateSourceForInternalCalls
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return ($this->mediaOnHoldUseAlternateSourceForInternalCalls)
            ? $this->mediaOnHoldUseAlternateSourceForInternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource = ($mediaOnHoldInternalSource InstanceOf CallCenterMediaOnHoldSourceRead16)
             ? $mediaOnHoldInternalSource
             : new CallCenterMediaOnHoldSourceRead16($mediaOnHoldInternalSource);
        $this->mediaOnHoldInternalSource->setElementName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }
}

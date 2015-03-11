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
    public    $name                                          = 'GroupCallCenterGetAnnouncementResponse16';
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceAudioFileUrl                          = null;
    protected $entranceMessageAudioFileDescription           = null;
    protected $entranceAudioFileMediaType                    = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceVideoFileUrl                          = null;
    protected $entranceMessageVideoFileDescription           = null;
    protected $entranceVideoFileMediaType                    = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortAudioFileUrl                   = null;
    protected $periodicComfortMessageAudioFileDescription    = null;
    protected $periodicComfortAudioFileMediaType             = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortVideoFileUrl                   = null;
    protected $periodicComfortMessageVideoFileDescription    = null;
    protected $periodicComfortVideoFileMediaType             = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;

    /**
     * @return GroupCallCenterGetAnnouncementResponse16
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
        if (!$playEntranceMessage) return $this;
        $this->playEntranceMessage = new PrimitiveType($playEntranceMessage);
        $this->playEntranceMessage->setName('playEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayEntranceMessage()
    {
        return $this->playEntranceMessage->getValue();
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        if (!$mandatoryEntranceMessage) return $this;
        $this->mandatoryEntranceMessage = new PrimitiveType($mandatoryEntranceMessage);
        $this->mandatoryEntranceMessage->setName('mandatoryEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMandatoryEntranceMessage()
    {
        return $this->mandatoryEntranceMessage->getValue();
    }

    /**
     * 
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        if (!$entranceAudioMessageSelection) return $this;
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceAudioMessageSelection->setName('entranceAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setEntranceAudioFileUrl($entranceAudioFileUrl = null)
    {
        if (!$entranceAudioFileUrl) return $this;
        $this->entranceAudioFileUrl = ($entranceAudioFileUrl InstanceOf URL)
             ? $entranceAudioFileUrl
             : new URL($entranceAudioFileUrl);
        $this->entranceAudioFileUrl->setName('entranceAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getEntranceAudioFileUrl()
    {
        return $this->entranceAudioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        if (!$entranceMessageAudioFileDescription) return $this;
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceMessageAudioFileDescription->setName('entranceMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return $this->entranceMessageAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setEntranceAudioFileMediaType($entranceAudioFileMediaType = null)
    {
        if (!$entranceAudioFileMediaType) return $this;
        $this->entranceAudioFileMediaType = ($entranceAudioFileMediaType InstanceOf MediaFileType)
             ? $entranceAudioFileMediaType
             : new MediaFileType($entranceAudioFileMediaType);
        $this->entranceAudioFileMediaType->setName('entranceAudioFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getEntranceAudioFileMediaType()
    {
        return $this->entranceAudioFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        if (!$entranceVideoMessageSelection) return $this;
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceVideoMessageSelection->setName('entranceVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setEntranceVideoFileUrl($entranceVideoFileUrl = null)
    {
        if (!$entranceVideoFileUrl) return $this;
        $this->entranceVideoFileUrl = ($entranceVideoFileUrl InstanceOf URL)
             ? $entranceVideoFileUrl
             : new URL($entranceVideoFileUrl);
        $this->entranceVideoFileUrl->setName('entranceVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getEntranceVideoFileUrl()
    {
        return $this->entranceVideoFileUrl->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        if (!$entranceMessageVideoFileDescription) return $this;
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
        $this->entranceMessageVideoFileDescription->setName('entranceMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return $this->entranceMessageVideoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setEntranceVideoFileMediaType($entranceVideoFileMediaType = null)
    {
        if (!$entranceVideoFileMediaType) return $this;
        $this->entranceVideoFileMediaType = ($entranceVideoFileMediaType InstanceOf MediaFileType)
             ? $entranceVideoFileMediaType
             : new MediaFileType($entranceVideoFileMediaType);
        $this->entranceVideoFileMediaType->setName('entranceVideoFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getEntranceVideoFileMediaType()
    {
        return $this->entranceVideoFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        if (!$playPeriodicComfortMessage) return $this;
        $this->playPeriodicComfortMessage = new PrimitiveType($playPeriodicComfortMessage);
        $this->playPeriodicComfortMessage->setName('playPeriodicComfortMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayPeriodicComfortMessage()
    {
        return $this->playPeriodicComfortMessage->getValue();
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        if (!$timeBetweenComfortMessagesSeconds) return $this;
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        if (!$periodicComfortAudioMessageSelection) return $this;
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortAudioMessageSelection->setName('periodicComfortAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl = null)
    {
        if (!$periodicComfortAudioFileUrl) return $this;
        $this->periodicComfortAudioFileUrl = ($periodicComfortAudioFileUrl InstanceOf URL)
             ? $periodicComfortAudioFileUrl
             : new URL($periodicComfortAudioFileUrl);
        $this->periodicComfortAudioFileUrl->setName('periodicComfortAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getPeriodicComfortAudioFileUrl()
    {
        return $this->periodicComfortAudioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        if (!$periodicComfortMessageAudioFileDescription) return $this;
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortMessageAudioFileDescription->setName('periodicComfortMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return $this->periodicComfortMessageAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioFileMediaType($periodicComfortAudioFileMediaType = null)
    {
        if (!$periodicComfortAudioFileMediaType) return $this;
        $this->periodicComfortAudioFileMediaType = ($periodicComfortAudioFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortAudioFileMediaType
             : new MediaFileType($periodicComfortAudioFileMediaType);
        $this->periodicComfortAudioFileMediaType->setName('periodicComfortAudioFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getPeriodicComfortAudioFileMediaType()
    {
        return $this->periodicComfortAudioFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        if (!$periodicComfortVideoMessageSelection) return $this;
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortVideoMessageSelection->setName('periodicComfortVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl = null)
    {
        if (!$periodicComfortVideoFileUrl) return $this;
        $this->periodicComfortVideoFileUrl = ($periodicComfortVideoFileUrl InstanceOf URL)
             ? $periodicComfortVideoFileUrl
             : new URL($periodicComfortVideoFileUrl);
        $this->periodicComfortVideoFileUrl->setName('periodicComfortVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getPeriodicComfortVideoFileUrl()
    {
        return $this->periodicComfortVideoFileUrl->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        if (!$periodicComfortMessageVideoFileDescription) return $this;
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->periodicComfortMessageVideoFileDescription->setName('periodicComfortMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return $this->periodicComfortMessageVideoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoFileMediaType($periodicComfortVideoFileMediaType = null)
    {
        if (!$periodicComfortVideoFileMediaType) return $this;
        $this->periodicComfortVideoFileMediaType = ($periodicComfortVideoFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortVideoFileMediaType
             : new MediaFileType($periodicComfortVideoFileMediaType);
        $this->periodicComfortVideoFileMediaType->setName('periodicComfortVideoFileMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getPeriodicComfortVideoFileMediaType()
    {
        return $this->periodicComfortVideoFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        if (!$enableMediaOnHoldForQueuedCalls) return $this;
        $this->enableMediaOnHoldForQueuedCalls = new PrimitiveType($enableMediaOnHoldForQueuedCalls);
        $this->enableMediaOnHoldForQueuedCalls->setName('enableMediaOnHoldForQueuedCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return $this->enableMediaOnHoldForQueuedCalls->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource = null)
    {
        if (!$mediaOnHoldSource) return $this;
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead16
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
        if (!$mediaOnHoldUseAlternateSourceForInternalCalls) return $this;
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = new PrimitiveType($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->mediaOnHoldUseAlternateSourceForInternalCalls->setName('mediaOnHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->mediaOnHoldUseAlternateSourceForInternalCalls->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource = null)
    {
        if (!$mediaOnHoldInternalSource) return $this;
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        $this->mediaOnHoldInternalSource->setName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead16
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }
}

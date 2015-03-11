<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                                          = 'GroupCallCenterModifyAnnouncementRequest16';
    protected $serviceUserId                                 = null;
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceMessageAudioFile                      = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceMessageVideoFile                      = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortMessageAudioFile               = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortMessageVideoFile               = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;

    public function __construct(
         $serviceUserId,
         $playEntranceMessage = null,
         $mandatoryEntranceMessage = null,
         $entranceAudioMessageSelection = null,
         ExtendedMediaFileResource $entranceMessageAudioFile = null,
         $entranceVideoMessageSelection = null,
         ExtendedMediaFileResource $entranceMessageVideoFile = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
         ExtendedMediaFileResource $periodicComfortMessageAudioFile = null,
         $periodicComfortVideoMessageSelection = null,
         ExtendedMediaFileResource $periodicComfortMessageVideoFile = null,
         $enableMediaOnHoldForQueuedCalls = null,
         CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
         CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setPlayEntranceMessage($playEntranceMessage);
        $this->setMandatoryEntranceMessage($mandatoryEntranceMessage);
        $this->setEntranceAudioMessageSelection($entranceAudioMessageSelection);
        $this->setEntranceMessageAudioFile($entranceMessageAudioFile);
        $this->setEntranceVideoMessageSelection($entranceVideoMessageSelection);
        $this->setEntranceMessageVideoFile($entranceMessageVideoFile);
        $this->setPlayPeriodicComfortMessage($playPeriodicComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection);
        $this->setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile);
        $this->setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection);
        $this->setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile);
        $this->setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
        $this->setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->setMediaOnHoldInternalSource($mediaOnHoldInternalSource);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
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
    public function setEntranceMessageAudioFile(ExtendedMediaFileResource $entranceMessageAudioFile = null)
    {
        if (!$entranceMessageAudioFile) return $this;
        $this->entranceMessageAudioFile = $entranceMessageAudioFile;
        $this->entranceMessageAudioFile->setName('entranceMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile;
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
    public function setEntranceMessageVideoFile(ExtendedMediaFileResource $entranceMessageVideoFile = null)
    {
        if (!$entranceMessageVideoFile) return $this;
        $this->entranceMessageVideoFile = $entranceMessageVideoFile;
        $this->entranceMessageVideoFile->setName('entranceMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile;
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
    public function setPeriodicComfortMessageAudioFile(ExtendedMediaFileResource $periodicComfortMessageAudioFile = null)
    {
        if (!$periodicComfortMessageAudioFile) return $this;
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
        $this->periodicComfortMessageAudioFile->setName('periodicComfortMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile;
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
    public function setPeriodicComfortMessageVideoFile(ExtendedMediaFileResource $periodicComfortMessageVideoFile = null)
    {
        if (!$periodicComfortMessageVideoFile) return $this;
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
        $this->periodicComfortMessageVideoFile->setName('periodicComfortMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile;
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
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource = null)
    {
        if (!$mediaOnHoldSource) return $this;
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify16
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
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource = null)
    {
        if (!$mediaOnHoldInternalSource) return $this;
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        $this->mediaOnHoldInternalSource->setName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify16
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }
}

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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterModifyAnnouncementResponse16;
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
    public    $name                                          = __CLASS__;
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
          $entranceMessageAudioFile = null,
         $entranceVideoMessageSelection = null,
          $entranceMessageVideoFile = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
          $periodicComfortMessageAudioFile = null,
         $periodicComfortVideoMessageSelection = null,
          $periodicComfortMessageVideoFile = null,
         $enableMediaOnHoldForQueuedCalls = null,
          $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
          $mediaOnHoldInternalSource = null
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
     * @return GroupCallCenterModifyAnnouncementResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setPlayEntranceMessage($playEntranceMessage = null)
    {
        $this->playEntranceMessage = (boolean) $playEntranceMessage;
    }

    /**
     * 
     */
    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage;
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        $this->mandatoryEntranceMessage = (boolean) $mandatoryEntranceMessage;
    }

    /**
     * 
     */
    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage;
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setEntranceMessageAudioFile(ExtendedMediaFileResource $entranceMessageAudioFile = null)
    {
        $this->entranceMessageAudioFile =  $entranceMessageAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getEntranceMessageAudioFile()
    {
        return (!$this->entranceMessageAudioFile) ?: $this->entranceMessageAudioFile->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setEntranceMessageVideoFile(ExtendedMediaFileResource $entranceMessageVideoFile = null)
    {
        $this->entranceMessageVideoFile =  $entranceMessageVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getEntranceMessageVideoFile()
    {
        return (!$this->entranceMessageVideoFile) ?: $this->entranceMessageVideoFile->getValue();
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        $this->playPeriodicComfortMessage = (boolean) $playPeriodicComfortMessage;
    }

    /**
     * 
     */
    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage;
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setPeriodicComfortMessageAudioFile(ExtendedMediaFileResource $periodicComfortMessageAudioFile = null)
    {
        $this->periodicComfortMessageAudioFile =  $periodicComfortMessageAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return (!$this->periodicComfortMessageAudioFile) ?: $this->periodicComfortMessageAudioFile->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setPeriodicComfortMessageVideoFile(ExtendedMediaFileResource $periodicComfortMessageVideoFile = null)
    {
        $this->periodicComfortMessageVideoFile =  $periodicComfortMessageVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return (!$this->periodicComfortMessageVideoFile) ?: $this->periodicComfortMessageVideoFile->getValue();
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        $this->enableMediaOnHoldForQueuedCalls = (boolean) $enableMediaOnHoldForQueuedCalls;
    }

    /**
     * 
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource =  $mediaOnHoldSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = (boolean) $mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * 
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource =  $mediaOnHoldInternalSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterOverflowProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's overflow settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterOverflowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = 'GroupCallCenterOverflowModifyRequest';
    protected $serviceUserId                            = null;
    protected $action                                   = null;
    protected $transferPhoneNumber                      = null;
    protected $overflowAfterTimeout                     = null;
    protected $timeoutSeconds                           = null;
    protected $playAnnouncementBeforeOverflowProcessing = null;
    protected $audioMessageSelection                    = null;
    protected $audioFile                                = null;
    protected $videoMessageSelection                    = null;
    protected $videoFile                                = null;

    public function __construct(
         $serviceUserId,
         $action = null,
         $transferPhoneNumber = null,
         $overflowAfterTimeout = null,
         $timeoutSeconds = null,
         $playAnnouncementBeforeOverflowProcessing = null,
         $audioMessageSelection = null,
         ExtendedMediaFileResource $audioFile = null,
         $videoMessageSelection = null,
         ExtendedMediaFileResource $videoFile = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAction($action);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setOverflowAfterTimeout($overflowAfterTimeout);
        $this->setTimeoutSeconds($timeoutSeconds);
        $this->setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoFile($videoFile);
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
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        if (!$action) return $this;
        $this->action = ($action InstanceOf CallCenterOverflowProcessingAction)
             ? $action
             : new CallCenterOverflowProcessingAction($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterOverflowProcessingAction $action
     */
    public function getAction()
    {
        return $this->action->getValue();
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if (!$transferPhoneNumber) return $this;
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setOverflowAfterTimeout($overflowAfterTimeout = null)
    {
        if (!$overflowAfterTimeout) return $this;
        $this->overflowAfterTimeout = new PrimitiveType($overflowAfterTimeout);
        $this->overflowAfterTimeout->setName('overflowAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $overflowAfterTimeout
     */
    public function getOverflowAfterTimeout()
    {
        return $this->overflowAfterTimeout->getValue();
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        if (!$timeoutSeconds) return $this;
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $timeoutSeconds
             : new HuntForwardTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing = null)
    {
        if (!$playAnnouncementBeforeOverflowProcessing) return $this;
        $this->playAnnouncementBeforeOverflowProcessing = new PrimitiveType($playAnnouncementBeforeOverflowProcessing);
        $this->playAnnouncementBeforeOverflowProcessing->setName('playAnnouncementBeforeOverflowProcessing');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeOverflowProcessing
     */
    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return $this->playAnnouncementBeforeOverflowProcessing->getValue();
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        if (!$audioMessageSelection) return $this;
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        if (!$audioFile) return $this;
        $this->audioFile = $audioFile;
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        if (!$videoMessageSelection) return $this;
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        if (!$videoFile) return $this;
        $this->videoFile = $videoFile;
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }
}

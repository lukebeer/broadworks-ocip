<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterOverflowProcessingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a call center's overflow settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterOverflowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterOverflowModifyRequest';
    protected $serviceUserId;
    protected $action;
    protected $transferPhoneNumber;
    protected $overflowAfterTimeout;
    protected $timeoutSeconds;
    protected $playAnnouncementBeforeOverflowProcessing;
    protected $audioMessageSelection;
    protected $audioFile;
    protected $videoMessageSelection;
    protected $videoFile;

    public function __construct(
         $serviceUserId = '',
         $action = null,
         $transferPhoneNumber = null,
         $overflowAfterTimeout = null,
         $timeoutSeconds = null,
         $playAnnouncementBeforeOverflowProcessing = null,
         $audioMessageSelection = null,
         $audioFile = null,
         $videoMessageSelection = null,
         $videoFile = null
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
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterOverflowProcessingAction)
             ? $action
             : new CallCenterOverflowProcessingAction($action);
        $this->action->setElementName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterOverflowProcessingAction $action
     */
    public function getAction()
    {
        return ($this->action)
            ? $this->action->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setElementName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber)
            ? $this->transferPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOverflowAfterTimeout($overflowAfterTimeout = null)
    {
        $this->overflowAfterTimeout = new PrimitiveType($overflowAfterTimeout);
        $this->overflowAfterTimeout->setElementName('overflowAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $overflowAfterTimeout
     */
    public function getOverflowAfterTimeout()
    {
        return ($this->overflowAfterTimeout)
            ? $this->overflowAfterTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $timeoutSeconds
             : new HuntForwardTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setElementName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return ($this->timeoutSeconds)
            ? $this->timeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing = null)
    {
        $this->playAnnouncementBeforeOverflowProcessing = new PrimitiveType($playAnnouncementBeforeOverflowProcessing);
        $this->playAnnouncementBeforeOverflowProcessing->setElementName('playAnnouncementBeforeOverflowProcessing');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeOverflowProcessing
     */
    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return ($this->playAnnouncementBeforeOverflowProcessing)
            ? $this->playAnnouncementBeforeOverflowProcessing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setElementName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return ($this->audioMessageSelection)
            ? $this->audioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf ExtendedMediaFileResource)
             ? $audioFile
             : new ExtendedMediaFileResource($audioFile);
        $this->audioFile->setElementName('audioFile');
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
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setElementName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return ($this->videoMessageSelection)
            ? $this->videoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf ExtendedMediaFileResource)
             ? $videoFile
             : new ExtendedMediaFileResource($videoFile);
        $this->videoFile->setElementName('videoFile');
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

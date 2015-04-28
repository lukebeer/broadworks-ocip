<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a call center's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterNightServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterNightServiceModifyRequest';
    protected $serviceUserId;
    protected $action;
    protected $businessHours;
    protected $forceNightService;
    protected $allowManualOverrideViaFAC;
    protected $transferPhoneNumber;
    protected $playAnnouncementBeforeAction;
    protected $audioMessageSelection;
    protected $audioFile;
    protected $videoMessageSelection;
    protected $videoFile;
    protected $manualAnnouncementMode;
    protected $manualAudioMessageSelection;
    protected $manualAudioFile;
    protected $manualVideoMessageSelection;
    protected $manualVideoFile;

    public function __construct(
         $serviceUserId = '',
         $action = null,
         $businessHours = null,
         $forceNightService = null,
         $allowManualOverrideViaFAC = null,
         $transferPhoneNumber = null,
         $playAnnouncementBeforeAction = null,
         $audioMessageSelection = null,
         $audioFile = null,
         $videoMessageSelection = null,
         $videoFile = null,
         $manualAnnouncementMode = null,
         $manualAudioMessageSelection = null,
         $manualAudioFile = null,
         $manualVideoMessageSelection = null,
         $manualVideoFile = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAction($action);
        $this->setBusinessHours($businessHours);
        $this->setForceNightService($forceNightService);
        $this->setAllowManualOverrideViaFAC($allowManualOverrideViaFAC);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoFile($videoFile);
        $this->setManualAnnouncementMode($manualAnnouncementMode);
        $this->setManualAudioMessageSelection($manualAudioMessageSelection);
        $this->setManualAudioFile($manualAudioFile);
        $this->setManualVideoMessageSelection($manualVideoMessageSelection);
        $this->setManualVideoFile($manualVideoFile);
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
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
        $this->action->setElementName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledServiceAction $action
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
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setElementName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return ($this->businessHours)
            ? $this->businessHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceNightService($forceNightService = null)
    {
        $this->forceNightService = new PrimitiveType($forceNightService);
        $this->forceNightService->setElementName('forceNightService');
        return $this;
    }

    /**
     * 
     * @return boolean $forceNightService
     */
    public function getForceNightService()
    {
        return ($this->forceNightService)
            ? $this->forceNightService->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        $this->allowManualOverrideViaFAC = new PrimitiveType($allowManualOverrideViaFAC);
        $this->allowManualOverrideViaFAC->setElementName('allowManualOverrideViaFAC');
        return $this;
    }

    /**
     * 
     * @return boolean $allowManualOverrideViaFAC
     */
    public function getAllowManualOverrideViaFAC()
    {
        return ($this->allowManualOverrideViaFAC)
            ? $this->allowManualOverrideViaFAC->getElementValue()
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
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction = null)
    {
        $this->playAnnouncementBeforeAction = new PrimitiveType($playAnnouncementBeforeAction);
        $this->playAnnouncementBeforeAction->setElementName('playAnnouncementBeforeAction');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeAction
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return ($this->playAnnouncementBeforeAction)
            ? $this->playAnnouncementBeforeAction->getElementValue()
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

    /**
     * 
     */
    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAnnouncementMode->setElementName('manualAnnouncementMode');
        return $this;
    }

    /**
     * 
     * @return CallCenterManualNightServiceAnnouncementMode $manualAnnouncementMode
     */
    public function getManualAnnouncementMode()
    {
        return ($this->manualAnnouncementMode)
            ? $this->manualAnnouncementMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioMessageSelection->setElementName('manualAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $manualAudioMessageSelection
     */
    public function getManualAudioMessageSelection()
    {
        return ($this->manualAudioMessageSelection)
            ? $this->manualAudioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualAudioFile(ExtendedMediaFileResource $manualAudioFile = null)
    {
        $this->manualAudioFile = ($manualAudioFile InstanceOf ExtendedMediaFileResource)
             ? $manualAudioFile
             : new ExtendedMediaFileResource($manualAudioFile);
        $this->manualAudioFile->setElementName('manualAudioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $manualAudioFile
     */
    public function getManualAudioFile()
    {
        return $this->manualAudioFile;
    }

    /**
     * 
     */
    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoMessageSelection->setElementName('manualVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $manualVideoMessageSelection
     */
    public function getManualVideoMessageSelection()
    {
        return ($this->manualVideoMessageSelection)
            ? $this->manualVideoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualVideoFile(ExtendedMediaFileResource $manualVideoFile = null)
    {
        $this->manualVideoFile = ($manualVideoFile InstanceOf ExtendedMediaFileResource)
             ? $manualVideoFile
             : new ExtendedMediaFileResource($manualVideoFile);
        $this->manualVideoFile->setElementName('manualVideoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $manualVideoFile
     */
    public function getManualVideoFile()
    {
        return $this->manualVideoFile;
    }
}

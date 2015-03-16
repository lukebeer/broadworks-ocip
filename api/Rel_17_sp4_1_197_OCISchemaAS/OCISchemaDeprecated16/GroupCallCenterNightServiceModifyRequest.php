<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterNightServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterNightServiceModifyRequest';
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
         ExtendedMediaFileResource $audioFile = null,
         $videoMessageSelection = null,
         ExtendedMediaFileResource $videoFile = null,
         $manualAnnouncementMode = null,
         $manualAudioMessageSelection = null,
         ExtendedMediaFileResource $manualAudioFile = null,
         $manualVideoMessageSelection = null,
         ExtendedMediaFileResource $manualVideoFile = null
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
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledServiceAction $action
     */
    public function getAction()
    {
        return ($this->action) ? $this->action->getValue() : null;
    }

    /**
     * 
     */
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return ($this->businessHours) ? $this->businessHours->getValue() : null;
    }

    /**
     * 
     */
    public function setForceNightService($forceNightService = null)
    {
        $this->forceNightService = new PrimitiveType($forceNightService);
        $this->forceNightService->setName('forceNightService');
        return $this;
    }

    /**
     * 
     * @return boolean $forceNightService
     */
    public function getForceNightService()
    {
        return ($this->forceNightService) ? $this->forceNightService->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        $this->allowManualOverrideViaFAC = new PrimitiveType($allowManualOverrideViaFAC);
        $this->allowManualOverrideViaFAC->setName('allowManualOverrideViaFAC');
        return $this;
    }

    /**
     * 
     * @return boolean $allowManualOverrideViaFAC
     */
    public function getAllowManualOverrideViaFAC()
    {
        return ($this->allowManualOverrideViaFAC) ? $this->allowManualOverrideViaFAC->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
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
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction = null)
    {
        $this->playAnnouncementBeforeAction = new PrimitiveType($playAnnouncementBeforeAction);
        $this->playAnnouncementBeforeAction->setName('playAnnouncementBeforeAction');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeAction
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return ($this->playAnnouncementBeforeAction) ? $this->playAnnouncementBeforeAction->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
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
        return ($this->audioMessageSelection) ? $this->audioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf ExtendedMediaFileResource)
             ? $audioFile
             : new ExtendedMediaFileResource($audioFile);
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
        return ($this->videoMessageSelection) ? $this->videoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf ExtendedMediaFileResource)
             ? $videoFile
             : new ExtendedMediaFileResource($videoFile);
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

    /**
     * 
     */
    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAnnouncementMode->setName('manualAnnouncementMode');
        return $this;
    }

    /**
     * 
     * @return CallCenterManualNightServiceAnnouncementMode $manualAnnouncementMode
     */
    public function getManualAnnouncementMode()
    {
        return ($this->manualAnnouncementMode) ? $this->manualAnnouncementMode->getValue() : null;
    }

    /**
     * 
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioMessageSelection->setName('manualAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $manualAudioMessageSelection
     */
    public function getManualAudioMessageSelection()
    {
        return ($this->manualAudioMessageSelection) ? $this->manualAudioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setManualAudioFile(ExtendedMediaFileResource $manualAudioFile = null)
    {
        $this->manualAudioFile = ($manualAudioFile InstanceOf ExtendedMediaFileResource)
             ? $manualAudioFile
             : new ExtendedMediaFileResource($manualAudioFile);
        $this->manualAudioFile->setName('manualAudioFile');
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
        $this->manualVideoMessageSelection->setName('manualVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $manualVideoMessageSelection
     */
    public function getManualVideoMessageSelection()
    {
        return ($this->manualVideoMessageSelection) ? $this->manualVideoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setManualVideoFile(ExtendedMediaFileResource $manualVideoFile = null)
    {
        $this->manualVideoFile = ($manualVideoFile InstanceOf ExtendedMediaFileResource)
             ? $manualVideoFile
             : new ExtendedMediaFileResource($manualVideoFile);
        $this->manualVideoFile->setName('manualVideoFile');
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

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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterNightServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceUserId                 = null;
    protected $action                        = null;
    protected $businessHours                 = null;
    protected $forceNightService             = null;
    protected $allowManualOverrideViaFAC     = null;
    protected $transferPhoneNumber           = null;
    protected $playAnnouncementBeforeAction  = null;
    protected $audioMessageSelection         = null;
    protected $audioFile                     = null;
    protected $videoMessageSelection         = null;
    protected $videoFile                     = null;
    protected $manualAnnouncementMode        = null;
    protected $manualAudioMessageSelection   = null;
    protected $manualAudioFile               = null;
    protected $manualVideoMessageSelection   = null;
    protected $manualVideoFile               = null;

    public function __construct(
         $serviceUserId,
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

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
    }

    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->value();
    }

    public function setForceNightService(xs:boolean $forceNightService = null)
    {
    }

    public function getForceNightService()
    {
        return (!$this->forceNightService) ?: $this->forceNightService->value();
    }

    public function setAllowManualOverrideViaFAC(xs:boolean $allowManualOverrideViaFAC = null)
    {
    }

    public function getAllowManualOverrideViaFAC()
    {
        return (!$this->allowManualOverrideViaFAC) ?: $this->allowManualOverrideViaFAC->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setPlayAnnouncementBeforeAction(xs:boolean $playAnnouncementBeforeAction = null)
    {
    }

    public function getPlayAnnouncementBeforeAction()
    {
        return (!$this->playAnnouncementBeforeAction) ?: $this->playAnnouncementBeforeAction->value();
    }

    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }

    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
    }

    public function getManualAnnouncementMode()
    {
        return (!$this->manualAnnouncementMode) ?: $this->manualAnnouncementMode->value();
    }

    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
    }

    public function getManualAudioMessageSelection()
    {
        return (!$this->manualAudioMessageSelection) ?: $this->manualAudioMessageSelection->value();
    }

    public function setManualAudioFile(ExtendedMediaFileResource $manualAudioFile = null)
    {
    }

    public function getManualAudioFile()
    {
        return (!$this->manualAudioFile) ?: $this->manualAudioFile->value();
    }

    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
    }

    public function getManualVideoMessageSelection()
    {
        return (!$this->manualVideoMessageSelection) ?: $this->manualVideoMessageSelection->value();
    }

    public function setManualVideoFile(ExtendedMediaFileResource $manualVideoFile = null)
    {
    }

    public function getManualVideoFile()
    {
        return (!$this->manualVideoFile) ?: $this->manualVideoFile->value();
    }
}

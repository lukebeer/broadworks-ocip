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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterNightServiceGetRequest.
 */
class GroupCallCenterNightServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $action                        = null;
    protected $businessHours                 = null;
    protected $forceNightService             = null;
    protected $allowManualOverrideViaFAC     = null;
    protected $transferPhoneNumber           = null;
    protected $playAnnouncementBeforeAction  = null;
    protected $audioMessageSelection         = null;
    protected $audioFileUrl                  = null;
    protected $audioFileDescription          = null;
    protected $audioMediaType                = null;
    protected $videoMessageSelection         = null;
    protected $videoFileUrl                  = null;
    protected $videoFileDescription          = null;
    protected $videoMediaType                = null;
    protected $manualAnnouncementMode        = null;
    protected $manualAudioMessageSelection   = null;
    protected $manualAudioFileUrl            = null;
    protected $manualAudioFileDescription    = null;
    protected $manualAudioMediaType          = null;
    protected $manualVideoMessageSelection   = null;
    protected $manualVideoFileUrl            = null;
    protected $manualVideoFileDescription    = null;
    protected $manualVideoMediaType          = null;


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

    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->value();
    }

    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
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

    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->value();
    }

    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
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

    public function setManualAudioFileUrl($manualAudioFileUrl = null)
    {
        $this->manualAudioFileUrl = ($manualAudioFileUrl InstanceOf URL)
             ? $manualAudioFileUrl
             : new URL($manualAudioFileUrl);
    }

    public function getManualAudioFileUrl()
    {
        return (!$this->manualAudioFileUrl) ?: $this->manualAudioFileUrl->value();
    }

    public function setManualAudioFileDescription($manualAudioFileDescription = null)
    {
        $this->manualAudioFileDescription = ($manualAudioFileDescription InstanceOf FileDescription)
             ? $manualAudioFileDescription
             : new FileDescription($manualAudioFileDescription);
    }

    public function getManualAudioFileDescription()
    {
        return (!$this->manualAudioFileDescription) ?: $this->manualAudioFileDescription->value();
    }

    public function setManualAudioMediaType($manualAudioMediaType = null)
    {
        $this->manualAudioMediaType = ($manualAudioMediaType InstanceOf MediaFileType)
             ? $manualAudioMediaType
             : new MediaFileType($manualAudioMediaType);
    }

    public function getManualAudioMediaType()
    {
        return (!$this->manualAudioMediaType) ?: $this->manualAudioMediaType->value();
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

    public function setManualVideoFileUrl($manualVideoFileUrl = null)
    {
        $this->manualVideoFileUrl = ($manualVideoFileUrl InstanceOf URL)
             ? $manualVideoFileUrl
             : new URL($manualVideoFileUrl);
    }

    public function getManualVideoFileUrl()
    {
        return (!$this->manualVideoFileUrl) ?: $this->manualVideoFileUrl->value();
    }

    public function setManualVideoFileDescription($manualVideoFileDescription = null)
    {
        $this->manualVideoFileDescription = ($manualVideoFileDescription InstanceOf FileDescription)
             ? $manualVideoFileDescription
             : new FileDescription($manualVideoFileDescription);
    }

    public function getManualVideoFileDescription()
    {
        return (!$this->manualVideoFileDescription) ?: $this->manualVideoFileDescription->value();
    }

    public function setManualVideoMediaType($manualVideoMediaType = null)
    {
        $this->manualVideoMediaType = ($manualVideoMediaType InstanceOf MediaFileType)
             ? $manualVideoMediaType
             : new MediaFileType($manualVideoMediaType);
    }

    public function getManualVideoMediaType()
    {
        return (!$this->manualVideoMediaType) ?: $this->manualVideoMediaType->value();
    }
}

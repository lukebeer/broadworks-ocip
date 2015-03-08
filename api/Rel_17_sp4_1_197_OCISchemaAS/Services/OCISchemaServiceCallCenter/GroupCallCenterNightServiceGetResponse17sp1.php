<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterNightServiceGetRequest17sp1.
 */
class GroupCallCenterNightServiceGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $action                       = null;
    protected $businessHours                = null;
    protected $forceNightService            = null;
    protected $allowManualOverrideViaFAC    = null;
    protected $transferPhoneNumber          = null;
    protected $playAnnouncementBeforeAction = null;
    protected $audioMessageSelection        = null;
    protected $audioUrlList                 = null;
    protected $audioFileList                = null;
    protected $audioMediaTypeList           = null;
    protected $videoMessageSelection        = null;
    protected $videoUrlList                 = null;
    protected $videoFileList                = null;
    protected $videoMediaTypeList           = null;
    protected $manualAnnouncementMode       = null;
    protected $manualAudioMessageSelection  = null;
    protected $manualAudioUrlList           = null;
    protected $manualAudioFileList          = null;
    protected $manualAudioMediaTypeList     = null;
    protected $manualVideoMessageSelection  = null;
    protected $manualVideoUrlList           = null;
    protected $manualVideoFileList          = null;
    protected $manualVideoMediaTypeList     = null;


    /**
     * Call center scheduled service (Night Services, Holiday Services, etc.) processing action.
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
    }

    /**
     * Call center scheduled service (Night Services, Holiday Services, etc.) processing action.
     */
    public function getAction()
    {
        return (!$this->action) ?: $this->action->getValue();
    }

    /**
     * The from dn criteria.
     */
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        $this->businessHours =  $businessHours;
    }

    /**
     * The from dn criteria.
     */
    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->getValue();
    }

    /**
     * 
     */
    public function setForceNightService($forceNightService = null)
    {
        $this->forceNightService = (boolean) $forceNightService;
    }

    /**
     * 
     */
    public function getForceNightService()
    {
        return (!$this->forceNightService) ?: $this->forceNightService->getValue();
    }

    /**
     * 
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        $this->allowManualOverrideViaFAC = (boolean) $allowManualOverrideViaFAC;
    }

    /**
     * 
     */
    public function getAllowManualOverrideViaFAC()
    {
        return (!$this->allowManualOverrideViaFAC) ?: $this->allowManualOverrideViaFAC->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction = null)
    {
        $this->playAnnouncementBeforeAction = (boolean) $playAnnouncementBeforeAction;
    }

    /**
     * 
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return (!$this->playAnnouncementBeforeAction) ?: $this->playAnnouncementBeforeAction->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
        $this->audioUrlList =  $audioUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
        $this->audioFileList =  $audioFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
        $this->audioMediaTypeList =  $audioMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
        $this->videoUrlList =  $videoUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
        $this->videoFileList =  $videoFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
        $this->videoMediaTypeList =  $videoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->getValue();
    }

    /**
     * Call center manual night service announcement mode.
     */
    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
    }

    /**
     * Call center manual night service announcement mode.
     */
    public function getManualAnnouncementMode()
    {
        return (!$this->manualAnnouncementMode) ?: $this->manualAnnouncementMode->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getManualAudioMessageSelection()
    {
        return (!$this->manualAudioMessageSelection) ?: $this->manualAudioMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setManualAudioUrlList(CallCenterAnnouncementURLList $manualAudioUrlList = null)
    {
        $this->manualAudioUrlList =  $manualAudioUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getManualAudioUrlList()
    {
        return (!$this->manualAudioUrlList) ?: $this->manualAudioUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setManualAudioFileList(CallCenterAnnouncementDescriptionList $manualAudioFileList = null)
    {
        $this->manualAudioFileList =  $manualAudioFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getManualAudioFileList()
    {
        return (!$this->manualAudioFileList) ?: $this->manualAudioFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setManualAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList = null)
    {
        $this->manualAudioMediaTypeList =  $manualAudioMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getManualAudioMediaTypeList()
    {
        return (!$this->manualAudioMediaTypeList) ?: $this->manualAudioMediaTypeList->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getManualVideoMessageSelection()
    {
        return (!$this->manualVideoMessageSelection) ?: $this->manualVideoMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setManualVideoUrlList(CallCenterAnnouncementURLList $manualVideoUrlList = null)
    {
        $this->manualVideoUrlList =  $manualVideoUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getManualVideoUrlList()
    {
        return (!$this->manualVideoUrlList) ?: $this->manualVideoUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setManualVideoFileList(CallCenterAnnouncementDescriptionList $manualVideoFileList = null)
    {
        $this->manualVideoFileList =  $manualVideoFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getManualVideoFileList()
    {
        return (!$this->manualVideoFileList) ?: $this->manualVideoFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setManualVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList = null)
    {
        $this->manualVideoMediaTypeList =  $manualVideoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getManualVideoMediaTypeList()
    {
        return (!$this->manualVideoMediaTypeList) ?: $this->manualVideoMediaTypeList->getValue();
    }
}

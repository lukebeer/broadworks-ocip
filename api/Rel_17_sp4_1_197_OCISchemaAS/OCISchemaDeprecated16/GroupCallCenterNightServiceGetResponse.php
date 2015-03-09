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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterNightServiceGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterNightServiceGetRequest.
 */
class GroupCallCenterNightServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $action                       = null;
    protected $businessHours                = null;
    protected $forceNightService            = null;
    protected $allowManualOverrideViaFAC    = null;
    protected $transferPhoneNumber          = null;
    protected $playAnnouncementBeforeAction = null;
    protected $audioMessageSelection        = null;
    protected $audioFileUrl                 = null;
    protected $audioFileDescription         = null;
    protected $audioMediaType               = null;
    protected $videoMessageSelection        = null;
    protected $videoFileUrl                 = null;
    protected $videoFileDescription         = null;
    protected $videoMediaType               = null;
    protected $manualAnnouncementMode       = null;
    protected $manualAudioMessageSelection  = null;
    protected $manualAudioFileUrl           = null;
    protected $manualAudioFileDescription   = null;
    protected $manualAudioMediaType         = null;
    protected $manualVideoMessageSelection  = null;
    protected $manualVideoFileUrl           = null;
    protected $manualVideoFileDescription   = null;
    protected $manualVideoMediaType         = null;

    /**
     * @return GroupCallCenterNightServiceGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
     * Schedule name.
     */
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
    }

    /**
     * Schedule name.
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
        return (!$this->forceNightService) ?: $this->forceNightService;
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
        return (!$this->allowManualOverrideViaFAC) ?: $this->allowManualOverrideViaFAC;
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
        return (!$this->playAnnouncementBeforeAction) ?: $this->playAnnouncementBeforeAction;
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
     * URL.
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    /**
     * URL.
     */
    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->getValue();
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
     * URL.
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    /**
     * URL.
     */
    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->getValue();
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
     * URL.
     */
    public function setManualAudioFileUrl($manualAudioFileUrl = null)
    {
        $this->manualAudioFileUrl = ($manualAudioFileUrl InstanceOf URL)
             ? $manualAudioFileUrl
             : new URL($manualAudioFileUrl);
    }

    /**
     * URL.
     */
    public function getManualAudioFileUrl()
    {
        return (!$this->manualAudioFileUrl) ?: $this->manualAudioFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setManualAudioFileDescription($manualAudioFileDescription = null)
    {
        $this->manualAudioFileDescription = ($manualAudioFileDescription InstanceOf FileDescription)
             ? $manualAudioFileDescription
             : new FileDescription($manualAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getManualAudioFileDescription()
    {
        return (!$this->manualAudioFileDescription) ?: $this->manualAudioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setManualAudioMediaType($manualAudioMediaType = null)
    {
        $this->manualAudioMediaType = ($manualAudioMediaType InstanceOf MediaFileType)
             ? $manualAudioMediaType
             : new MediaFileType($manualAudioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getManualAudioMediaType()
    {
        return (!$this->manualAudioMediaType) ?: $this->manualAudioMediaType->getValue();
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
     * URL.
     */
    public function setManualVideoFileUrl($manualVideoFileUrl = null)
    {
        $this->manualVideoFileUrl = ($manualVideoFileUrl InstanceOf URL)
             ? $manualVideoFileUrl
             : new URL($manualVideoFileUrl);
    }

    /**
     * URL.
     */
    public function getManualVideoFileUrl()
    {
        return (!$this->manualVideoFileUrl) ?: $this->manualVideoFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setManualVideoFileDescription($manualVideoFileDescription = null)
    {
        $this->manualVideoFileDescription = ($manualVideoFileDescription InstanceOf FileDescription)
             ? $manualVideoFileDescription
             : new FileDescription($manualVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getManualVideoFileDescription()
    {
        return (!$this->manualVideoFileDescription) ?: $this->manualVideoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setManualVideoMediaType($manualVideoMediaType = null)
    {
        $this->manualVideoMediaType = ($manualVideoMediaType InstanceOf MediaFileType)
             ? $manualVideoMediaType
             : new MediaFileType($manualVideoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getManualVideoMediaType()
    {
        return (!$this->manualVideoMediaType) ?: $this->manualVideoMediaType->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupRoutePointNightServiceModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a route point's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointNightServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceUserId                = null;
    protected $action                       = null;
    protected $businessHours                = null;
    protected $forceNightService            = null;
    protected $transferPhoneNumber          = null;
    protected $playAnnouncementBeforeAction = null;
    protected $audioMessageSelection        = null;
    protected $audioUrlList                 = null;
    protected $audioFileList                = null;
    protected $videoMessageSelection        = null;
    protected $videoUrlList                 = null;
    protected $videoFileList                = null;
    protected $manualAnnouncementMode       = null;
    protected $manualAudioMessageSelection  = null;
    protected $manualAudioUrlList           = null;
    protected $manualAudioFileList          = null;
    protected $manualVideoMessageSelection  = null;
    protected $manualVideoUrlList           = null;
    protected $manualVideoFileList          = null;

    public function __construct(
         $serviceUserId,
         $action = null,
         $businessHours = null,
         $forceNightService = null,
         $transferPhoneNumber = null,
         $playAnnouncementBeforeAction = null,
         $audioMessageSelection = null,
          $audioUrlList = null,
          $audioFileList = null,
         $videoMessageSelection = null,
          $videoUrlList = null,
          $videoFileList = null,
         $manualAnnouncementMode = null,
         $manualAudioMessageSelection = null,
          $manualAudioUrlList = null,
          $manualAudioFileList = null,
         $manualVideoMessageSelection = null,
          $manualVideoUrlList = null,
          $manualVideoFileList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAction($action);
        $this->setBusinessHours($businessHours);
        $this->setForceNightService($forceNightService);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
        $this->setManualAnnouncementMode($manualAnnouncementMode);
        $this->setManualAudioMessageSelection($manualAudioMessageSelection);
        $this->setManualAudioUrlList($manualAudioUrlList);
        $this->setManualAudioFileList($manualAudioFileList);
        $this->setManualVideoMessageSelection($manualVideoMessageSelection);
        $this->setManualVideoUrlList($manualVideoUrlList);
        $this->setManualVideoFileList($manualVideoFileList);
    }

    /**
     * @return GroupRoutePointNightServiceModifyResponse
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
     * Contains a list of URLs for modify.
     */
    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
        $this->audioUrlList =  $audioUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
        $this->audioFileList =  $audioFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
        $this->videoUrlList =  $videoUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
        $this->videoFileList =  $videoFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setManualAudioUrlList(CallCenterAnnouncementURLListModify $manualAudioUrlList = null)
    {
        $this->manualAudioUrlList =  $manualAudioUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getManualAudioUrlList()
    {
        return (!$this->manualAudioUrlList) ?: $this->manualAudioUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setManualAudioFileList(CallCenterAnnouncementFileListModify $manualAudioFileList = null)
    {
        $this->manualAudioFileList =  $manualAudioFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getManualAudioFileList()
    {
        return (!$this->manualAudioFileList) ?: $this->manualAudioFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setManualVideoUrlList(CallCenterAnnouncementURLListModify $manualVideoUrlList = null)
    {
        $this->manualVideoUrlList =  $manualVideoUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getManualVideoUrlList()
    {
        return (!$this->manualVideoUrlList) ?: $this->manualVideoUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setManualVideoFileList(CallCenterAnnouncementFileListModify $manualVideoFileList = null)
    {
        $this->manualVideoFileList =  $manualVideoFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getManualVideoFileList()
    {
        return (!$this->manualVideoFileList) ?: $this->manualVideoFileList->getValue();
    }
}

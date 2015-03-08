<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterOverflowProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a route point's overflow settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointOverflowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $serviceUserId                            = null;
    protected $action                                   = null;
    protected $transferPhoneNumber                      = null;
    protected $overflowAfterTimeout                     = null;
    protected $timeoutSeconds                           = null;
    protected $playAnnouncementBeforeOverflowProcessing = null;
    protected $audioMessageSelection                    = null;
    protected $audioUrlList                             = null;
    protected $audioFileList                            = null;
    protected $videoMessageSelection                    = null;
    protected $videoUrlList                             = null;
    protected $videoFileList                            = null;

    public function __construct(
         $serviceUserId,
         $action = null,
         $transferPhoneNumber = null,
         $overflowAfterTimeout = null,
         $timeoutSeconds = null,
         $playAnnouncementBeforeOverflowProcessing = null,
         $audioMessageSelection = null,
          $audioUrlList = null,
          $audioFileList = null,
         $videoMessageSelection = null,
          $videoUrlList = null,
          $videoFileList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAction($action);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setOverflowAfterTimeout($overflowAfterTimeout);
        $this->setTimeoutSeconds($timeoutSeconds);
        $this->setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
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
     * Call center overflow processing action.
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterOverflowProcessingAction)
             ? $action
             : new CallCenterOverflowProcessingAction($action);
    }

    /**
     * Call center overflow processing action.
     */
    public function getAction()
    {
        return (!$this->action) ?: $this->action->getValue();
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
    public function setOverflowAfterTimeout($overflowAfterTimeout = null)
    {
        $this->overflowAfterTimeout = (boolean) $overflowAfterTimeout;
    }

    /**
     * 
     */
    public function getOverflowAfterTimeout()
    {
        return (!$this->overflowAfterTimeout) ?: $this->overflowAfterTimeout->getValue();
    }

    /**
     * Time to wait for any agent to answer before forwarding the caller elsewhere.
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $timeoutSeconds
             : new HuntForwardTimeoutSeconds($timeoutSeconds);
    }

    /**
     * Time to wait for any agent to answer before forwarding the caller elsewhere.
     */
    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing = null)
    {
        $this->playAnnouncementBeforeOverflowProcessing = (boolean) $playAnnouncementBeforeOverflowProcessing;
    }

    /**
     * 
     */
    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return (!$this->playAnnouncementBeforeOverflowProcessing) ?: $this->playAnnouncementBeforeOverflowProcessing->getValue();
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
}

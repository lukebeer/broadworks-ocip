<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupRoutePointForcedForwardingGetRequest.
 */
class GroupRoutePointForcedForwardingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointForcedForwardingGetResponse';
    public    $name                             = __CLASS__;
    protected $isActive                         = null;
    protected $forwardToPhoneNumber             = null;
    protected $playAnnouncementBeforeForwarding = null;
    protected $audioMessageSelection            = null;
    protected $audioUrlList                     = null;
    protected $audioFileList                    = null;
    protected $audioMediaTypeList               = null;
    protected $videoMessageSelection            = null;
    protected $videoUrlList                     = null;
    protected $videoFileList                    = null;
    protected $videoMediaTypeList               = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
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
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
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
    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding = null)
    {
        $this->playAnnouncementBeforeForwarding = (boolean) $playAnnouncementBeforeForwarding;
    }

    /**
     * 
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return (!$this->playAnnouncementBeforeForwarding) ?: $this->playAnnouncementBeforeForwarding->getValue();
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
        $this->audioUrlList = CallCenterAnnouncementURLList $audioUrlList;
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
        $this->audioFileList = CallCenterAnnouncementDescriptionList $audioFileList;
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
        $this->audioMediaTypeList = CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList;
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
        $this->videoUrlList = CallCenterAnnouncementURLList $videoUrlList;
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
        $this->videoFileList = CallCenterAnnouncementDescriptionList $videoFileList;
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
        $this->videoMediaTypeList = CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->getValue();
    }
}

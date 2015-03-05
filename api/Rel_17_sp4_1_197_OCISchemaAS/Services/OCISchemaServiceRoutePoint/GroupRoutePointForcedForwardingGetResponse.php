<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupRoutePointForcedForwardingGetRequest.
 */
class GroupRoutePointForcedForwardingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $forwardToPhoneNumber=null,
             $playAnnouncementBeforeForwarding,
             $audioMessageSelection,
             CallCenterAnnouncementURLList $audioUrlList=null,
             CallCenterAnnouncementDescriptionList $audioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList=null,
             $videoMessageSelection,
             CallCenterAnnouncementURLList $videoUrlList=null,
             CallCenterAnnouncementDescriptionList $videoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList=null
    ) {
        $this->isActive                         = $isActive;
        $this->forwardToPhoneNumber             = new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->playAnnouncementBeforeForwarding = $playAnnouncementBeforeForwarding;
        $this->audioMessageSelection            = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioUrlList                     = $audioUrlList;
        $this->audioFileList                    = $audioFileList;
        $this->audioMediaTypeList               = $audioMediaTypeList;
        $this->videoMessageSelection            = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoUrlList                     = $videoUrlList;
        $this->videoFileList                    = $videoFileList;
        $this->videoMediaTypeList               = $videoMediaTypeList;
        $this->args                             = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding)
    {
        $playAnnouncementBeforeForwarding and $this->playAnnouncementBeforeForwarding = new xs:boolean($playAnnouncementBeforeForwarding);
    }

    public function getPlayAnnouncementBeforeForwarding()
    {
        return (!$this->playAnnouncementBeforeForwarding) ?: $this->playAnnouncementBeforeForwarding->value();
    }

    public function setAudioMessageSelection($audioMessageSelection)
    {
        $audioMessageSelection and $this->audioMessageSelection = new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioUrlList($audioUrlList)
    {
        $audioUrlList and $this->audioUrlList = new CallCenterAnnouncementURLList($audioUrlList);
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList($audioFileList)
    {
        $audioFileList and $this->audioFileList = new CallCenterAnnouncementDescriptionList($audioFileList);
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setAudioMediaTypeList($audioMediaTypeList)
    {
        $audioMediaTypeList and $this->audioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($audioMediaTypeList);
    }

    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->value();
    }

    public function setVideoMessageSelection($videoMessageSelection)
    {
        $videoMessageSelection and $this->videoMessageSelection = new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoUrlList($videoUrlList)
    {
        $videoUrlList and $this->videoUrlList = new CallCenterAnnouncementURLList($videoUrlList);
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList($videoFileList)
    {
        $videoFileList and $this->videoFileList = new CallCenterAnnouncementDescriptionList($videoFileList);
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }

    public function setVideoMediaTypeList($videoMediaTypeList)
    {
        $videoMediaTypeList and $this->videoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($videoMediaTypeList);
    }

    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->value();
    }
}

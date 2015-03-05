<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterHolidayServiceGetRequest17sp1.
 */
class GroupCallCenterHolidayServiceGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $action,
             HolidaySchedule $holidaySchedule=null,
             $transferPhoneNumber=null,
             $playAnnouncementBeforeAction,
             $audioMessageSelection,
             CallCenterAnnouncementURLList $audioUrlList=null,
             CallCenterAnnouncementDescriptionList $audioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList=null,
             $videoMessageSelection,
             CallCenterAnnouncementURLList $videoUrlList=null,
             CallCenterAnnouncementDescriptionList $videoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList=null
    ) {
        $this->action                       = new CallCenterScheduledServiceAction($action);
        $this->holidaySchedule              = $holidaySchedule;
        $this->transferPhoneNumber          = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        $this->audioMessageSelection        = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioUrlList                 = $audioUrlList;
        $this->audioFileList                = $audioFileList;
        $this->audioMediaTypeList           = $audioMediaTypeList;
        $this->videoMessageSelection        = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoUrlList                 = $videoUrlList;
        $this->videoFileList                = $videoFileList;
        $this->videoMediaTypeList           = $videoMediaTypeList;
        $this->args                         = func_get_args();
    }

    public function setAction($action)
    {
        $action and $this->action = new CallCenterScheduledServiceAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setHolidaySchedule($holidaySchedule)
    {
        $holidaySchedule and $this->holidaySchedule = new HolidaySchedule($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction)
    {
        $playAnnouncementBeforeAction and $this->playAnnouncementBeforeAction = new xs:boolean($playAnnouncementBeforeAction);
    }

    public function getPlayAnnouncementBeforeAction()
    {
        return (!$this->playAnnouncementBeforeAction) ?: $this->playAnnouncementBeforeAction->value();
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

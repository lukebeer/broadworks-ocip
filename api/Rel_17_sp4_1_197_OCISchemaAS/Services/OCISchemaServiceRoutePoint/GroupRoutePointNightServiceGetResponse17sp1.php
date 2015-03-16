<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointNightServiceGetRequest17sp1.
 */
class GroupRoutePointNightServiceGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointNightServiceGetResponse17sp1';
    protected $action;
    protected $businessHours;
    protected $forceNightService;
    protected $transferPhoneNumber;
    protected $playAnnouncementBeforeAction;
    protected $audioMessageSelection;
    protected $audioUrlList;
    protected $audioFileList;
    protected $audioMediaTypeList;
    protected $videoMessageSelection;
    protected $videoUrlList;
    protected $videoFileList;
    protected $videoMediaTypeList;
    protected $manualAnnouncementMode;
    protected $manualAudioMessageSelection;
    protected $manualAudioUrlList;
    protected $manualAudioFileList;
    protected $manualAudioMediaTypeList;
    protected $manualVideoMessageSelection;
    protected $manualVideoUrlList;
    protected $manualVideoFileList;
    protected $manualVideoMediaTypeList;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointNightServiceGetResponse17sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf TimeSchedule)
             ? $businessHours
             : new TimeSchedule($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $businessHours
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
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
    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
        $this->audioUrlList = ($audioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $audioUrlList
             : new CallCenterAnnouncementURLList($audioUrlList);
        $this->audioUrlList->setName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $audioUrlList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * 
     */
    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
        $this->audioFileList = ($audioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $audioFileList
             : new CallCenterAnnouncementDescriptionList($audioFileList);
        $this->audioFileList->setName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $audioFileList
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * 
     */
    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
        $this->audioMediaTypeList = ($audioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $audioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($audioMediaTypeList);
        $this->audioMediaTypeList->setName('audioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList
     */
    public function getAudioMediaTypeList()
    {
        return $this->audioMediaTypeList;
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
    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
        $this->videoUrlList = ($videoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $videoUrlList
             : new CallCenterAnnouncementURLList($videoUrlList);
        $this->videoUrlList->setName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $videoUrlList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * 
     */
    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
        $this->videoFileList = ($videoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $videoFileList
             : new CallCenterAnnouncementDescriptionList($videoFileList);
        $this->videoFileList->setName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $videoFileList
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * 
     */
    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
        $this->videoMediaTypeList = ($videoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $videoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($videoMediaTypeList);
        $this->videoMediaTypeList->setName('videoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList
     */
    public function getVideoMediaTypeList()
    {
        return $this->videoMediaTypeList;
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
    public function setManualAudioUrlList(CallCenterAnnouncementURLList $manualAudioUrlList = null)
    {
        $this->manualAudioUrlList = ($manualAudioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $manualAudioUrlList
             : new CallCenterAnnouncementURLList($manualAudioUrlList);
        $this->manualAudioUrlList->setName('manualAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $manualAudioUrlList
     */
    public function getManualAudioUrlList()
    {
        return $this->manualAudioUrlList;
    }

    /**
     * 
     */
    public function setManualAudioFileList(CallCenterAnnouncementDescriptionList $manualAudioFileList = null)
    {
        $this->manualAudioFileList = ($manualAudioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $manualAudioFileList
             : new CallCenterAnnouncementDescriptionList($manualAudioFileList);
        $this->manualAudioFileList->setName('manualAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $manualAudioFileList
     */
    public function getManualAudioFileList()
    {
        return $this->manualAudioFileList;
    }

    /**
     * 
     */
    public function setManualAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList = null)
    {
        $this->manualAudioMediaTypeList = ($manualAudioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $manualAudioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($manualAudioMediaTypeList);
        $this->manualAudioMediaTypeList->setName('manualAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList
     */
    public function getManualAudioMediaTypeList()
    {
        return $this->manualAudioMediaTypeList;
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
    public function setManualVideoUrlList(CallCenterAnnouncementURLList $manualVideoUrlList = null)
    {
        $this->manualVideoUrlList = ($manualVideoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $manualVideoUrlList
             : new CallCenterAnnouncementURLList($manualVideoUrlList);
        $this->manualVideoUrlList->setName('manualVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $manualVideoUrlList
     */
    public function getManualVideoUrlList()
    {
        return $this->manualVideoUrlList;
    }

    /**
     * 
     */
    public function setManualVideoFileList(CallCenterAnnouncementDescriptionList $manualVideoFileList = null)
    {
        $this->manualVideoFileList = ($manualVideoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $manualVideoFileList
             : new CallCenterAnnouncementDescriptionList($manualVideoFileList);
        $this->manualVideoFileList->setName('manualVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $manualVideoFileList
     */
    public function getManualVideoFileList()
    {
        return $this->manualVideoFileList;
    }

    /**
     * 
     */
    public function setManualVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList = null)
    {
        $this->manualVideoMediaTypeList = ($manualVideoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $manualVideoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($manualVideoMediaTypeList);
        $this->manualVideoMediaTypeList->setName('manualVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList
     */
    public function getManualVideoMediaTypeList()
    {
        return $this->manualVideoMediaTypeList;
    }
}

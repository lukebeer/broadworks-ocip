<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a route point's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointNightServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointNightServiceModifyRequest';
    protected $serviceUserId;
    protected $action;
    protected $businessHours;
    protected $forceNightService;
    protected $transferPhoneNumber;
    protected $playAnnouncementBeforeAction;
    protected $audioMessageSelection;
    protected $audioUrlList;
    protected $audioFileList;
    protected $videoMessageSelection;
    protected $videoUrlList;
    protected $videoFileList;
    protected $manualAnnouncementMode;
    protected $manualAudioMessageSelection;
    protected $manualAudioUrlList;
    protected $manualAudioFileList;
    protected $manualVideoMessageSelection;
    protected $manualVideoUrlList;
    protected $manualVideoFileList;

    public function __construct(
         $serviceUserId = '',
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
        $this->action->setElementName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledServiceAction $action
     */
    public function getAction()
    {
        return ($this->action)
            ? $this->action->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setElementName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return ($this->businessHours)
            ? $this->businessHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceNightService($forceNightService = null)
    {
        $this->forceNightService = new PrimitiveType($forceNightService);
        $this->forceNightService->setElementName('forceNightService');
        return $this;
    }

    /**
     * 
     * @return boolean $forceNightService
     */
    public function getForceNightService()
    {
        return ($this->forceNightService)
            ? $this->forceNightService->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setElementName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber)
            ? $this->transferPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction = null)
    {
        $this->playAnnouncementBeforeAction = new PrimitiveType($playAnnouncementBeforeAction);
        $this->playAnnouncementBeforeAction->setElementName('playAnnouncementBeforeAction');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeAction
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return ($this->playAnnouncementBeforeAction)
            ? $this->playAnnouncementBeforeAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setElementName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return ($this->audioMessageSelection)
            ? $this->audioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
        $this->audioUrlList = ($audioUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $audioUrlList
             : new CallCenterAnnouncementURLListModify($audioUrlList);
        $this->audioUrlList->setElementName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $audioUrlList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * 
     */
    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
        $this->audioFileList = ($audioFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $audioFileList
             : new CallCenterAnnouncementFileListModify($audioFileList);
        $this->audioFileList->setElementName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $audioFileList
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setElementName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return ($this->videoMessageSelection)
            ? $this->videoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
        $this->videoUrlList = ($videoUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $videoUrlList
             : new CallCenterAnnouncementURLListModify($videoUrlList);
        $this->videoUrlList->setElementName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $videoUrlList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * 
     */
    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
        $this->videoFileList = ($videoFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $videoFileList
             : new CallCenterAnnouncementFileListModify($videoFileList);
        $this->videoFileList->setElementName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $videoFileList
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * 
     */
    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAnnouncementMode->setElementName('manualAnnouncementMode');
        return $this;
    }

    /**
     * 
     * @return CallCenterManualNightServiceAnnouncementMode $manualAnnouncementMode
     */
    public function getManualAnnouncementMode()
    {
        return ($this->manualAnnouncementMode)
            ? $this->manualAnnouncementMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioMessageSelection->setElementName('manualAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $manualAudioMessageSelection
     */
    public function getManualAudioMessageSelection()
    {
        return ($this->manualAudioMessageSelection)
            ? $this->manualAudioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualAudioUrlList(CallCenterAnnouncementURLListModify $manualAudioUrlList = null)
    {
        $this->manualAudioUrlList = ($manualAudioUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $manualAudioUrlList
             : new CallCenterAnnouncementURLListModify($manualAudioUrlList);
        $this->manualAudioUrlList->setElementName('manualAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $manualAudioUrlList
     */
    public function getManualAudioUrlList()
    {
        return $this->manualAudioUrlList;
    }

    /**
     * 
     */
    public function setManualAudioFileList(CallCenterAnnouncementFileListModify $manualAudioFileList = null)
    {
        $this->manualAudioFileList = ($manualAudioFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $manualAudioFileList
             : new CallCenterAnnouncementFileListModify($manualAudioFileList);
        $this->manualAudioFileList->setElementName('manualAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $manualAudioFileList
     */
    public function getManualAudioFileList()
    {
        return $this->manualAudioFileList;
    }

    /**
     * 
     */
    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoMessageSelection->setElementName('manualVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $manualVideoMessageSelection
     */
    public function getManualVideoMessageSelection()
    {
        return ($this->manualVideoMessageSelection)
            ? $this->manualVideoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualVideoUrlList(CallCenterAnnouncementURLListModify $manualVideoUrlList = null)
    {
        $this->manualVideoUrlList = ($manualVideoUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $manualVideoUrlList
             : new CallCenterAnnouncementURLListModify($manualVideoUrlList);
        $this->manualVideoUrlList->setElementName('manualVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $manualVideoUrlList
     */
    public function getManualVideoUrlList()
    {
        return $this->manualVideoUrlList;
    }

    /**
     * 
     */
    public function setManualVideoFileList(CallCenterAnnouncementFileListModify $manualVideoFileList = null)
    {
        $this->manualVideoFileList = ($manualVideoFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $manualVideoFileList
             : new CallCenterAnnouncementFileListModify($manualVideoFileList);
        $this->manualVideoFileList->setElementName('manualVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $manualVideoFileList
     */
    public function getManualVideoFileList()
    {
        return $this->manualVideoFileList;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterNightServiceGetRequest.
 */
class GroupCallCenterNightServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterNightServiceGetResponse';
    protected $action;
    protected $businessHours;
    protected $forceNightService;
    protected $allowManualOverrideViaFAC;
    protected $transferPhoneNumber;
    protected $playAnnouncementBeforeAction;
    protected $audioMessageSelection;
    protected $audioFileUrl;
    protected $audioFileDescription;
    protected $audioMediaType;
    protected $videoMessageSelection;
    protected $videoFileUrl;
    protected $videoFileDescription;
    protected $videoMediaType;
    protected $manualAnnouncementMode;
    protected $manualAudioMessageSelection;
    protected $manualAudioFileUrl;
    protected $manualAudioFileDescription;
    protected $manualAudioMediaType;
    protected $manualVideoMessageSelection;
    protected $manualVideoFileUrl;
    protected $manualVideoFileDescription;
    protected $manualVideoMediaType;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterNightServiceGetResponse $response
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
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        $this->allowManualOverrideViaFAC = new PrimitiveType($allowManualOverrideViaFAC);
        $this->allowManualOverrideViaFAC->setElementName('allowManualOverrideViaFAC');
        return $this;
    }

    /**
     * 
     * @return boolean $allowManualOverrideViaFAC
     */
    public function getAllowManualOverrideViaFAC()
    {
        return ($this->allowManualOverrideViaFAC)
            ? $this->allowManualOverrideViaFAC->getElementValue()
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
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
        $this->audioFileUrl->setElementName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $audioFileUrl
     */
    public function getAudioFileUrl()
    {
        return ($this->audioFileUrl)
            ? $this->audioFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
        $this->audioFileDescription->setElementName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $audioFileDescription
     */
    public function getAudioFileDescription()
    {
        return ($this->audioFileDescription)
            ? $this->audioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
        $this->audioMediaType->setElementName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $audioMediaType
     */
    public function getAudioMediaType()
    {
        return ($this->audioMediaType)
            ? $this->audioMediaType->getElementValue()
            : null;
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
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
        $this->videoFileUrl->setElementName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $videoFileUrl
     */
    public function getVideoFileUrl()
    {
        return ($this->videoFileUrl)
            ? $this->videoFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
        $this->videoFileDescription->setElementName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $videoFileDescription
     */
    public function getVideoFileDescription()
    {
        return ($this->videoFileDescription)
            ? $this->videoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
        $this->videoMediaType->setElementName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $videoMediaType
     */
    public function getVideoMediaType()
    {
        return ($this->videoMediaType)
            ? $this->videoMediaType->getElementValue()
            : null;
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
    public function setManualAudioFileUrl($manualAudioFileUrl = null)
    {
        $this->manualAudioFileUrl = ($manualAudioFileUrl InstanceOf URL)
             ? $manualAudioFileUrl
             : new URL($manualAudioFileUrl);
        $this->manualAudioFileUrl->setElementName('manualAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $manualAudioFileUrl
     */
    public function getManualAudioFileUrl()
    {
        return ($this->manualAudioFileUrl)
            ? $this->manualAudioFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualAudioFileDescription($manualAudioFileDescription = null)
    {
        $this->manualAudioFileDescription = ($manualAudioFileDescription InstanceOf FileDescription)
             ? $manualAudioFileDescription
             : new FileDescription($manualAudioFileDescription);
        $this->manualAudioFileDescription->setElementName('manualAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $manualAudioFileDescription
     */
    public function getManualAudioFileDescription()
    {
        return ($this->manualAudioFileDescription)
            ? $this->manualAudioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualAudioMediaType($manualAudioMediaType = null)
    {
        $this->manualAudioMediaType = ($manualAudioMediaType InstanceOf MediaFileType)
             ? $manualAudioMediaType
             : new MediaFileType($manualAudioMediaType);
        $this->manualAudioMediaType->setElementName('manualAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $manualAudioMediaType
     */
    public function getManualAudioMediaType()
    {
        return ($this->manualAudioMediaType)
            ? $this->manualAudioMediaType->getElementValue()
            : null;
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
    public function setManualVideoFileUrl($manualVideoFileUrl = null)
    {
        $this->manualVideoFileUrl = ($manualVideoFileUrl InstanceOf URL)
             ? $manualVideoFileUrl
             : new URL($manualVideoFileUrl);
        $this->manualVideoFileUrl->setElementName('manualVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $manualVideoFileUrl
     */
    public function getManualVideoFileUrl()
    {
        return ($this->manualVideoFileUrl)
            ? $this->manualVideoFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualVideoFileDescription($manualVideoFileDescription = null)
    {
        $this->manualVideoFileDescription = ($manualVideoFileDescription InstanceOf FileDescription)
             ? $manualVideoFileDescription
             : new FileDescription($manualVideoFileDescription);
        $this->manualVideoFileDescription->setElementName('manualVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $manualVideoFileDescription
     */
    public function getManualVideoFileDescription()
    {
        return ($this->manualVideoFileDescription)
            ? $this->manualVideoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setManualVideoMediaType($manualVideoMediaType = null)
    {
        $this->manualVideoMediaType = ($manualVideoMediaType InstanceOf MediaFileType)
             ? $manualVideoMediaType
             : new MediaFileType($manualVideoMediaType);
        $this->manualVideoMediaType->setElementName('manualVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $manualVideoMediaType
     */
    public function getManualVideoMediaType()
    {
        return ($this->manualVideoMediaType)
            ? $this->manualVideoMediaType->getElementValue()
            : null;
    }
}

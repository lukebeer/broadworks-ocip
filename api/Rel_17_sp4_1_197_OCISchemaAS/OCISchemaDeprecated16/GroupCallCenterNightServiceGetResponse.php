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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterNightServiceGetRequest.
 */
class GroupCallCenterNightServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterNightServiceGetResponse';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterNightServiceGetResponse $response
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
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return ($this->businessHours) ? $this->businessHours->getValue() : null;
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
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        $this->allowManualOverrideViaFAC = new PrimitiveType($allowManualOverrideViaFAC);
        $this->allowManualOverrideViaFAC->setName('allowManualOverrideViaFAC');
        return $this;
    }

    /**
     * 
     * @return boolean $allowManualOverrideViaFAC
     */
    public function getAllowManualOverrideViaFAC()
    {
        return ($this->allowManualOverrideViaFAC) ? $this->allowManualOverrideViaFAC->getValue() : null;
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
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
        $this->audioFileUrl->setName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $audioFileUrl
     */
    public function getAudioFileUrl()
    {
        return ($this->audioFileUrl) ? $this->audioFileUrl->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
        $this->audioFileDescription->setName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $audioFileDescription
     */
    public function getAudioFileDescription()
    {
        return ($this->audioFileDescription) ? $this->audioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
        $this->audioMediaType->setName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $audioMediaType
     */
    public function getAudioMediaType()
    {
        return ($this->audioMediaType) ? $this->audioMediaType->getValue() : null;
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
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
        $this->videoFileUrl->setName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $videoFileUrl
     */
    public function getVideoFileUrl()
    {
        return ($this->videoFileUrl) ? $this->videoFileUrl->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
        $this->videoFileDescription->setName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $videoFileDescription
     */
    public function getVideoFileDescription()
    {
        return ($this->videoFileDescription) ? $this->videoFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
        $this->videoMediaType->setName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $videoMediaType
     */
    public function getVideoMediaType()
    {
        return ($this->videoMediaType) ? $this->videoMediaType->getValue() : null;
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
    public function setManualAudioFileUrl($manualAudioFileUrl = null)
    {
        $this->manualAudioFileUrl = ($manualAudioFileUrl InstanceOf URL)
             ? $manualAudioFileUrl
             : new URL($manualAudioFileUrl);
        $this->manualAudioFileUrl->setName('manualAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $manualAudioFileUrl
     */
    public function getManualAudioFileUrl()
    {
        return ($this->manualAudioFileUrl) ? $this->manualAudioFileUrl->getValue() : null;
    }

    /**
     * 
     */
    public function setManualAudioFileDescription($manualAudioFileDescription = null)
    {
        $this->manualAudioFileDescription = ($manualAudioFileDescription InstanceOf FileDescription)
             ? $manualAudioFileDescription
             : new FileDescription($manualAudioFileDescription);
        $this->manualAudioFileDescription->setName('manualAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $manualAudioFileDescription
     */
    public function getManualAudioFileDescription()
    {
        return ($this->manualAudioFileDescription) ? $this->manualAudioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setManualAudioMediaType($manualAudioMediaType = null)
    {
        $this->manualAudioMediaType = ($manualAudioMediaType InstanceOf MediaFileType)
             ? $manualAudioMediaType
             : new MediaFileType($manualAudioMediaType);
        $this->manualAudioMediaType->setName('manualAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $manualAudioMediaType
     */
    public function getManualAudioMediaType()
    {
        return ($this->manualAudioMediaType) ? $this->manualAudioMediaType->getValue() : null;
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
    public function setManualVideoFileUrl($manualVideoFileUrl = null)
    {
        $this->manualVideoFileUrl = ($manualVideoFileUrl InstanceOf URL)
             ? $manualVideoFileUrl
             : new URL($manualVideoFileUrl);
        $this->manualVideoFileUrl->setName('manualVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $manualVideoFileUrl
     */
    public function getManualVideoFileUrl()
    {
        return ($this->manualVideoFileUrl) ? $this->manualVideoFileUrl->getValue() : null;
    }

    /**
     * 
     */
    public function setManualVideoFileDescription($manualVideoFileDescription = null)
    {
        $this->manualVideoFileDescription = ($manualVideoFileDescription InstanceOf FileDescription)
             ? $manualVideoFileDescription
             : new FileDescription($manualVideoFileDescription);
        $this->manualVideoFileDescription->setName('manualVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $manualVideoFileDescription
     */
    public function getManualVideoFileDescription()
    {
        return ($this->manualVideoFileDescription) ? $this->manualVideoFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setManualVideoMediaType($manualVideoMediaType = null)
    {
        $this->manualVideoMediaType = ($manualVideoMediaType InstanceOf MediaFileType)
             ? $manualVideoMediaType
             : new MediaFileType($manualVideoMediaType);
        $this->manualVideoMediaType->setName('manualVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $manualVideoMediaType
     */
    public function getManualVideoMediaType()
    {
        return ($this->manualVideoMediaType) ? $this->manualVideoMediaType->getValue() : null;
    }
}

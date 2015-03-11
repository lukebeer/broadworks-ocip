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
    public    $name                         = 'GroupCallCenterNightServiceGetResponse';
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
     * 
     */
    public function setAction($action = null)
    {
        if (!$action) return $this;
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledServiceAction
     */
    public function getAction()
    {
        return $this->action->getValue();
    }

    /**
     * 
     */
    public function setBusinessHours($businessHours = null)
    {
        if (!$businessHours) return $this;
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName
     */
    public function getBusinessHours()
    {
        return $this->businessHours->getValue();
    }

    /**
     * 
     */
    public function setForceNightService($forceNightService = null)
    {
        if (!$forceNightService) return $this;
        $this->forceNightService = new PrimitiveType($forceNightService);
        $this->forceNightService->setName('forceNightService');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForceNightService()
    {
        return $this->forceNightService->getValue();
    }

    /**
     * 
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        if (!$allowManualOverrideViaFAC) return $this;
        $this->allowManualOverrideViaFAC = new PrimitiveType($allowManualOverrideViaFAC);
        $this->allowManualOverrideViaFAC->setName('allowManualOverrideViaFAC');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowManualOverrideViaFAC()
    {
        return $this->allowManualOverrideViaFAC->getValue();
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if (!$transferPhoneNumber) return $this;
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction = null)
    {
        if (!$playAnnouncementBeforeAction) return $this;
        $this->playAnnouncementBeforeAction = new PrimitiveType($playAnnouncementBeforeAction);
        $this->playAnnouncementBeforeAction->setName('playAnnouncementBeforeAction');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return $this->playAnnouncementBeforeAction->getValue();
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        if (!$audioMessageSelection) return $this;
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        if (!$audioFileUrl) return $this;
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
        $this->audioFileUrl->setName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        if (!$audioFileDescription) return $this;
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
        $this->audioFileDescription->setName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        if (!$audioMediaType) return $this;
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
        $this->audioMediaType->setName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType->getValue();
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        if (!$videoMessageSelection) return $this;
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        if (!$videoFileUrl) return $this;
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
        $this->videoFileUrl->setName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl->getValue();
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        if (!$videoFileDescription) return $this;
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
        $this->videoFileDescription->setName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        if (!$videoMediaType) return $this;
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
        $this->videoMediaType->setName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType->getValue();
    }

    /**
     * 
     */
    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        if (!$manualAnnouncementMode) return $this;
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAnnouncementMode->setName('manualAnnouncementMode');
        return $this;
    }

    /**
     * 
     * @return CallCenterManualNightServiceAnnouncementMode
     */
    public function getManualAnnouncementMode()
    {
        return $this->manualAnnouncementMode->getValue();
    }

    /**
     * 
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        if (!$manualAudioMessageSelection) return $this;
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioMessageSelection->setName('manualAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getManualAudioMessageSelection()
    {
        return $this->manualAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setManualAudioFileUrl($manualAudioFileUrl = null)
    {
        if (!$manualAudioFileUrl) return $this;
        $this->manualAudioFileUrl = ($manualAudioFileUrl InstanceOf URL)
             ? $manualAudioFileUrl
             : new URL($manualAudioFileUrl);
        $this->manualAudioFileUrl->setName('manualAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getManualAudioFileUrl()
    {
        return $this->manualAudioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setManualAudioFileDescription($manualAudioFileDescription = null)
    {
        if (!$manualAudioFileDescription) return $this;
        $this->manualAudioFileDescription = ($manualAudioFileDescription InstanceOf FileDescription)
             ? $manualAudioFileDescription
             : new FileDescription($manualAudioFileDescription);
        $this->manualAudioFileDescription->setName('manualAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getManualAudioFileDescription()
    {
        return $this->manualAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setManualAudioMediaType($manualAudioMediaType = null)
    {
        if (!$manualAudioMediaType) return $this;
        $this->manualAudioMediaType = ($manualAudioMediaType InstanceOf MediaFileType)
             ? $manualAudioMediaType
             : new MediaFileType($manualAudioMediaType);
        $this->manualAudioMediaType->setName('manualAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getManualAudioMediaType()
    {
        return $this->manualAudioMediaType->getValue();
    }

    /**
     * 
     */
    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        if (!$manualVideoMessageSelection) return $this;
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoMessageSelection->setName('manualVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getManualVideoMessageSelection()
    {
        return $this->manualVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setManualVideoFileUrl($manualVideoFileUrl = null)
    {
        if (!$manualVideoFileUrl) return $this;
        $this->manualVideoFileUrl = ($manualVideoFileUrl InstanceOf URL)
             ? $manualVideoFileUrl
             : new URL($manualVideoFileUrl);
        $this->manualVideoFileUrl->setName('manualVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getManualVideoFileUrl()
    {
        return $this->manualVideoFileUrl->getValue();
    }

    /**
     * 
     */
    public function setManualVideoFileDescription($manualVideoFileDescription = null)
    {
        if (!$manualVideoFileDescription) return $this;
        $this->manualVideoFileDescription = ($manualVideoFileDescription InstanceOf FileDescription)
             ? $manualVideoFileDescription
             : new FileDescription($manualVideoFileDescription);
        $this->manualVideoFileDescription->setName('manualVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getManualVideoFileDescription()
    {
        return $this->manualVideoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setManualVideoMediaType($manualVideoMediaType = null)
    {
        if (!$manualVideoMediaType) return $this;
        $this->manualVideoMediaType = ($manualVideoMediaType InstanceOf MediaFileType)
             ? $manualVideoMediaType
             : new MediaFileType($manualVideoMediaType);
        $this->manualVideoMediaType->setName('manualVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getManualVideoMediaType()
    {
        return $this->manualVideoMediaType->getValue();
    }
}

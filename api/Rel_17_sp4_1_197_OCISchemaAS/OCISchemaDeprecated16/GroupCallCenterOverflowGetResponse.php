<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterOverflowProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterOverflowGetRequest.
 */
class GroupCallCenterOverflowGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $action                                    = null;
    protected $transferPhoneNumber                       = null;
    protected $overflowAfterTimeout                      = null;
    protected $timeoutSeconds                            = null;
    protected $playAnnouncementBeforeOverflowProcessing  = null;
    protected $audioMessageSelection                     = null;
    protected $audioFileUrl                              = null;
    protected $audioFileDescription                      = null;
    protected $audioMediaType                            = null;
    protected $videoMessageSelection                     = null;
    protected $videoFileUrl                              = null;
    protected $videoFileDescription                      = null;
    protected $videoMediaType                            = null;


    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterOverflowProcessingAction)
             ? $action
             : new CallCenterOverflowProcessingAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setOverflowAfterTimeout(xs:boolean $overflowAfterTimeout = null)
    {
    }

    public function getOverflowAfterTimeout()
    {
        return (!$this->overflowAfterTimeout) ?: $this->overflowAfterTimeout->value();
    }

    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $timeoutSeconds
             : new HuntForwardTimeoutSeconds($timeoutSeconds);
    }

    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->value();
    }

    public function setPlayAnnouncementBeforeOverflowProcessing(xs:boolean $playAnnouncementBeforeOverflowProcessing = null)
    {
    }

    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return (!$this->playAnnouncementBeforeOverflowProcessing) ?: $this->playAnnouncementBeforeOverflowProcessing->value();
    }

    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->value();
    }

    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
    }

    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->value();
    }

    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
    }
}

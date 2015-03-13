<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterOverflowProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterOverflowGetRequest17 .
 */
class GroupCallCenterOverflowGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                     = 'GroupCallCenterOverflowGetResponse17';
    protected $action                                   = null;
    protected $transferPhoneNumber                      = null;
    protected $overflowAfterTimeout                     = null;
    protected $timeoutSeconds                           = null;
    protected $playAnnouncementBeforeOverflowProcessing = null;
    protected $audioMessageSelection                    = null;
    protected $audioUrlList                             = null;
    protected $audioFileList                            = null;
    protected $audioMediaTypeList                       = null;
    protected $videoMessageSelection                    = null;
    protected $videoUrlList                             = null;
    protected $videoFileList                            = null;
    protected $videoMediaTypeList                       = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterOverflowGetResponse17 $response
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
        $this->action = ($action InstanceOf CallCenterOverflowProcessingAction)
             ? $action
             : new CallCenterOverflowProcessingAction($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterOverflowProcessingAction $action
     */
    public function getAction()
    {
        return $this->action->getValue();
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
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setOverflowAfterTimeout($overflowAfterTimeout = null)
    {
        if (!$overflowAfterTimeout) return $this;
        $this->overflowAfterTimeout = new PrimitiveType($overflowAfterTimeout);
        $this->overflowAfterTimeout->setName('overflowAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $overflowAfterTimeout
     */
    public function getOverflowAfterTimeout()
    {
        return $this->overflowAfterTimeout->getValue();
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        if (!$timeoutSeconds) return $this;
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $timeoutSeconds
             : new HuntForwardTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing = null)
    {
        if (!$playAnnouncementBeforeOverflowProcessing) return $this;
        $this->playAnnouncementBeforeOverflowProcessing = new PrimitiveType($playAnnouncementBeforeOverflowProcessing);
        $this->playAnnouncementBeforeOverflowProcessing->setName('playAnnouncementBeforeOverflowProcessing');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeOverflowProcessing
     */
    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return $this->playAnnouncementBeforeOverflowProcessing->getValue();
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
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
        if (!$audioUrlList) return $this;
        $this->audioUrlList = $audioUrlList;
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
        if (!$audioFileList) return $this;
        $this->audioFileList = $audioFileList;
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
        if (!$audioMediaTypeList) return $this;
        $this->audioMediaTypeList = $audioMediaTypeList;
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
        if (!$videoMessageSelection) return $this;
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
        return $this->videoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
        if (!$videoUrlList) return $this;
        $this->videoUrlList = $videoUrlList;
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
        if (!$videoFileList) return $this;
        $this->videoFileList = $videoFileList;
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
        if (!$videoMediaTypeList) return $this;
        $this->videoMediaTypeList = $videoMediaTypeList;
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
}

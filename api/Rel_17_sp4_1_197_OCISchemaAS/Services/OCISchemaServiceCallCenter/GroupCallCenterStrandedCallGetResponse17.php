<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStrandedCallProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterStrandedCallGetRequest17.
 */
class GroupCallCenterStrandedCallGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $action                 = null;
    protected $transferPhoneNumber    = null;
    protected $audioMessageSelection  = null;
    protected $audioUrlList           = null;
    protected $audioFileList          = null;
    protected $audioMediaTypeList     = null;
    protected $videoMessageSelection  = null;
    protected $videoUrlList           = null;
    protected $videoFileList          = null;
    protected $videoMediaTypeList     = null;


    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterStrandedCallProcessingAction)
             ? $action
             : new CallCenterStrandedCallProcessingAction($action);
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

    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
    }

    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->value();
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

    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }

    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
    }

    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->value();
    }
}

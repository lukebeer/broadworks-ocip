<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's forced forwarding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterForcedForwardingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $serviceUserId                     = null;
    protected $isActive                          = null;
    protected $forwardToPhoneNumber              = null;
    protected $allowEnableViaFAC                 = null;
    protected $playAnnouncementBeforeForwarding  = null;
    protected $audioMessageSelection             = null;
    protected $audioFile                         = null;
    protected $videoMessageSelection             = null;
    protected $videoFile                         = null;

    public function __construct(
         $serviceUserId,
         $isActive = null,
         $forwardToPhoneNumber = null,
         $allowEnableViaFAC = null,
         $playAnnouncementBeforeForwarding = null,
         $audioMessageSelection = null,
         ExtendedMediaFileResource $audioFile = null,
         $videoMessageSelection = null,
         ExtendedMediaFileResource $videoFile = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setAllowEnableViaFAC($allowEnableViaFAC);
        $this->setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoFile($videoFile);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setAllowEnableViaFAC(xs:boolean $allowEnableViaFAC = null)
    {
    }

    public function getAllowEnableViaFAC()
    {
        return (!$this->allowEnableViaFAC) ?: $this->allowEnableViaFAC->value();
    }

    public function setPlayAnnouncementBeforeForwarding(xs:boolean $playAnnouncementBeforeForwarding = null)
    {
    }

    public function getPlayAnnouncementBeforeForwarding()
    {
        return (!$this->playAnnouncementBeforeForwarding) ?: $this->playAnnouncementBeforeForwarding->value();
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

    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
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

    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }
}

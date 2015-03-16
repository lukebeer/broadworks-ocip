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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's forced forwarding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterForcedForwardingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterForcedForwardingModifyRequest';
    protected $serviceUserId;
    protected $isActive;
    protected $forwardToPhoneNumber;
    protected $allowEnableViaFAC;
    protected $playAnnouncementBeforeForwarding;
    protected $audioMessageSelection;
    protected $audioFile;
    protected $videoMessageSelection;
    protected $videoFile;

    public function __construct(
         $serviceUserId = '',
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
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber) ? $this->forwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowEnableViaFAC($allowEnableViaFAC = null)
    {
        $this->allowEnableViaFAC = new PrimitiveType($allowEnableViaFAC);
        $this->allowEnableViaFAC->setName('allowEnableViaFAC');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnableViaFAC
     */
    public function getAllowEnableViaFAC()
    {
        return ($this->allowEnableViaFAC) ? $this->allowEnableViaFAC->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding = null)
    {
        $this->playAnnouncementBeforeForwarding = new PrimitiveType($playAnnouncementBeforeForwarding);
        $this->playAnnouncementBeforeForwarding->setName('playAnnouncementBeforeForwarding');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeForwarding
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return ($this->playAnnouncementBeforeForwarding) ? $this->playAnnouncementBeforeForwarding->getValue() : null;
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
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf ExtendedMediaFileResource)
             ? $audioFile
             : new ExtendedMediaFileResource($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
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
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf ExtendedMediaFileResource)
             ? $videoFile
             : new ExtendedMediaFileResource($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }
}

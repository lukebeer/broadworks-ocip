<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterForcedForwardingGetRequest.
 */
class GroupCallCenterForcedForwardingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterForcedForwardingGetResponse';
    protected $isActive;
    protected $forwardToPhoneNumber;
    protected $allowEnableViaFAC;
    protected $playAnnouncementBeforeForwarding;
    protected $audioMessageSelection;
    protected $audioFileUrl;
    protected $audioFileDescription;
    protected $audioMediaType;
    protected $videoMessageSelection;
    protected $videoFileUrl;
    protected $videoFileDescription;
    protected $videoMediaType;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterForcedForwardingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setElementName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber)
            ? $this->forwardToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowEnableViaFAC($allowEnableViaFAC = null)
    {
        $this->allowEnableViaFAC = new PrimitiveType($allowEnableViaFAC);
        $this->allowEnableViaFAC->setElementName('allowEnableViaFAC');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnableViaFAC
     */
    public function getAllowEnableViaFAC()
    {
        return ($this->allowEnableViaFAC)
            ? $this->allowEnableViaFAC->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding = null)
    {
        $this->playAnnouncementBeforeForwarding = new PrimitiveType($playAnnouncementBeforeForwarding);
        $this->playAnnouncementBeforeForwarding->setElementName('playAnnouncementBeforeForwarding');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeForwarding
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return ($this->playAnnouncementBeforeForwarding)
            ? $this->playAnnouncementBeforeForwarding->getElementValue()
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
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterForcedForwardingGetRequest.
 */
class GroupCallCenterForcedForwardingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterForcedForwardingGetResponse';
    public    $name                             = __CLASS__;
    protected $isActive                         = null;
    protected $forwardToPhoneNumber             = null;
    protected $allowEnableViaFAC                = null;
    protected $playAnnouncementBeforeForwarding = null;
    protected $audioMessageSelection            = null;
    protected $audioFileUrl                     = null;
    protected $audioFileDescription             = null;
    protected $audioMediaType                   = null;
    protected $videoMessageSelection            = null;
    protected $videoFileUrl                     = null;
    protected $videoFileDescription             = null;
    protected $videoMediaType                   = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAllowEnableViaFAC($allowEnableViaFAC = null)
    {
        $this->allowEnableViaFAC = (boolean) $allowEnableViaFAC;
    }

    /**
     * 
     */
    public function getAllowEnableViaFAC()
    {
        return (!$this->allowEnableViaFAC) ?: $this->allowEnableViaFAC->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding = null)
    {
        $this->playAnnouncementBeforeForwarding = (boolean) $playAnnouncementBeforeForwarding;
    }

    /**
     * 
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return (!$this->playAnnouncementBeforeForwarding) ?: $this->playAnnouncementBeforeForwarding->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->getValue();
    }

    /**
     * URL.
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    /**
     * URL.
     */
    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->getValue();
    }

    /**
     * URL.
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    /**
     * URL.
     */
    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->getValue();
    }
}

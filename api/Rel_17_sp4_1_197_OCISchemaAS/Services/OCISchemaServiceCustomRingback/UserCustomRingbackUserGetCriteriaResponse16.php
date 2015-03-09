<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomRingback\UserCustomRingbackUserGetCriteriaResponse16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCustomRingbackUserGetCriteriaRequest16.
 */
class UserCustomRingbackUserGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $timeSchedule                    = null;
    protected $holidaySchedule                 = null;
    protected $blacklisted                     = null;
    protected $fromDnCriteria                  = null;
    protected $audioSelection                  = null;
    protected $audioFileDescription            = null;
    protected $audioMediaType                  = null;
    protected $audioFileUrl                    = null;
    protected $videoSelection                  = null;
    protected $videoFileDescription            = null;
    protected $videoMediaType                  = null;
    protected $videoFileUrl                    = null;
    protected $callWaitingAudioSelection       = null;
    protected $callWaitingAudioFileDescription = null;
    protected $callWaitingAudioMediaType       = null;
    protected $callWaitingAudioFileUrl         = null;
    protected $callWaitingVideoSelection       = null;
    protected $callWaitingVideoFileDescription = null;
    protected $callWaitingVideoMediaType       = null;
    protected $callWaitingVideoFileUrl         = null;

    /**
     * @return UserCustomRingbackUserGetCriteriaResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * The from dn criteria.
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule =  $timeSchedule;
    }

    /**
     * The from dn criteria.
     */
    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->getValue();
    }

    /**
     * Holiday Schedule.
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule =  $holidaySchedule;
    }

    /**
     * Holiday Schedule.
     */
    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->getValue();
    }

    /**
     * 
     */
    public function setBlacklisted($blacklisted = null)
    {
        $this->blacklisted = (boolean) $blacklisted;
    }

    /**
     * 
     */
    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted;
    }

    /**
     * The from dn criteria used within an add/get request.
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        $this->fromDnCriteria =  $fromDnCriteria;
    }

    /**
     * The from dn criteria used within an add/get request.
     */
    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->getValue();
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
     * Choices for extended file resource usage.
     */
    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->getValue();
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
     * Choices for extended file resource usage.
     */
    public function setCallWaitingAudioSelection($callWaitingAudioSelection = null)
    {
        $this->callWaitingAudioSelection = ($callWaitingAudioSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingAudioSelection
             : new ExtendedFileResourceSelection($callWaitingAudioSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getCallWaitingAudioSelection()
    {
        return (!$this->callWaitingAudioSelection) ?: $this->callWaitingAudioSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription = null)
    {
        $this->callWaitingAudioFileDescription = ($callWaitingAudioFileDescription InstanceOf FileDescription)
             ? $callWaitingAudioFileDescription
             : new FileDescription($callWaitingAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getCallWaitingAudioFileDescription()
    {
        return (!$this->callWaitingAudioFileDescription) ?: $this->callWaitingAudioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setCallWaitingAudioMediaType($callWaitingAudioMediaType = null)
    {
        $this->callWaitingAudioMediaType = ($callWaitingAudioMediaType InstanceOf MediaFileType)
             ? $callWaitingAudioMediaType
             : new MediaFileType($callWaitingAudioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getCallWaitingAudioMediaType()
    {
        return (!$this->callWaitingAudioMediaType) ?: $this->callWaitingAudioMediaType->getValue();
    }

    /**
     * URL.
     */
    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl = null)
    {
        $this->callWaitingAudioFileUrl = ($callWaitingAudioFileUrl InstanceOf URL)
             ? $callWaitingAudioFileUrl
             : new URL($callWaitingAudioFileUrl);
    }

    /**
     * URL.
     */
    public function getCallWaitingAudioFileUrl()
    {
        return (!$this->callWaitingAudioFileUrl) ?: $this->callWaitingAudioFileUrl->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setCallWaitingVideoSelection($callWaitingVideoSelection = null)
    {
        $this->callWaitingVideoSelection = ($callWaitingVideoSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingVideoSelection
             : new ExtendedFileResourceSelection($callWaitingVideoSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getCallWaitingVideoSelection()
    {
        return (!$this->callWaitingVideoSelection) ?: $this->callWaitingVideoSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription = null)
    {
        $this->callWaitingVideoFileDescription = ($callWaitingVideoFileDescription InstanceOf FileDescription)
             ? $callWaitingVideoFileDescription
             : new FileDescription($callWaitingVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getCallWaitingVideoFileDescription()
    {
        return (!$this->callWaitingVideoFileDescription) ?: $this->callWaitingVideoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setCallWaitingVideoMediaType($callWaitingVideoMediaType = null)
    {
        $this->callWaitingVideoMediaType = ($callWaitingVideoMediaType InstanceOf MediaFileType)
             ? $callWaitingVideoMediaType
             : new MediaFileType($callWaitingVideoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getCallWaitingVideoMediaType()
    {
        return (!$this->callWaitingVideoMediaType) ?: $this->callWaitingVideoMediaType->getValue();
    }

    /**
     * URL.
     */
    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl = null)
    {
        $this->callWaitingVideoFileUrl = ($callWaitingVideoFileUrl InstanceOf URL)
             ? $callWaitingVideoFileUrl
             : new URL($callWaitingVideoFileUrl);
    }

    /**
     * URL.
     */
    public function getCallWaitingVideoFileUrl()
    {
        return (!$this->callWaitingVideoFileUrl) ?: $this->callWaitingVideoFileUrl->getValue();
    }
}

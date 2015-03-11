<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCustomRingbackUserGetCriteriaRequest16.
 */
class UserCustomRingbackUserGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                            = 'UserCustomRingbackUserGetCriteriaResponse16';
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
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = $timeSchedule;
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        if (!$holidaySchedule) return $this;
        $this->holidaySchedule = $holidaySchedule;
        $this->holidaySchedule->setName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setBlacklisted($blacklisted = null)
    {
        if (!$blacklisted) return $this;
        $this->blacklisted = new PrimitiveType($blacklisted);
        $this->blacklisted->setName('blacklisted');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBlacklisted()
    {
        return $this->blacklisted->getValue();
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        if (!$fromDnCriteria) return $this;
        $this->fromDnCriteria = $fromDnCriteria;
        $this->fromDnCriteria->setName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * 
     */
    public function setAudioSelection($audioSelection = null)
    {
        if (!$audioSelection) return $this;
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
        $this->audioSelection->setName('audioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getAudioSelection()
    {
        return $this->audioSelection->getValue();
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
    public function setVideoSelection($videoSelection = null)
    {
        if (!$videoSelection) return $this;
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
        $this->videoSelection->setName('videoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getVideoSelection()
    {
        return $this->videoSelection->getValue();
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
    public function setCallWaitingAudioSelection($callWaitingAudioSelection = null)
    {
        if (!$callWaitingAudioSelection) return $this;
        $this->callWaitingAudioSelection = ($callWaitingAudioSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingAudioSelection
             : new ExtendedFileResourceSelection($callWaitingAudioSelection);
        $this->callWaitingAudioSelection->setName('callWaitingAudioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getCallWaitingAudioSelection()
    {
        return $this->callWaitingAudioSelection->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription = null)
    {
        if (!$callWaitingAudioFileDescription) return $this;
        $this->callWaitingAudioFileDescription = ($callWaitingAudioFileDescription InstanceOf FileDescription)
             ? $callWaitingAudioFileDescription
             : new FileDescription($callWaitingAudioFileDescription);
        $this->callWaitingAudioFileDescription->setName('callWaitingAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getCallWaitingAudioFileDescription()
    {
        return $this->callWaitingAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingAudioMediaType($callWaitingAudioMediaType = null)
    {
        if (!$callWaitingAudioMediaType) return $this;
        $this->callWaitingAudioMediaType = ($callWaitingAudioMediaType InstanceOf MediaFileType)
             ? $callWaitingAudioMediaType
             : new MediaFileType($callWaitingAudioMediaType);
        $this->callWaitingAudioMediaType->setName('callWaitingAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getCallWaitingAudioMediaType()
    {
        return $this->callWaitingAudioMediaType->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl = null)
    {
        if (!$callWaitingAudioFileUrl) return $this;
        $this->callWaitingAudioFileUrl = ($callWaitingAudioFileUrl InstanceOf URL)
             ? $callWaitingAudioFileUrl
             : new URL($callWaitingAudioFileUrl);
        $this->callWaitingAudioFileUrl->setName('callWaitingAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getCallWaitingAudioFileUrl()
    {
        return $this->callWaitingAudioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingVideoSelection($callWaitingVideoSelection = null)
    {
        if (!$callWaitingVideoSelection) return $this;
        $this->callWaitingVideoSelection = ($callWaitingVideoSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingVideoSelection
             : new ExtendedFileResourceSelection($callWaitingVideoSelection);
        $this->callWaitingVideoSelection->setName('callWaitingVideoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getCallWaitingVideoSelection()
    {
        return $this->callWaitingVideoSelection->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription = null)
    {
        if (!$callWaitingVideoFileDescription) return $this;
        $this->callWaitingVideoFileDescription = ($callWaitingVideoFileDescription InstanceOf FileDescription)
             ? $callWaitingVideoFileDescription
             : new FileDescription($callWaitingVideoFileDescription);
        $this->callWaitingVideoFileDescription->setName('callWaitingVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getCallWaitingVideoFileDescription()
    {
        return $this->callWaitingVideoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingVideoMediaType($callWaitingVideoMediaType = null)
    {
        if (!$callWaitingVideoMediaType) return $this;
        $this->callWaitingVideoMediaType = ($callWaitingVideoMediaType InstanceOf MediaFileType)
             ? $callWaitingVideoMediaType
             : new MediaFileType($callWaitingVideoMediaType);
        $this->callWaitingVideoMediaType->setName('callWaitingVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getCallWaitingVideoMediaType()
    {
        return $this->callWaitingVideoMediaType->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl = null)
    {
        if (!$callWaitingVideoFileUrl) return $this;
        $this->callWaitingVideoFileUrl = ($callWaitingVideoFileUrl InstanceOf URL)
             ? $callWaitingVideoFileUrl
             : new URL($callWaitingVideoFileUrl);
        $this->callWaitingVideoFileUrl->setName('callWaitingVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getCallWaitingVideoFileUrl()
    {
        return $this->callWaitingVideoFileUrl->getValue();
    }
}

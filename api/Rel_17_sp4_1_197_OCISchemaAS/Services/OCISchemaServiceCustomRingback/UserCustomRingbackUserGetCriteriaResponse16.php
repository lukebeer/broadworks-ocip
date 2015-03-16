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
    public    $elementName = 'UserCustomRingbackUserGetCriteriaResponse16';
    protected $timeSchedule;
    protected $holidaySchedule;
    protected $blacklisted;
    protected $fromDnCriteria;
    protected $audioSelection;
    protected $audioFileDescription;
    protected $audioMediaType;
    protected $audioFileUrl;
    protected $videoSelection;
    protected $videoFileDescription;
    protected $videoMediaType;
    protected $videoFileUrl;
    protected $callWaitingAudioSelection;
    protected $callWaitingAudioFileDescription;
    protected $callWaitingAudioMediaType;
    protected $callWaitingAudioFileUrl;
    protected $callWaitingVideoSelection;
    protected $callWaitingVideoFileDescription;
    protected $callWaitingVideoMediaType;
    protected $callWaitingVideoFileUrl;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCustomRingback\UserCustomRingbackUserGetCriteriaResponse16 $response
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
        $this->timeSchedule = ($timeSchedule InstanceOf TimeSchedule)
             ? $timeSchedule
             : new TimeSchedule($timeSchedule);
        $this->timeSchedule->setElementName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $timeSchedule
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
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule $holidaySchedule
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
        $this->blacklisted = new PrimitiveType($blacklisted);
        $this->blacklisted->setElementName('blacklisted');
        return $this;
    }

    /**
     * 
     * @return boolean $blacklisted
     */
    public function getBlacklisted()
    {
        return ($this->blacklisted)
            ? $this->blacklisted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        $this->fromDnCriteria = ($fromDnCriteria InstanceOf CriteriaFromDn)
             ? $fromDnCriteria
             : new CriteriaFromDn($fromDnCriteria);
        $this->fromDnCriteria->setElementName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDn $fromDnCriteria
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
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
        $this->audioSelection->setElementName('audioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioSelection
     */
    public function getAudioSelection()
    {
        return ($this->audioSelection)
            ? $this->audioSelection->getElementValue()
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
    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
        $this->videoSelection->setElementName('videoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoSelection
     */
    public function getVideoSelection()
    {
        return ($this->videoSelection)
            ? $this->videoSelection->getElementValue()
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
    public function setCallWaitingAudioSelection($callWaitingAudioSelection = null)
    {
        $this->callWaitingAudioSelection = ($callWaitingAudioSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingAudioSelection
             : new ExtendedFileResourceSelection($callWaitingAudioSelection);
        $this->callWaitingAudioSelection->setElementName('callWaitingAudioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $callWaitingAudioSelection
     */
    public function getCallWaitingAudioSelection()
    {
        return ($this->callWaitingAudioSelection)
            ? $this->callWaitingAudioSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription = null)
    {
        $this->callWaitingAudioFileDescription = ($callWaitingAudioFileDescription InstanceOf FileDescription)
             ? $callWaitingAudioFileDescription
             : new FileDescription($callWaitingAudioFileDescription);
        $this->callWaitingAudioFileDescription->setElementName('callWaitingAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $callWaitingAudioFileDescription
     */
    public function getCallWaitingAudioFileDescription()
    {
        return ($this->callWaitingAudioFileDescription)
            ? $this->callWaitingAudioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingAudioMediaType($callWaitingAudioMediaType = null)
    {
        $this->callWaitingAudioMediaType = ($callWaitingAudioMediaType InstanceOf MediaFileType)
             ? $callWaitingAudioMediaType
             : new MediaFileType($callWaitingAudioMediaType);
        $this->callWaitingAudioMediaType->setElementName('callWaitingAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $callWaitingAudioMediaType
     */
    public function getCallWaitingAudioMediaType()
    {
        return ($this->callWaitingAudioMediaType)
            ? $this->callWaitingAudioMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl = null)
    {
        $this->callWaitingAudioFileUrl = ($callWaitingAudioFileUrl InstanceOf URL)
             ? $callWaitingAudioFileUrl
             : new URL($callWaitingAudioFileUrl);
        $this->callWaitingAudioFileUrl->setElementName('callWaitingAudioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $callWaitingAudioFileUrl
     */
    public function getCallWaitingAudioFileUrl()
    {
        return ($this->callWaitingAudioFileUrl)
            ? $this->callWaitingAudioFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingVideoSelection($callWaitingVideoSelection = null)
    {
        $this->callWaitingVideoSelection = ($callWaitingVideoSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingVideoSelection
             : new ExtendedFileResourceSelection($callWaitingVideoSelection);
        $this->callWaitingVideoSelection->setElementName('callWaitingVideoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $callWaitingVideoSelection
     */
    public function getCallWaitingVideoSelection()
    {
        return ($this->callWaitingVideoSelection)
            ? $this->callWaitingVideoSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription = null)
    {
        $this->callWaitingVideoFileDescription = ($callWaitingVideoFileDescription InstanceOf FileDescription)
             ? $callWaitingVideoFileDescription
             : new FileDescription($callWaitingVideoFileDescription);
        $this->callWaitingVideoFileDescription->setElementName('callWaitingVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $callWaitingVideoFileDescription
     */
    public function getCallWaitingVideoFileDescription()
    {
        return ($this->callWaitingVideoFileDescription)
            ? $this->callWaitingVideoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingVideoMediaType($callWaitingVideoMediaType = null)
    {
        $this->callWaitingVideoMediaType = ($callWaitingVideoMediaType InstanceOf MediaFileType)
             ? $callWaitingVideoMediaType
             : new MediaFileType($callWaitingVideoMediaType);
        $this->callWaitingVideoMediaType->setElementName('callWaitingVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $callWaitingVideoMediaType
     */
    public function getCallWaitingVideoMediaType()
    {
        return ($this->callWaitingVideoMediaType)
            ? $this->callWaitingVideoMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl = null)
    {
        $this->callWaitingVideoFileUrl = ($callWaitingVideoFileUrl InstanceOf URL)
             ? $callWaitingVideoFileUrl
             : new URL($callWaitingVideoFileUrl);
        $this->callWaitingVideoFileUrl->setElementName('callWaitingVideoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL $callWaitingVideoFileUrl
     */
    public function getCallWaitingVideoFileUrl()
    {
        return ($this->callWaitingVideoFileUrl)
            ? $this->callWaitingVideoFileUrl->getElementValue()
            : null;
    }
}

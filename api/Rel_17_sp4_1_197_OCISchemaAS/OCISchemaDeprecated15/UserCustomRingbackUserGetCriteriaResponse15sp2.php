<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCustomRingbackUserGetCriteriaRequest15sp2.
 *         Replaced By: UserCustomRingbackUserAddCriteriaResponse16
 */
class UserCustomRingbackUserGetCriteriaResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $timeSchedule                    = null;
    protected $fromDnCriteria                  = null;
    protected $audioSelection                  = null;
    protected $audioFileDescription            = null;
    protected $audioFileUrl                    = null;
    protected $videoSelection                  = null;
    protected $videoFileDescription            = null;
    protected $videoFileUrl                    = null;
    protected $callWaitingAudioSelection       = null;
    protected $callWaitingAudioFileDescription = null;
    protected $callWaitingAudioFileUrl         = null;
    protected $callWaitingVideoSelection       = null;
    protected $callWaitingVideoFileDescription = null;
    protected $callWaitingVideoFileUrl         = null;


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

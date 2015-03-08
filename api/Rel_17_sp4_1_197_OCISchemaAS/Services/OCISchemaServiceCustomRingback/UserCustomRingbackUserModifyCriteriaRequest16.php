<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDnModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a criteria for the user's custom ringback service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCustomRingbackUserModifyCriteriaRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $userId                    = null;
    protected $criteriaName              = null;
    protected $newCriteriaName           = null;
    protected $timeSchedule              = null;
    protected $holidaySchedule           = null;
    protected $blacklisted               = null;
    protected $fromDnCriteria            = null;
    protected $audioSelection            = null;
    protected $audioFile                 = null;
    protected $videoSelection            = null;
    protected $videoFile                 = null;
    protected $callWaitingAudioSelection = null;
    protected $callWaitingAudioFile      = null;
    protected $callWaitingVideoSelection = null;
    protected $callWaitingVideoFile      = null;

    public function __construct(
         $userId,
         $criteriaName,
         $newCriteriaName = null,
         TimeSchedule $timeSchedule = null,
         HolidaySchedule $holidaySchedule = null,
         $blacklisted = null,
         CriteriaFromDnModify $fromDnCriteria = null,
         $audioSelection = null,
         ExtendedMediaFileResource $audioFile = null,
         $videoSelection = null,
         ExtendedMediaFileResource $videoFile = null,
         $callWaitingAudioSelection = null,
         ExtendedMediaFileResource $callWaitingAudioFile = null,
         $callWaitingVideoSelection = null,
         ExtendedMediaFileResource $callWaitingVideoFile = null
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setNewCriteriaName($newCriteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setBlacklisted($blacklisted);
        $this->setFromDnCriteria($fromDnCriteria);
        $this->setAudioSelection($audioSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoSelection($videoSelection);
        $this->setVideoFile($videoFile);
        $this->setCallWaitingAudioSelection($callWaitingAudioSelection);
        $this->setCallWaitingAudioFile($callWaitingAudioFile);
        $this->setCallWaitingVideoSelection($callWaitingVideoSelection);
        $this->setCallWaitingVideoFile($callWaitingVideoFile);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Criteria Name
     */
    public function setCriteriaName($criteriaName = null)
    {
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
    }

    /**
     * Criteria Name
     */
    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->getValue();
    }

    /**
     * Criteria Name
     */
    public function setNewCriteriaName($newCriteriaName = null)
    {
        $this->newCriteriaName = ($newCriteriaName InstanceOf CriteriaName)
             ? $newCriteriaName
             : new CriteriaName($newCriteriaName);
    }

    /**
     * Criteria Name
     */
    public function getNewCriteriaName()
    {
        return (!$this->newCriteriaName) ?: $this->newCriteriaName->getValue();
    }

    /**
     * The from dn criteria.
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = TimeSchedule $timeSchedule;
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
        $this->holidaySchedule = HolidaySchedule $holidaySchedule;
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
        return (!$this->blacklisted) ?: $this->blacklisted->getValue();
    }

    /**
     * The from dn criteria used within a modify request.
     */
    public function setFromDnCriteria(CriteriaFromDnModify $fromDnCriteria = null)
    {
        $this->fromDnCriteria = CriteriaFromDnModify $fromDnCriteria;
    }

    /**
     * The from dn criteria used within a modify request.
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
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile = ExtendedMediaFileResource $audioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->getValue();
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
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile = ExtendedMediaFileResource $videoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->getValue();
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
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setCallWaitingAudioFile(ExtendedMediaFileResource $callWaitingAudioFile = null)
    {
        $this->callWaitingAudioFile = ExtendedMediaFileResource $callWaitingAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getCallWaitingAudioFile()
    {
        return (!$this->callWaitingAudioFile) ?: $this->callWaitingAudioFile->getValue();
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
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setCallWaitingVideoFile(ExtendedMediaFileResource $callWaitingVideoFile = null)
    {
        $this->callWaitingVideoFile = ExtendedMediaFileResource $callWaitingVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getCallWaitingVideoFile()
    {
        return (!$this->callWaitingVideoFile) ?: $this->callWaitingVideoFile->getValue();
    }
}

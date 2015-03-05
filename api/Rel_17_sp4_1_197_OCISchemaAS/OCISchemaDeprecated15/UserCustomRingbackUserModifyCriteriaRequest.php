<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDnModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a criteria for the user's custom ringback service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCustomRingbackUserModifyCriteriaRequest16
 */
class UserCustomRingbackUserModifyCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $criteriaName,
             $newCriteriaName=null,
             TimeSchedule $timeSchedule=null,
             CriteriaFromDnModify $fromDnCriteria=null,
             $audioSelection=null,
             ExtendedFileResource $audioFile=null,
             $videoSelection=null,
             ExtendedFileResource $videoFile=null,
             $callWaitingAudioSelection=null,
             ExtendedFileResource $callWaitingAudioFile=null,
             $callWaitingVideoSelection=null,
             ExtendedFileResource $callWaitingVideoFile=null
    ) {
        $this->userId                    = new UserId($userId);
        $this->criteriaName              = new CriteriaName($criteriaName);
        $this->newCriteriaName           = new CriteriaName($newCriteriaName);
        $this->timeSchedule              = $timeSchedule;
        $this->fromDnCriteria            = $fromDnCriteria;
        $this->audioSelection            = new ExtendedFileResourceSelection($audioSelection);
        $this->audioFile                 = $audioFile;
        $this->videoSelection            = new ExtendedFileResourceSelection($videoSelection);
        $this->videoFile                 = $videoFile;
        $this->callWaitingAudioSelection = new ExtendedFileResourceSelection($callWaitingAudioSelection);
        $this->callWaitingAudioFile      = $callWaitingAudioFile;
        $this->callWaitingVideoSelection = new ExtendedFileResourceSelection($callWaitingVideoSelection);
        $this->callWaitingVideoFile      = $callWaitingVideoFile;
        $this->args                      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCriteriaName($criteriaName)
    {
        $criteriaName and $this->criteriaName = new CriteriaName($criteriaName);
    }

    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->value();
    }

    public function setNewCriteriaName($newCriteriaName)
    {
        $newCriteriaName and $this->newCriteriaName = new CriteriaName($newCriteriaName);
    }

    public function getNewCriteriaName()
    {
        return (!$this->newCriteriaName) ?: $this->newCriteriaName->value();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new TimeSchedule($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setFromDnCriteria($fromDnCriteria)
    {
        $fromDnCriteria and $this->fromDnCriteria = new CriteriaFromDnModify($fromDnCriteria);
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }

    public function setAudioSelection($audioSelection)
    {
        $audioSelection and $this->audioSelection = new ExtendedFileResourceSelection($audioSelection);
    }

    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->value();
    }

    public function setAudioFile($audioFile)
    {
        $audioFile and $this->audioFile = new ExtendedFileResource($audioFile);
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoSelection($videoSelection)
    {
        $videoSelection and $this->videoSelection = new ExtendedFileResourceSelection($videoSelection);
    }

    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->value();
    }

    public function setVideoFile($videoFile)
    {
        $videoFile and $this->videoFile = new ExtendedFileResource($videoFile);
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }

    public function setCallWaitingAudioSelection($callWaitingAudioSelection)
    {
        $callWaitingAudioSelection and $this->callWaitingAudioSelection = new ExtendedFileResourceSelection($callWaitingAudioSelection);
    }

    public function getCallWaitingAudioSelection()
    {
        return (!$this->callWaitingAudioSelection) ?: $this->callWaitingAudioSelection->value();
    }

    public function setCallWaitingAudioFile($callWaitingAudioFile)
    {
        $callWaitingAudioFile and $this->callWaitingAudioFile = new ExtendedFileResource($callWaitingAudioFile);
    }

    public function getCallWaitingAudioFile()
    {
        return (!$this->callWaitingAudioFile) ?: $this->callWaitingAudioFile->value();
    }

    public function setCallWaitingVideoSelection($callWaitingVideoSelection)
    {
        $callWaitingVideoSelection and $this->callWaitingVideoSelection = new ExtendedFileResourceSelection($callWaitingVideoSelection);
    }

    public function getCallWaitingVideoSelection()
    {
        return (!$this->callWaitingVideoSelection) ?: $this->callWaitingVideoSelection->value();
    }

    public function setCallWaitingVideoFile($callWaitingVideoFile)
    {
        $callWaitingVideoFile and $this->callWaitingVideoFile = new ExtendedFileResource($callWaitingVideoFile);
    }

    public function getCallWaitingVideoFile()
    {
        return (!$this->callWaitingVideoFile) ?: $this->callWaitingVideoFile->value();
    }
}

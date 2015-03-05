<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's pre-alerting service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPreAlertingAnnouncementModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $audioSelection=null,
             ExtendedMediaFileResource $audioFile=null,
             $videoSelection=null,
             ExtendedMediaFileResource $videoFile=null,
             CriteriaActivation $criteriaActivation=null
    ) {
        $this->userId             = new UserId($userId);
        $this->isActive           = $isActive;
        $this->audioSelection     = new ExtendedFileResourceSelection($audioSelection);
        $this->audioFile          = $audioFile;
        $this->videoSelection     = new ExtendedFileResourceSelection($videoSelection);
        $this->videoFile          = $videoFile;
        $this->criteriaActivation = $criteriaActivation;
        $this->args               = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
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
        $audioFile and $this->audioFile = new ExtendedMediaFileResource($audioFile);
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
        $videoFile and $this->videoFile = new ExtendedMediaFileResource($videoFile);
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }

    public function setCriteriaActivation($criteriaActivation)
    {
        $criteriaActivation and $this->criteriaActivation = new CriteriaActivation($criteriaActivation);
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}

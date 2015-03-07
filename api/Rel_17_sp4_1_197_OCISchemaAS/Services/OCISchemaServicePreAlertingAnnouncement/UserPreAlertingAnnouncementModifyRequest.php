<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's pre-alerting service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPreAlertingAnnouncementModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $userId              = null;
    protected $isActive            = null;
    protected $audioSelection      = null;
    protected $audioFile           = null;
    protected $videoSelection      = null;
    protected $videoFile           = null;
    protected $criteriaActivation  = null;

    public function __construct(
         $userId,
         $isActive = null,
         $audioSelection = null,
         ExtendedMediaFileResource $audioFile = null,
         $videoSelection = null,
         ExtendedMediaFileResource $videoFile = null,
         CriteriaActivation $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAudioSelection($audioSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoSelection($videoSelection);
        $this->setVideoFile($videoFile);
        $this->setCriteriaActivation($criteriaActivation);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
    }

    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->value();
    }

    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
    }

    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->value();
    }

    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }

    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a criteria for the user's call me now service.
 *         The response is either a UserCallMeNowGetCriteriaResponse or an ErrorResponse.
 */
class UserCallMeNowGetCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $userId        = null;
    protected $criteriaName  = null;

    public function __construct(
         $userId,
         $criteriaName
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
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

    public function setCriteriaName($criteriaName = null)
    {
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
    }

    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->value();
    }
}

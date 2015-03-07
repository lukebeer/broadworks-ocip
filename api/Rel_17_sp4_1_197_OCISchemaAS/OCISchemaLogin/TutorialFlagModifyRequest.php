<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the tutorial flag setting for a user or admin.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class TutorialFlagModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $userId          = null;
    protected $enableTutorial  = null;

    public function __construct(
         $userId,
         $enableTutorial = null
    ) {
        $this->setUserId($userId);
        $this->setEnableTutorial($enableTutorial);
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

    public function setEnableTutorial(xs:boolean $enableTutorial = null)
    {
    }

    public function getEnableTutorial()
    {
        return (!$this->enableTutorial) ?: $this->enableTutorial->value();
    }
}

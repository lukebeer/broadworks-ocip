<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingPresentationPassword;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the presentation password.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyConferencePresentationPasswordRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $conferenceKey,
             $presentationPassword=null
    ) {
        $this->userId               = new UserId($userId);
        $this->conferenceKey        = $conferenceKey;
        $this->presentationPassword = $presentationPassword;
        $this->args                 = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setConferenceKey($conferenceKey)
    {
        $conferenceKey and $this->conferenceKey = new InstantConferencingConferenceKey($conferenceKey);
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setPresentationPassword($presentationPassword)
    {
        $presentationPassword and $this->presentationPassword = new InstantConferencingPresentationPassword($presentationPassword);
    }

    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->value();
    }
}

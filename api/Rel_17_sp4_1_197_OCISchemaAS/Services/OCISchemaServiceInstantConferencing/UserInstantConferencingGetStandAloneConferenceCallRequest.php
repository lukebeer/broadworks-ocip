<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingCallId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the information of a conference call owned or delegated by the user.
 *         The response is either UserInstantConferencingGetStandAloneConferenceCallResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceCallRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceOwnerUserId,
             $conferenceKey,
             $conferenceCallId
    ) {
        $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
        $this->conferenceKey         = $conferenceKey;
        $this->conferenceCallId      = $conferenceCallId;
        $this->args                  = func_get_args();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId)
    {
        $conferenceOwnerUserId and $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }

    public function setConferenceKey($conferenceKey)
    {
        $conferenceKey and $this->conferenceKey = new InstantConferencingConferenceKey($conferenceKey);
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setConferenceCallId($conferenceCallId)
    {
        $conferenceCallId and $this->conferenceCallId = new InstantConferencingCallId($conferenceCallId);
    }

    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->value();
    }
}

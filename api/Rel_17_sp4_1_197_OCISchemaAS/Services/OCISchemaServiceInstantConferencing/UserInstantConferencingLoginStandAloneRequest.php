<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Handles stand alone login. Return a set of information for the user.
 *         The response is either UserInstantConferencingLoginStandAloneResponse or ErrorResponse.
 */
class UserInstantConferencingLoginStandAloneRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $bridgeServiceUserId,
             $conferenceOwnerUserId
    ) {
        $this->bridgeServiceUserId   = new UserId($bridgeServiceUserId);
        $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
        $this->args                  = func_get_args();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId)
    {
        $bridgeServiceUserId and $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId)
    {
        $conferenceOwnerUserId and $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }
}

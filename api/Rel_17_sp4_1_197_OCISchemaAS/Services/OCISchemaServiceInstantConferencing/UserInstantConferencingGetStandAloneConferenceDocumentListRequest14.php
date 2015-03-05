<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of conference documents.
 *         The response is either UserInstantConferencingGetStandAloneConferenceDocumentListResponse14
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceDocumentListRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceOwnerUserId,
             $conferenceKey,
             $isWebServerCollocated
    ) {
        $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
        $this->conferenceKey         = $conferenceKey;
        $this->isWebServerCollocated = $isWebServerCollocated;
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

    public function setIsWebServerCollocated($isWebServerCollocated)
    {
        $isWebServerCollocated and $this->isWebServerCollocated = new xs:boolean($isWebServerCollocated);
    }

    public function getIsWebServerCollocated()
    {
        return (!$this->isWebServerCollocated) ?: $this->isWebServerCollocated->value();
    }
}

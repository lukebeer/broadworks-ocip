<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of conference documents.
 *         The response is either UserInstantConferencingGetStandAloneConferenceDocumentListResponse14
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceDocumentListRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $conferenceOwnerUserId  = null;
    protected $conferenceKey          = null;
    protected $isWebServerCollocated  = null;

    public function __construct(
         $conferenceOwnerUserId,
         InstantConferencingConferenceKey $conferenceKey,
         $isWebServerCollocated
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setConferenceKey($conferenceKey);
        $this->setIsWebServerCollocated($isWebServerCollocated);
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }

    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setIsWebServerCollocated(xs:boolean $isWebServerCollocated = null)
    {
    }

    public function getIsWebServerCollocated()
    {
        return (!$this->isWebServerCollocated) ?: $this->isWebServerCollocated->value();
    }
}

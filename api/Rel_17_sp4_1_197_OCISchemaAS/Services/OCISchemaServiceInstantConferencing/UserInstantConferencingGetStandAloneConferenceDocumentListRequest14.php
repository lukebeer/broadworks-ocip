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
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceDocumentListResponse14';
    public    $name                  = __CLASS__;
    protected $conferenceOwnerUserId = null;
    protected $conferenceKey         = null;
    protected $isWebServerCollocated = null;

    public function __construct(
         $conferenceOwnerUserId,
          $conferenceKey,
         $isWebServerCollocated
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setConferenceKey($conferenceKey);
        $this->setIsWebServerCollocated($isWebServerCollocated);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->getValue();
    }

    /**
     * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey =  $conferenceKey;
    }

    /**
     * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
     */
    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->getValue();
    }

    /**
     * 
     */
    public function setIsWebServerCollocated($isWebServerCollocated = null)
    {
        $this->isWebServerCollocated = (boolean) $isWebServerCollocated;
    }

    /**
     * 
     */
    public function getIsWebServerCollocated()
    {
        return (!$this->isWebServerCollocated) ?: $this->isWebServerCollocated->getValue();
    }
}

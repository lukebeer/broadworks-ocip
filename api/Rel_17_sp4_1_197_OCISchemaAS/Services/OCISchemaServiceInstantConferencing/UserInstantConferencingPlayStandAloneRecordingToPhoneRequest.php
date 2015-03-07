<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Play a recording to a specified phone.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingPlayStandAloneRecordingToPhoneRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $conferenceOwnerUserId  = null;
    protected $recordingKey           = null;
    protected $playBackPhoneNumber    = null;

    public function __construct(
         $conferenceOwnerUserId,
         InstantConferencingRecordingKey $recordingKey,
         $playBackPhoneNumber
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setRecordingKey($recordingKey);
        $this->setPlayBackPhoneNumber($playBackPhoneNumber);
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

    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
    }

    public function getRecordingKey()
    {
        return (!$this->recordingKey) ?: $this->recordingKey->value();
    }

    public function setPlayBackPhoneNumber($playBackPhoneNumber = null)
    {
        $this->playBackPhoneNumber = ($playBackPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $playBackPhoneNumber
             : new OutgoingDNorSIPURI($playBackPhoneNumber);
    }

    public function getPlayBackPhoneNumber()
    {
        return (!$this->playBackPhoneNumber) ?: $this->playBackPhoneNumber->value();
    }
}

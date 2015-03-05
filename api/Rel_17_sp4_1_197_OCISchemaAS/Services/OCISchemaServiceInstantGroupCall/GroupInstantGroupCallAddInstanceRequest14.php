<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantGroupCallAnswerTimeoutMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add an Instant Group Call service instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $serviceUserId,
             ServiceInstanceAddProfile $serviceInstanceProfile,
             $destinationPhoneNumber=null,
             $isAnswerTimeoutEnabled,
             $answerTimeoutMinutes=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->groupId                = new GroupId($groupId);
        $this->serviceUserId          = new UserId($serviceUserId);
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->destinationPhoneNumber = new OutgoingDNorSIPURI($destinationPhoneNumber);
        $this->isAnswerTimeoutEnabled = $isAnswerTimeoutEnabled;
        $this->answerTimeoutMinutes   = $answerTimeoutMinutes;
        $this->args                   = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceAddProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setDestinationPhoneNumber($destinationPhoneNumber)
    {
        $destinationPhoneNumber and $this->destinationPhoneNumber = new OutgoingDNorSIPURI($destinationPhoneNumber);
    }

    public function getDestinationPhoneNumber()
    {
        return (!$this->destinationPhoneNumber) ?: $this->destinationPhoneNumber->value();
    }

    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled)
    {
        $isAnswerTimeoutEnabled and $this->isAnswerTimeoutEnabled = new xs:boolean($isAnswerTimeoutEnabled);
    }

    public function getIsAnswerTimeoutEnabled()
    {
        return (!$this->isAnswerTimeoutEnabled) ?: $this->isAnswerTimeoutEnabled->value();
    }

    public function setAnswerTimeoutMinutes($answerTimeoutMinutes)
    {
        $answerTimeoutMinutes and $this->answerTimeoutMinutes = new InstantGroupCallAnswerTimeoutMinutes($answerTimeoutMinutes);
    }

    public function getAnswerTimeoutMinutes()
    {
        return (!$this->answerTimeoutMinutes) ?: $this->answerTimeoutMinutes->value();
    }
}

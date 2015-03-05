<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantGroupCallAnswerTimeoutMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify an Instant Group Call service instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             ReplacementOutgoingDNorSIPURIList $destinationPhoneNumberList=null,
             $isAnswerTimeoutEnabled=null,
             $answerTimeoutMinutes=null
    ) {
        $this->serviceUserId              = new UserId($serviceUserId);
        $this->serviceInstanceProfile     = $serviceInstanceProfile;
        $this->destinationPhoneNumberList = $destinationPhoneNumberList;
        $this->isAnswerTimeoutEnabled     = $isAnswerTimeoutEnabled;
        $this->answerTimeoutMinutes       = $answerTimeoutMinutes;
        $this->args                       = func_get_args();
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
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setDestinationPhoneNumberList($destinationPhoneNumberList)
    {
        $destinationPhoneNumberList and $this->destinationPhoneNumberList = new ReplacementOutgoingDNorSIPURIList($destinationPhoneNumberList);
    }

    public function getDestinationPhoneNumberList()
    {
        return (!$this->destinationPhoneNumberList) ?: $this->destinationPhoneNumberList->value();
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

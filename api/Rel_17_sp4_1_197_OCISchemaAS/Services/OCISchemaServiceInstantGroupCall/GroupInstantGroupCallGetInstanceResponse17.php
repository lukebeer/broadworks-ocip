<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantGroupCallAnswerTimeoutMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupInstantGroupCallGetInstanceRequest17.
 *         Contains the service profile information and a list of phone numbers.
 */
class GroupInstantGroupCallGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ServiceInstanceReadProfile17 $serviceInstanceProfile,
             $destinationPhoneNumber=null,
             $isAnswerTimeoutEnabled,
             $answerTimeoutMinutes=null
    ) {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->destinationPhoneNumber = new OutgoingDNorSIPURI($destinationPhoneNumber);
        $this->isAnswerTimeoutEnabled = $isAnswerTimeoutEnabled;
        $this->answerTimeoutMinutes   = $answerTimeoutMinutes;
        $this->args                   = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile17($serviceInstanceProfile);
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

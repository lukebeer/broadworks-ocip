<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\InstantGroupCallAnswerTimeoutMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall\GroupInstantGroupCallModifyInstanceResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify an Instant Group Call service instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $serviceUserId              = null;
    protected $serviceInstanceProfile     = null;
    protected $destinationPhoneNumberList = null;
    protected $isAnswerTimeoutEnabled     = null;
    protected $answerTimeoutMinutes       = null;

    public function __construct(
         $serviceUserId,
          $serviceInstanceProfile = null,
          $destinationPhoneNumberList = null,
         $isAnswerTimeoutEnabled = null,
         $answerTimeoutMinutes = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setDestinationPhoneNumberList($destinationPhoneNumberList);
        $this->setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled);
        $this->setAnswerTimeoutMinutes($answerTimeoutMinutes);
    }

    /**
     * @return GroupInstantGroupCallModifyInstanceResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * A list of phone numbers or sipuris that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setDestinationPhoneNumberList(ReplacementOutgoingDNorSIPURIList $destinationPhoneNumberList = null)
    {
        $this->destinationPhoneNumberList =  $destinationPhoneNumberList;
    }

    /**
     * A list of phone numbers or sipuris that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getDestinationPhoneNumberList()
    {
        return (!$this->destinationPhoneNumberList) ?: $this->destinationPhoneNumberList->getValue();
    }

    /**
     * 
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled = null)
    {
        $this->isAnswerTimeoutEnabled = (boolean) $isAnswerTimeoutEnabled;
    }

    /**
     * 
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return (!$this->isAnswerTimeoutEnabled) ?: $this->isAnswerTimeoutEnabled;
    }

    /**
     * The maximum duration for unanswered call.
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes = null)
    {
        $this->answerTimeoutMinutes = ($answerTimeoutMinutes InstanceOf InstantGroupCallAnswerTimeoutMinutes)
             ? $answerTimeoutMinutes
             : new InstantGroupCallAnswerTimeoutMinutes($answerTimeoutMinutes);
    }

    /**
     * The maximum duration for unanswered call.
     */
    public function getAnswerTimeoutMinutes()
    {
        return (!$this->answerTimeoutMinutes) ?: $this->answerTimeoutMinutes->getValue();
    }
}

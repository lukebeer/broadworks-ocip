<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\InstantGroupCallAnswerTimeoutMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add an Instant Group Call service instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupInstantGroupCallAddInstanceRequest14';
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $serviceUserId          = null;
    protected $serviceInstanceProfile = null;
    protected $destinationPhoneNumber = null;
    protected $isAnswerTimeoutEnabled = null;
    protected $answerTimeoutMinutes   = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfile $serviceInstanceProfile,
         $destinationPhoneNumber = null,
         $isAnswerTimeoutEnabled,
         $answerTimeoutMinutes = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setDestinationPhoneNumber($destinationPhoneNumber);
        $this->setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled);
        $this->setAnswerTimeoutMinutes($answerTimeoutMinutes);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setDestinationPhoneNumber($destinationPhoneNumber = null)
    {
        if (!$destinationPhoneNumber) return $this;
        $this->destinationPhoneNumber = ($destinationPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $destinationPhoneNumber
             : new OutgoingDNorSIPURI($destinationPhoneNumber);
        $this->destinationPhoneNumber->setName('destinationPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getDestinationPhoneNumber()
    {
        return $this->destinationPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled = null)
    {
        if (!$isAnswerTimeoutEnabled) return $this;
        $this->isAnswerTimeoutEnabled = new PrimitiveType($isAnswerTimeoutEnabled);
        $this->isAnswerTimeoutEnabled->setName('isAnswerTimeoutEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return $this->isAnswerTimeoutEnabled->getValue();
    }

    /**
     * 
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes = null)
    {
        if (!$answerTimeoutMinutes) return $this;
        $this->answerTimeoutMinutes = ($answerTimeoutMinutes InstanceOf InstantGroupCallAnswerTimeoutMinutes)
             ? $answerTimeoutMinutes
             : new InstantGroupCallAnswerTimeoutMinutes($answerTimeoutMinutes);
        $this->answerTimeoutMinutes->setName('answerTimeoutMinutes');
        return $this;
    }

    /**
     * 
     * @return InstantGroupCallAnswerTimeoutMinutes
     */
    public function getAnswerTimeoutMinutes()
    {
        return $this->answerTimeoutMinutes->getValue();
    }
}

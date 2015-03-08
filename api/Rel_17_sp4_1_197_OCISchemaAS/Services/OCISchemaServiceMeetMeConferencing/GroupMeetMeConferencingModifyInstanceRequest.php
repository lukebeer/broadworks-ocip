<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a Meet-Me Conferencing bridge.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceUserId            = null;
    protected $serviceInstanceProfile   = null;
    protected $allocatedPorts           = null;
    protected $networkClassOfService    = null;
    protected $allowIndividualOutDial   = null;
    protected $operatorNumber           = null;
    protected $conferenceHostUserIdList = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         MeetMeConferencingConferencePorts $allocatedPorts = null,
         $networkClassOfService = null,
         $allowIndividualOutDial = null,
         $operatorNumber = null,
         ReplacementUserIdList $conferenceHostUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setAllocatedPorts($allocatedPorts);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setAllowIndividualOutDial($allowIndividualOutDial);
        $this->setOperatorNumber($operatorNumber);
        $this->setConferenceHostUserIdList($conferenceHostUserIdList);
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
        $this->serviceInstanceProfile = ServiceInstanceModifyProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
        $this->allocatedPorts = MeetMeConferencingConferencePorts $allocatedPorts;
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->getValue();
    }

    /**
     * 
     */
    public function setAllowIndividualOutDial($allowIndividualOutDial = null)
    {
        $this->allowIndividualOutDial = (boolean) $allowIndividualOutDial;
    }

    /**
     * 
     */
    public function getAllowIndividualOutDial()
    {
        return (!$this->allowIndividualOutDial) ?: $this->allowIndividualOutDial->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setOperatorNumber($operatorNumber = null)
    {
        $this->operatorNumber = ($operatorNumber InstanceOf OutgoingDNorSIPURI)
             ? $operatorNumber
             : new OutgoingDNorSIPURI($operatorNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getOperatorNumber()
    {
        return (!$this->operatorNumber) ?: $this->operatorNumber->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setConferenceHostUserIdList(ReplacementUserIdList $conferenceHostUserIdList = null)
    {
        $this->conferenceHostUserIdList = ReplacementUserIdList $conferenceHostUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getConferenceHostUserIdList()
    {
        return (!$this->conferenceHostUserIdList) ?: $this->conferenceHostUserIdList->getValue();
    }
}

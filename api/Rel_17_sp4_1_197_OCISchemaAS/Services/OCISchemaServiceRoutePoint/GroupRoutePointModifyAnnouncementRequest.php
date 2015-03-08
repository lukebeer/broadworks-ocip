<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a route point's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceUserId     = null;
    protected $mediaOnHoldSource = null;

    public function __construct(
         $serviceUserId,
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
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
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->getValue();
    }
}

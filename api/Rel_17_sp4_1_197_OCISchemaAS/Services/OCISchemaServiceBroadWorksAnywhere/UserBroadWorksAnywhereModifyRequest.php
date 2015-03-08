<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify the user-level settings for the BroadWorks Anywhere service for a specified user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserBroadWorksAnywhereModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $userId                               = null;
    protected $alertAllLocationsForClickToDialCalls = null;
    protected $alertAllLocationsForGroupPagingCalls = null;

    public function __construct(
         $userId,
         $alertAllLocationsForClickToDialCalls = null,
         $alertAllLocationsForGroupPagingCalls = null
    ) {
        $this->setUserId($userId);
        $this->setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls);
        $this->setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls = null)
    {
        $this->alertAllLocationsForClickToDialCalls = (boolean) $alertAllLocationsForClickToDialCalls;
    }

    /**
     * 
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return (!$this->alertAllLocationsForClickToDialCalls) ?: $this->alertAllLocationsForClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls = null)
    {
        $this->alertAllLocationsForGroupPagingCalls = (boolean) $alertAllLocationsForGroupPagingCalls;
    }

    /**
     * 
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return (!$this->alertAllLocationsForGroupPagingCalls) ?: $this->alertAllLocationsForGroupPagingCalls->getValue();
    }
}

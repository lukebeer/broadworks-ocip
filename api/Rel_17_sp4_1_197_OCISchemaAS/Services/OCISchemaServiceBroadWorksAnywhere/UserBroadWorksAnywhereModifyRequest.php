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
    public    $name                                  = __CLASS__;
    protected $userId                                = null;
    protected $alertAllLocationsForClickToDialCalls  = null;
    protected $alertAllLocationsForGroupPagingCalls  = null;

    public function __construct(
         $userId,
         $alertAllLocationsForClickToDialCalls = null,
         $alertAllLocationsForGroupPagingCalls = null
    ) {
        $this->setUserId($userId);
        $this->setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls);
        $this->setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAlertAllLocationsForClickToDialCalls(xs:boolean $alertAllLocationsForClickToDialCalls = null)
    {
    }

    public function getAlertAllLocationsForClickToDialCalls()
    {
        return (!$this->alertAllLocationsForClickToDialCalls) ?: $this->alertAllLocationsForClickToDialCalls->value();
    }

    public function setAlertAllLocationsForGroupPagingCalls(xs:boolean $alertAllLocationsForGroupPagingCalls = null)
    {
    }

    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return (!$this->alertAllLocationsForGroupPagingCalls) ?: $this->alertAllLocationsForGroupPagingCalls->value();
    }
}

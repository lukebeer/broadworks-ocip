<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of call centers the user is assigned to as a supervisor.
 *         The response is either a UserCallCenterGetSupervisorCallCenterListResponse or an
 *         ErrorResponse.
 */
class UserCallCenterGetSupervisorCallCenterListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $supervisorUserId  = null;

    public function __construct(
         $supervisorUserId
    ) {
        $this->setSupervisorUserId($supervisorUserId);
    }

    public function setSupervisorUserId($supervisorUserId = null)
    {
        $this->supervisorUserId = ($supervisorUserId InstanceOf UserId)
             ? $supervisorUserId
             : new UserId($supervisorUserId);
    }

    public function getSupervisorUserId()
    {
        return (!$this->supervisorUserId) ?: $this->supervisorUserId->value();
    }
}

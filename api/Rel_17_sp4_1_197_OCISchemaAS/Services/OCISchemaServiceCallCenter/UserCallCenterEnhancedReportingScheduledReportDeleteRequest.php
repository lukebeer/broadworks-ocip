<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to delete a call center reporting scheduled report created by a supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingScheduledReportDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $supervisorUserId,
             $name
    ) {
        $this->supervisorUserId = new UserId($supervisorUserId);
        $this->name             = new CallCenterScheduledReportName($name);
        $this->args             = func_get_args();
    }

    public function setSupervisorUserId($supervisorUserId)
    {
        $supervisorUserId and $this->supervisorUserId = new UserId($supervisorUserId);
    }

    public function getSupervisorUserId()
    {
        return (!$this->supervisorUserId) ?: $this->supervisorUserId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new CallCenterScheduledReportName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}

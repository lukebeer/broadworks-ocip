<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replaces a list of users as supervisors for a call center.
 *         Also allows the modification of the reporting server URL address.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: GroupCallCenterSupervisorReportingModifyRequest
 */
class GroupCallCenterModifySupervisorListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $reportingServerURL=null,
             ReplacementUserIdList $supervisorUserIdList=null
    ) {
        $this->serviceUserId        = new UserId($serviceUserId);
        $this->reportingServerURL   = new URL($reportingServerURL);
        $this->supervisorUserIdList = $supervisorUserIdList;
        $this->args                 = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setReportingServerURL($reportingServerURL)
    {
        $reportingServerURL and $this->reportingServerURL = new URL($reportingServerURL);
    }

    public function getReportingServerURL()
    {
        return (!$this->reportingServerURL) ?: $this->reportingServerURL->value();
    }

    public function setSupervisorUserIdList($supervisorUserIdList)
    {
        $supervisorUserIdList and $this->supervisorUserIdList = new ReplacementUserIdList($supervisorUserIdList);
    }

    public function getSupervisorUserIdList()
    {
        return (!$this->supervisorUserIdList) ?: $this->supervisorUserIdList->value();
    }
}

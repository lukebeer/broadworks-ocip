<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInventoryReport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the group's inventory report.
 *         The response is either a GroupInventoryReportGetResponse or an ErrorResponse.
 */
class GroupInventoryReportGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $includeUsers,
             $includeServices,
             $includeDns,
             $includeAccessDevices,
             $includeDepartments,
             $reportDeliveryEmailAddress=null
    ) {
        $this->serviceProviderId          = new ServiceProviderId($serviceProviderId);
        $this->groupId                    = new GroupId($groupId);
        $this->includeUsers               = $includeUsers;
        $this->includeServices            = $includeServices;
        $this->includeDns                 = $includeDns;
        $this->includeAccessDevices       = $includeAccessDevices;
        $this->includeDepartments         = $includeDepartments;
        $this->reportDeliveryEmailAddress = new EmailAddress($reportDeliveryEmailAddress);
        $this->args                       = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setIncludeUsers($includeUsers)
    {
        $includeUsers and $this->includeUsers = new xs:boolean($includeUsers);
    }

    public function getIncludeUsers()
    {
        return (!$this->includeUsers) ?: $this->includeUsers->value();
    }

    public function setIncludeServices($includeServices)
    {
        $includeServices and $this->includeServices = new xs:boolean($includeServices);
    }

    public function getIncludeServices()
    {
        return (!$this->includeServices) ?: $this->includeServices->value();
    }

    public function setIncludeDns($includeDns)
    {
        $includeDns and $this->includeDns = new xs:boolean($includeDns);
    }

    public function getIncludeDns()
    {
        return (!$this->includeDns) ?: $this->includeDns->value();
    }

    public function setIncludeAccessDevices($includeAccessDevices)
    {
        $includeAccessDevices and $this->includeAccessDevices = new xs:boolean($includeAccessDevices);
    }

    public function getIncludeAccessDevices()
    {
        return (!$this->includeAccessDevices) ?: $this->includeAccessDevices->value();
    }

    public function setIncludeDepartments($includeDepartments)
    {
        $includeDepartments and $this->includeDepartments = new xs:boolean($includeDepartments);
    }

    public function getIncludeDepartments()
    {
        return (!$this->includeDepartments) ?: $this->includeDepartments->value();
    }

    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $reportDeliveryEmailAddress and $this->reportDeliveryEmailAddress = new EmailAddress($reportDeliveryEmailAddress);
    }

    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->value();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInventoryReport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the group's inventory report.
 *         The response is either a GroupInventoryReportGetResponse or an ErrorResponse.
 */
class GroupInventoryReportGetRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $serviceProviderId           = null;
    protected $groupId                     = null;
    protected $includeUsers                = null;
    protected $includeServices             = null;
    protected $includeDns                  = null;
    protected $includeAccessDevices        = null;
    protected $includeDepartments          = null;
    protected $reportDeliveryEmailAddress  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $includeUsers,
         $includeServices,
         $includeDns,
         $includeAccessDevices,
         $includeDepartments,
         $reportDeliveryEmailAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIncludeUsers($includeUsers);
        $this->setIncludeServices($includeServices);
        $this->setIncludeDns($includeDns);
        $this->setIncludeAccessDevices($includeAccessDevices);
        $this->setIncludeDepartments($includeDepartments);
        $this->setReportDeliveryEmailAddress($reportDeliveryEmailAddress);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setIncludeUsers(xs:boolean $includeUsers = null)
    {
    }

    public function getIncludeUsers()
    {
        return (!$this->includeUsers) ?: $this->includeUsers->value();
    }

    public function setIncludeServices(xs:boolean $includeServices = null)
    {
    }

    public function getIncludeServices()
    {
        return (!$this->includeServices) ?: $this->includeServices->value();
    }

    public function setIncludeDns(xs:boolean $includeDns = null)
    {
    }

    public function getIncludeDns()
    {
        return (!$this->includeDns) ?: $this->includeDns->value();
    }

    public function setIncludeAccessDevices(xs:boolean $includeAccessDevices = null)
    {
    }

    public function getIncludeAccessDevices()
    {
        return (!$this->includeAccessDevices) ?: $this->includeAccessDevices->value();
    }

    public function setIncludeDepartments(xs:boolean $includeDepartments = null)
    {
    }

    public function getIncludeDepartments()
    {
        return (!$this->includeDepartments) ?: $this->includeDepartments->value();
    }

    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
    }

    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->value();
    }
}

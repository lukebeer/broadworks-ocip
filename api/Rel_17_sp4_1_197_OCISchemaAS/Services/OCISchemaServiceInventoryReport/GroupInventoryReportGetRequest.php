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
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInventoryReport\GroupInventoryReportGetResponse';
    public    $name                       = __CLASS__;
    protected $serviceProviderId          = null;
    protected $groupId                    = null;
    protected $includeUsers               = null;
    protected $includeServices            = null;
    protected $includeDns                 = null;
    protected $includeAccessDevices       = null;
    protected $includeDepartments         = null;
    protected $reportDeliveryEmailAddress = null;

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

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setIncludeUsers($includeUsers = null)
    {
        $this->includeUsers = (boolean) $includeUsers;
    }

    /**
     * 
     */
    public function getIncludeUsers()
    {
        return (!$this->includeUsers) ?: $this->includeUsers->getValue();
    }

    /**
     * 
     */
    public function setIncludeServices($includeServices = null)
    {
        $this->includeServices = (boolean) $includeServices;
    }

    /**
     * 
     */
    public function getIncludeServices()
    {
        return (!$this->includeServices) ?: $this->includeServices->getValue();
    }

    /**
     * 
     */
    public function setIncludeDns($includeDns = null)
    {
        $this->includeDns = (boolean) $includeDns;
    }

    /**
     * 
     */
    public function getIncludeDns()
    {
        return (!$this->includeDns) ?: $this->includeDns->getValue();
    }

    /**
     * 
     */
    public function setIncludeAccessDevices($includeAccessDevices = null)
    {
        $this->includeAccessDevices = (boolean) $includeAccessDevices;
    }

    /**
     * 
     */
    public function getIncludeAccessDevices()
    {
        return (!$this->includeAccessDevices) ?: $this->includeAccessDevices->getValue();
    }

    /**
     * 
     */
    public function setIncludeDepartments($includeDepartments = null)
    {
        $this->includeDepartments = (boolean) $includeDepartments;
    }

    /**
     * 
     */
    public function getIncludeDepartments()
    {
        return (!$this->includeDepartments) ?: $this->includeDepartments->getValue();
    }

    /**
     * Email Address
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
    }

    /**
     * Email Address
     */
    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->getValue();
    }
}

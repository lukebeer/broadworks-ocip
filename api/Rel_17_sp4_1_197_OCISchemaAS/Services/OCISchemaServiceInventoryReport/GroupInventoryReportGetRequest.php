<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the group's inventory report.
 *         The response is either a GroupInventoryReportGetResponse or an ErrorResponse.
 */
class GroupInventoryReportGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport\GroupInventoryReportGetResponse';
    public    $name                       = 'GroupInventoryReportGetRequest';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport\GroupInventoryReportGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setIncludeUsers($includeUsers = null)
    {
        if (!$includeUsers) return $this;
        $this->includeUsers = new PrimitiveType($includeUsers);
        $this->includeUsers->setName('includeUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $includeUsers
     */
    public function getIncludeUsers()
    {
        return $this->includeUsers->getValue();
    }

    /**
     * 
     */
    public function setIncludeServices($includeServices = null)
    {
        if (!$includeServices) return $this;
        $this->includeServices = new PrimitiveType($includeServices);
        $this->includeServices->setName('includeServices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeServices
     */
    public function getIncludeServices()
    {
        return $this->includeServices->getValue();
    }

    /**
     * 
     */
    public function setIncludeDns($includeDns = null)
    {
        if (!$includeDns) return $this;
        $this->includeDns = new PrimitiveType($includeDns);
        $this->includeDns->setName('includeDns');
        return $this;
    }

    /**
     * 
     * @return boolean $includeDns
     */
    public function getIncludeDns()
    {
        return $this->includeDns->getValue();
    }

    /**
     * 
     */
    public function setIncludeAccessDevices($includeAccessDevices = null)
    {
        if (!$includeAccessDevices) return $this;
        $this->includeAccessDevices = new PrimitiveType($includeAccessDevices);
        $this->includeAccessDevices->setName('includeAccessDevices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeAccessDevices
     */
    public function getIncludeAccessDevices()
    {
        return $this->includeAccessDevices->getValue();
    }

    /**
     * 
     */
    public function setIncludeDepartments($includeDepartments = null)
    {
        if (!$includeDepartments) return $this;
        $this->includeDepartments = new PrimitiveType($includeDepartments);
        $this->includeDepartments->setName('includeDepartments');
        return $this;
    }

    /**
     * 
     * @return boolean $includeDepartments
     */
    public function getIncludeDepartments()
    {
        return $this->includeDepartments->getValue();
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        if (!$reportDeliveryEmailAddress) return $this;
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportDeliveryEmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress->getValue();
    }
}

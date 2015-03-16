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
    public    $name = 'GroupInventoryReportGetRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $includeUsers;
    protected $includeServices;
    protected $includeDns;
    protected $includeAccessDevices;
    protected $includeDepartments;
    protected $reportDeliveryEmailAddress;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $includeUsers = '',
         $includeServices = '',
         $includeDns = '',
         $includeAccessDevices = '',
         $includeDepartments = '',
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
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
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
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeUsers($includeUsers = null)
    {
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
        return ($this->includeUsers) ? $this->includeUsers->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeServices($includeServices = null)
    {
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
        return ($this->includeServices) ? $this->includeServices->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeDns($includeDns = null)
    {
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
        return ($this->includeDns) ? $this->includeDns->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeAccessDevices($includeAccessDevices = null)
    {
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
        return ($this->includeAccessDevices) ? $this->includeAccessDevices->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeDepartments($includeDepartments = null)
    {
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
        return ($this->includeDepartments) ? $this->includeDepartments->getValue() : null;
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
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
        return ($this->reportDeliveryEmailAddress) ? $this->reportDeliveryEmailAddress->getValue() : null;
    }
}

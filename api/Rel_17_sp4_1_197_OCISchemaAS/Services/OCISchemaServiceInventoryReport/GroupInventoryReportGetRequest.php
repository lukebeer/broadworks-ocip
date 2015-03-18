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
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport\GroupInventoryReportGetResponse';
    public    $elementName = 'GroupInventoryReportGetRequest';
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeUsers($includeUsers = null)
    {
        $this->includeUsers = new PrimitiveType($includeUsers);
        $this->includeUsers->setElementName('includeUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $includeUsers
     */
    public function getIncludeUsers()
    {
        return ($this->includeUsers)
            ? $this->includeUsers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeServices($includeServices = null)
    {
        $this->includeServices = new PrimitiveType($includeServices);
        $this->includeServices->setElementName('includeServices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeServices
     */
    public function getIncludeServices()
    {
        return ($this->includeServices)
            ? $this->includeServices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeDns($includeDns = null)
    {
        $this->includeDns = new PrimitiveType($includeDns);
        $this->includeDns->setElementName('includeDns');
        return $this;
    }

    /**
     * 
     * @return boolean $includeDns
     */
    public function getIncludeDns()
    {
        return ($this->includeDns)
            ? $this->includeDns->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeAccessDevices($includeAccessDevices = null)
    {
        $this->includeAccessDevices = new PrimitiveType($includeAccessDevices);
        $this->includeAccessDevices->setElementName('includeAccessDevices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeAccessDevices
     */
    public function getIncludeAccessDevices()
    {
        return ($this->includeAccessDevices)
            ? $this->includeAccessDevices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeDepartments($includeDepartments = null)
    {
        $this->includeDepartments = new PrimitiveType($includeDepartments);
        $this->includeDepartments->setElementName('includeDepartments');
        return $this;
    }

    /**
     * 
     * @return boolean $includeDepartments
     */
    public function getIncludeDepartments()
    {
        return ($this->includeDepartments)
            ? $this->includeDepartments->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setElementName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportDeliveryEmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return ($this->reportDeliveryEmailAddress)
            ? $this->reportDeliveryEmailAddress->getElementValue()
            : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanAuthorizationCodeEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a list of authorization codes to the group's default or a department. When department is not
 *         specified, it is for the group default.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $departmentKey;
    protected $codeEntry;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $departmentKey = null,
         $codeEntry = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartmentKey($departmentKey);
        $this->setCodeEntry($codeEntry);
    }

    /**
     * @return mixed $response
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
    public function setDepartmentKey(DepartmentKey $departmentKey = null)
    {
        $this->departmentKey = ($departmentKey InstanceOf DepartmentKey)
             ? $departmentKey
             : new DepartmentKey($departmentKey);
        $this->departmentKey->setElementName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $departmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * 
     */
    public function setCodeEntry(OutgoingCallingPlanAuthorizationCodeEntry $codeEntry = null)
    {
        $this->codeEntry = ($codeEntry InstanceOf OutgoingCallingPlanAuthorizationCodeEntry)
             ? $codeEntry
             : new OutgoingCallingPlanAuthorizationCodeEntry($codeEntry);
        $this->codeEntry->setElementName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }
}

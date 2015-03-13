<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a list of departments in a group. You may request only the
 *         list of departments defined at the group-level, or you may request
 *         the list of all departments in the group including all the departments
 *         defined within the enterprise the group belongs to.
 *         The response is either GroupDepartmentGetListResponse or ErrorResponse.
 */
class GroupDepartmentGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentGetListResponse';
    public    $name                         = 'GroupDepartmentGetListRequest';
    protected $serviceProviderId            = null;
    protected $groupId                      = null;
    protected $includeEnterpriseDepartments = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $includeEnterpriseDepartments
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIncludeEnterpriseDepartments($includeEnterpriseDepartments);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentGetListResponse $response
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
    public function setIncludeEnterpriseDepartments($includeEnterpriseDepartments = null)
    {
        if (!$includeEnterpriseDepartments) return $this;
        $this->includeEnterpriseDepartments = new PrimitiveType($includeEnterpriseDepartments);
        $this->includeEnterpriseDepartments->setName('includeEnterpriseDepartments');
        return $this;
    }

    /**
     * 
     * @return boolean $includeEnterpriseDepartments
     */
    public function getIncludeEnterpriseDepartments()
    {
        return $this->includeEnterpriseDepartments->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Adds a Custom Contact Directory to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 * 
 *         Replace by: GroupCustomContactDirectoryModifyRequest17
 */
class GroupCustomContactDirectoryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCustomContactDirectoryModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $name;
    protected $newName;
    protected $userIdList;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $name = '',
         $newName = null,
         $userIdList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setUserIdList($userIdList);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CustomContactDirectoryName)
             ? $name
             : new CustomContactDirectoryName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CustomContactDirectoryName)
             ? $newName
             : new CustomContactDirectoryName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserIdList(ReplacementUserIdList $userIdList = null)
    {
        $this->userIdList = ($userIdList InstanceOf ReplacementUserIdList)
             ? $userIdList
             : new ReplacementUserIdList($userIdList);
        $this->userIdList->setElementName('userIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $userIdList
     */
    public function getUserIdList()
    {
        return $this->userIdList;
    }
}

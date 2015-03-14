<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\ReplacementCustomContactDirectoryEntryList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Adds a Custom Contact Directory to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCustomContactDirectoryModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupCustomContactDirectoryModifyRequest17';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $name              = null;
    protected $newName           = null;
    protected $entryList         = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $newName = null,
         ReplacementCustomContactDirectoryEntryList $entryList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setEntryList($entryList);
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
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CustomContactDirectoryName)
             ? $name
             : new CustomContactDirectoryName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf CustomContactDirectoryName)
             ? $newName
             : new CustomContactDirectoryName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setEntryList(ReplacementCustomContactDirectoryEntryList $entryList = null)
    {
        if (!$entryList) return $this;
        $this->entryList = $entryList;
        $this->entryList->setName('entryList');
        return $this;
    }

    /**
     * 
     * @return ReplacementCustomContactDirectoryEntryList $entryList
     */
    public function getEntryList()
    {
        return $this->entryList;
    }
}

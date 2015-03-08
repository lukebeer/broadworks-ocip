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


/**
     * Adds a Custom Contact Directory to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCustomContactDirectoryModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
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
     * Custom Contact Directory name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CustomContactDirectoryName)
             ? $name
             : new CustomContactDirectoryName($name);
    }

    /**
     * Custom Contact Directory name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Custom Contact Directory name.
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CustomContactDirectoryName)
             ? $newName
             : new CustomContactDirectoryName($newName);
    }

    /**
     * Custom Contact Directory name.
     */
    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->getValue();
    }

    /**
     * A list of userIds and/or Virtual On-Net user DNs that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setEntryList(ReplacementCustomContactDirectoryEntryList $entryList = null)
    {
        $this->entryList = ReplacementCustomContactDirectoryEntryList $entryList;
    }

    /**
     * A list of userIds and/or Virtual On-Net user DNs that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getEntryList()
    {
        return (!$this->entryList) ?: $this->entryList->getValue();
    }
}

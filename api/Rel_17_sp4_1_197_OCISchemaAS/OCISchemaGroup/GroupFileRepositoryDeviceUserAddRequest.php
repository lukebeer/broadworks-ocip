<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a new group file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupFileRepositoryDeviceUserAddRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $groupId            = null;
    protected $fileRepositoryName = null;
    protected $userName           = null;
    protected $password           = null;
    protected $allowPut           = null;
    protected $allowDelete        = null;
    protected $allowGet           = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $fileRepositoryName,
         $userName,
         $password,
         $allowPut,
         $allowDelete,
         $allowGet
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setFileRepositoryName($fileRepositoryName);
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setAllowPut($allowPut);
        $this->setAllowDelete($allowDelete);
        $this->setAllowGet($allowGet);
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
     * File repository name.
     */
    public function setFileRepositoryName($fileRepositoryName = null)
    {
        $this->fileRepositoryName = ($fileRepositoryName InstanceOf FileRepositoryName)
             ? $fileRepositoryName
             : new FileRepositoryName($fileRepositoryName);
    }

    /**
     * File repository name.
     */
    public function getFileRepositoryName()
    {
        return (!$this->fileRepositoryName) ?: $this->fileRepositoryName->getValue();
    }

    /**
     * A user id for a File Repository.
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf FileRepositoryUserName)
             ? $userName
             : new FileRepositoryUserName($userName);
    }

    /**
     * A user id for a File Repository.
     */
    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->getValue();
    }

    /**
     * A password for a File Repository.
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf FileRepositoryUserPassword)
             ? $password
             : new FileRepositoryUserPassword($password);
    }

    /**
     * A password for a File Repository.
     */
    public function getPassword()
    {
        return (!$this->password) ?: $this->password->getValue();
    }

    /**
     * 
     */
    public function setAllowPut($allowPut = null)
    {
        $this->allowPut = (boolean) $allowPut;
    }

    /**
     * 
     */
    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut->getValue();
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        $this->allowDelete = (boolean) $allowDelete;
    }

    /**
     * 
     */
    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete->getValue();
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        $this->allowGet = (boolean) $allowGet;
    }

    /**
     * 
     */
    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet->getValue();
    }
}

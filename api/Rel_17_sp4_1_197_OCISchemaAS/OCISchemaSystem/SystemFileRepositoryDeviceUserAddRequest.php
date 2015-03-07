<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a new file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceUserAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $fileRepositoryName  = null;
    protected $userName            = null;
    protected $password            = null;
    protected $allowPut            = null;
    protected $allowDelete         = null;
    protected $allowGet            = null;

    public function __construct(
         $fileRepositoryName,
         $userName,
         $password,
         $allowPut,
         $allowDelete,
         $allowGet
    ) {
        $this->setFileRepositoryName($fileRepositoryName);
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setAllowPut($allowPut);
        $this->setAllowDelete($allowDelete);
        $this->setAllowGet($allowGet);
    }

    public function setFileRepositoryName($fileRepositoryName = null)
    {
        $this->fileRepositoryName = ($fileRepositoryName InstanceOf FileRepositoryName)
             ? $fileRepositoryName
             : new FileRepositoryName($fileRepositoryName);
    }

    public function getFileRepositoryName()
    {
        return (!$this->fileRepositoryName) ?: $this->fileRepositoryName->value();
    }

    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf FileRepositoryUserName)
             ? $userName
             : new FileRepositoryUserName($userName);
    }

    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->value();
    }

    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf FileRepositoryUserPassword)
             ? $password
             : new FileRepositoryUserPassword($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setAllowPut(xs:boolean $allowPut = null)
    {
    }

    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut->value();
    }

    public function setAllowDelete(xs:boolean $allowDelete = null)
    {
    }

    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete->value();
    }

    public function setAllowGet(xs:boolean $allowGet = null)
    {
    }

    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet->value();
    }
}

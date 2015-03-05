<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a service provider file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderFileRepositoryDeviceUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $fileRepositoryName,
             $userName,
             $password=null,
             $allowPut=null,
             $allowDelete=null,
             $allowGet=null
    ) {
        $this->serviceProviderId  = new ServiceProviderId($serviceProviderId);
        $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
        $this->userName           = new FileRepositoryUserName($userName);
        $this->password           = new FileRepositoryUserPassword($password);
        $this->allowPut           = $allowPut;
        $this->allowDelete        = $allowDelete;
        $this->allowGet           = $allowGet;
        $this->args               = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setFileRepositoryName($fileRepositoryName)
    {
        $fileRepositoryName and $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
    }

    public function getFileRepositoryName()
    {
        return (!$this->fileRepositoryName) ?: $this->fileRepositoryName->value();
    }

    public function setUserName($userName)
    {
        $userName and $this->userName = new FileRepositoryUserName($userName);
    }

    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->value();
    }

    public function setPassword($password)
    {
        $password and $this->password = new FileRepositoryUserPassword($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setAllowPut($allowPut)
    {
        $allowPut and $this->allowPut = new xs:boolean($allowPut);
    }

    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut->value();
    }

    public function setAllowDelete($allowDelete)
    {
        $allowDelete and $this->allowDelete = new xs:boolean($allowDelete);
    }

    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete->value();
    }

    public function setAllowGet($allowGet)
    {
        $allowGet and $this->allowGet = new xs:boolean($allowGet);
    }

    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet->value();
    }
}

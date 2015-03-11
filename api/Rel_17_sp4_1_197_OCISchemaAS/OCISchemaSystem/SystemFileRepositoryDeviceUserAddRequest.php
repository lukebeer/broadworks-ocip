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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceUserAddRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'SystemFileRepositoryDeviceUserAddRequest';
    protected $fileRepositoryName = null;
    protected $userName           = null;
    protected $password           = null;
    protected $allowPut           = null;
    protected $allowDelete        = null;
    protected $allowGet           = null;

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

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileRepositoryName($fileRepositoryName = null)
    {
        if (!$fileRepositoryName) return $this;
        $this->fileRepositoryName = ($fileRepositoryName InstanceOf FileRepositoryName)
             ? $fileRepositoryName
             : new FileRepositoryName($fileRepositoryName);
        $this->fileRepositoryName->setName('fileRepositoryName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName->getValue();
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        if (!$userName) return $this;
        $this->userName = ($userName InstanceOf FileRepositoryUserName)
             ? $userName
             : new FileRepositoryUserName($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserName
     */
    public function getUserName()
    {
        return $this->userName->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = ($password InstanceOf FileRepositoryUserPassword)
             ? $password
             : new FileRepositoryUserPassword($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserPassword
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setAllowPut($allowPut = null)
    {
        if (!$allowPut) return $this;
        $this->allowPut = new PrimitiveType($allowPut);
        $this->allowPut->setName('allowPut');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowPut()
    {
        return $this->allowPut->getValue();
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        if (!$allowDelete) return $this;
        $this->allowDelete = new PrimitiveType($allowDelete);
        $this->allowDelete->setName('allowDelete');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowDelete()
    {
        return $this->allowDelete->getValue();
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        if (!$allowGet) return $this;
        $this->allowGet = new PrimitiveType($allowGet);
        $this->allowGet->setName('allowGet');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowGet()
    {
        return $this->allowGet->getValue();
    }
}

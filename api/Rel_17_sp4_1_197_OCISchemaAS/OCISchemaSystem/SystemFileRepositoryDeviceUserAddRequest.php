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
    public    $name = 'SystemFileRepositoryDeviceUserAddRequest';
    protected $fileRepositoryName;
    protected $userName;
    protected $password;
    protected $allowPut;
    protected $allowDelete;
    protected $allowGet;

    public function __construct(
         $fileRepositoryName = '',
         $userName = '',
         $password = '',
         $allowPut = '',
         $allowDelete = '',
         $allowGet = ''
    ) {
        $this->setFileRepositoryName($fileRepositoryName);
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setAllowPut($allowPut);
        $this->setAllowDelete($allowDelete);
        $this->setAllowGet($allowGet);
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
    public function setFileRepositoryName($fileRepositoryName = null)
    {
        $this->fileRepositoryName = ($fileRepositoryName InstanceOf FileRepositoryName)
             ? $fileRepositoryName
             : new FileRepositoryName($fileRepositoryName);
        $this->fileRepositoryName->setName('fileRepositoryName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName $fileRepositoryName
     */
    public function getFileRepositoryName()
    {
        return ($this->fileRepositoryName) ? $this->fileRepositoryName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf FileRepositoryUserName)
             ? $userName
             : new FileRepositoryUserName($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserName $userName
     */
    public function getUserName()
    {
        return ($this->userName) ? $this->userName->getValue() : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf FileRepositoryUserPassword)
             ? $password
             : new FileRepositoryUserPassword($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserPassword $password
     */
    public function getPassword()
    {
        return ($this->password) ? $this->password->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowPut($allowPut = null)
    {
        $this->allowPut = new PrimitiveType($allowPut);
        $this->allowPut->setName('allowPut');
        return $this;
    }

    /**
     * 
     * @return boolean $allowPut
     */
    public function getAllowPut()
    {
        return ($this->allowPut) ? $this->allowPut->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        $this->allowDelete = new PrimitiveType($allowDelete);
        $this->allowDelete->setName('allowDelete');
        return $this;
    }

    /**
     * 
     * @return boolean $allowDelete
     */
    public function getAllowDelete()
    {
        return ($this->allowDelete) ? $this->allowDelete->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        $this->allowGet = new PrimitiveType($allowGet);
        $this->allowGet->setName('allowGet');
        return $this;
    }

    /**
     * 
     * @return boolean $allowGet
     */
    public function getAllowGet()
    {
        return ($this->allowGet) ? $this->allowGet->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceUserDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'SystemFileRepositoryDeviceUserDeleteRequest';
    protected $fileRepositoryName = null;
    protected $userName           = null;

    public function __construct(
         $fileRepositoryName,
         $userName
    ) {
        $this->setFileRepositoryName($fileRepositoryName);
        $this->setUserName($userName);
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
        if (!$fileRepositoryName) return $this;
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
     * @return FileRepositoryUserName $userName
     */
    public function getUserName()
    {
        return $this->userName->getValue();
    }
}

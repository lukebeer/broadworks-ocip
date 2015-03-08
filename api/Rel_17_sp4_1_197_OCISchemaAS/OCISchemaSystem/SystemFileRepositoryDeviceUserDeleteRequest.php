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


/**
     * Delete a file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceUserDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
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
}

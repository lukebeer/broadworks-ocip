<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a user of a file repository in the system.
 *         The response is either a SystemFileRepositoryDeviceUserGetResponse or an ErrorResponse.
 */
class SystemFileRepositoryDeviceUserGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $fileRepositoryName,
             $userName
    ) {
        $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
        $this->userName           = new FileRepositoryUserName($userName);
        $this->args               = func_get_args();
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
}

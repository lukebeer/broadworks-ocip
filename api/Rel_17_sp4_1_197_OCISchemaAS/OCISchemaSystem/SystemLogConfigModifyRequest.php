<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the log configuration file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLogConfigModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $configFile = null;

    public function __construct(
         FileResource $configFile = null
    ) {
        $this->setConfigFile($configFile);
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function setConfigFile(FileResource $configFile = null)
    {
        $this->configFile = FileResource $configFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function getConfigFile()
    {
        return (!$this->configFile) ?: $this->configFile->getValue();
    }
}
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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the log configuration file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLogConfigModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemLogConfigModifyRequest';
    protected $configFile;

    public function __construct(
         FileResource $configFile = null
    ) {
        $this->setConfigFile($configFile);
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
    public function setConfigFile(FileResource $configFile = null)
    {
        $this->configFile = ($configFile InstanceOf FileResource)
             ? $configFile
             : new FileResource($configFile);
        $this->configFile->setName('configFile');
        return $this;
    }

    /**
     * 
     * @return FileResource $configFile
     */
    public function getConfigFile()
    {
        return $this->configFile;
    }
}

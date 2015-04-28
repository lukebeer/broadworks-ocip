<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the log configuration file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLogConfigModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLogConfigModifyRequest';
    protected $configFile;

    public function __construct(
         $configFile = null
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
        $this->configFile->setElementName('configFile');
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

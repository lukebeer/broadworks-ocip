<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a new file repository.
 *             The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemFileRepositoryDeviceAddRequest';
    protected $name;
    protected $rootDirectory;
    protected $port;

    public function __construct(
         $name = '',
         $rootDirectory = null,
         $port = null
    ) {
        $this->setName($name);
        $this->setRootDirectory($rootDirectory);
        $this->setPort($port);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf FileRepositoryName)
             ? $name
             : new FileRepositoryName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setElementName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $rootDirectory
     */
    public function getRootDirectory()
    {
        return ($this->rootDirectory)
            ? $this->rootDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
        $this->port->setElementName('port');
        return $this;
    }

    /**
     * 
     * @return Port $port
     */
    public function getPort()
    {
        return ($this->port)
            ? $this->port->getElementValue()
            : null;
    }
}

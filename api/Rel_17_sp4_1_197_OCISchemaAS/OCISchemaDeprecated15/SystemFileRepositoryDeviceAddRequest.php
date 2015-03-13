<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new file repository.
 *             The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceAddRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'SystemFileRepositoryDeviceAddRequest';
    protected $name          = null;
    protected $rootDirectory = null;
    protected $port          = null;

    public function __construct(
         $name,
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf FileRepositoryName)
             ? $name
             : new FileRepositoryName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        if (!$rootDirectory) return $this;
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $rootDirectory
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory->getValue();
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        if (!$port) return $this;
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port $port
     */
    public function getPort()
    {
        return $this->port->getValue();
    }
}

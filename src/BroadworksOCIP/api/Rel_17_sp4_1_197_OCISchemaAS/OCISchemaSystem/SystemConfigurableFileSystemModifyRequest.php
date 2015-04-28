<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ConfigurableFileSystemDirectory;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify File System parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemConfigurableFileSystemModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemConfigurableFileSystemModifyRequest';
    protected $mediaDirectory;

    public function __construct(
         $mediaDirectory = null
    ) {
        $this->setMediaDirectory($mediaDirectory);
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
    public function setMediaDirectory($mediaDirectory = null)
    {
        $this->mediaDirectory = ($mediaDirectory InstanceOf ConfigurableFileSystemDirectory)
             ? $mediaDirectory
             : new ConfigurableFileSystemDirectory($mediaDirectory);
        $this->mediaDirectory->setElementName('mediaDirectory');
        return $this;
    }

    /**
     * 
     * @return ConfigurableFileSystemDirectory $mediaDirectory
     */
    public function getMediaDirectory()
    {
        return ($this->mediaDirectory)
            ? $this->mediaDirectory->getElementValue()
            : null;
    }
}

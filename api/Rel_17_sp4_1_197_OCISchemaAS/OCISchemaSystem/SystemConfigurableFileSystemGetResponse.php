<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ConfigurableFileSystemDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableFileSystemGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemConfigurableFileSystemGetRequest.
 *         Contains the File System parameters.
 */
class SystemConfigurableFileSystemGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $mediaDirectory = null;

    /**
     * @return SystemConfigurableFileSystemGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Audio/Video File Directory location.
     */
    public function setMediaDirectory($mediaDirectory = null)
    {
        $this->mediaDirectory = ($mediaDirectory InstanceOf ConfigurableFileSystemDirectory)
             ? $mediaDirectory
             : new ConfigurableFileSystemDirectory($mediaDirectory);
    }

    /**
     * Audio/Video File Directory location.
     */
    public function getMediaDirectory()
    {
        return (!$this->mediaDirectory) ?: $this->mediaDirectory->getValue();
    }
}

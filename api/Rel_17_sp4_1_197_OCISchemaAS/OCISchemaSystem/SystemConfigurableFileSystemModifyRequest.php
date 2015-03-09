<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ConfigurableFileSystemDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableFileSystemModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify File System parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemConfigurableFileSystemModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $mediaDirectory = null;

    public function __construct(
         $mediaDirectory = null
    ) {
        $this->setMediaDirectory($mediaDirectory);
    }

    /**
     * @return SystemConfigurableFileSystemModifyResponse
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

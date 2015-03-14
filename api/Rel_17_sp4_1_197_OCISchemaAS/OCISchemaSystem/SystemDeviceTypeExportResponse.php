<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceTypeExportRequest.
 */
class SystemDeviceTypeExportResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDeviceTypeExportResponse';
    protected $file = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDeviceTypeExportResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFile($file = null)
    {
        if (!$file) return $this;
        $this->file = ($file InstanceOf URL)
             ? $file
             : new URL($file);
        $this->file->setName('file');
        return $this;
    }

    /**
     * 
     * @return URL $file
     */
    public function getFile()
    {
        return $this->file->getValue();
    }
}

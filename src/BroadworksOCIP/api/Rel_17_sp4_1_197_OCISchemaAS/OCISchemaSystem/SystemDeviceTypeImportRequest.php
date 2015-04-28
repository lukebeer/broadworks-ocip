<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to import a Device Type Archive File (DTAF) as a new Device Type.  The URL supports the HTTP and the FILE protocols.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceTypeImportRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDeviceTypeImportRequest';
    protected $file;

    public function __construct(
         $file = ''
    ) {
        $this->setFile($file);
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
    public function setFile($file = null)
    {
        $this->file = ($file InstanceOf URL)
             ? $file
             : new URL($file);
        $this->file->setElementName('file');
        return $this;
    }

    /**
     * 
     * @return URL $file
     */
    public function getFile()
    {
        return ($this->file)
            ? $this->file->getElementValue()
            : null;
    }
}

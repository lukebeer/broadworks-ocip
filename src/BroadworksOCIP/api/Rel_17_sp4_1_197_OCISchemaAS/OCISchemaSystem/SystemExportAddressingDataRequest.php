<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to export Application Server addressing data, such as DNs, extensions, alias and user ids
 *         to a file so they can be uploaded to a Network Server.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemExportAddressingDataRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemExportAddressingDataRequest';
    protected $fileName;

    public function __construct(
         $fileName = ''
    ) {
        $this->setFileName($fileName);
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
    public function setFileName($fileName = null)
    {
        $this->fileName = ($fileName InstanceOf FileName)
             ? $fileName
             : new FileName($fileName);
        $this->fileName->setElementName('fileName');
        return $this;
    }

    /**
     * 
     * @return FileName $fileName
     */
    public function getFileName()
    {
        return ($this->fileName)
            ? $this->fileName->getElementValue()
            : null;
    }
}

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
 * Requests the contents of a file.
 *         The response is either a SystemFileGetContentResponse or an
 *         ErrorResponse.
 */
class SystemFileGetContentRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileGetContentResponse';
    public    $elementName = 'SystemFileGetContentRequest';
    protected $fileName;

    public function __construct(
         $fileName = ''
    ) {
        $this->setFileName($fileName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileGetContentResponse $response
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

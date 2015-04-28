<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a SystemFileGetContentRequest. The fileContent length returned is limited to 128KBytes.
 */
class SystemFileGetContentResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemFileGetContentResponse';
    protected $fileContent;

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
    public function setFileContent($fileContent = null)
    {
        $this->fileContent = new PrimitiveType($fileContent);
        $this->fileContent->setElementName('fileContent');
        return $this;
    }

    /**
     * 
     * @return string $fileContent
     */
    public function getFileContent()
    {
        return ($this->fileContent)
            ? $this->fileContent->getElementValue()
            : null;
    }
}

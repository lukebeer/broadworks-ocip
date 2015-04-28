<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPContentType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeleteContentTypeRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeleteContentTypeRequest';
    protected $contentType;

    public function __construct(
         $contentType = ''
    ) {
        $this->setContentType($contentType);
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
    public function setContentType($contentType = null)
    {
        $this->contentType = ($contentType InstanceOf SystemSIPContentType)
             ? $contentType
             : new SystemSIPContentType($contentType);
        $this->contentType->setElementName('contentType');
        return $this;
    }

    /**
     * 
     * @return SystemSIPContentType $contentType
     */
    public function getContentType()
    {
        return ($this->contentType)
            ? $this->contentType->getElementValue()
            : null;
    }
}

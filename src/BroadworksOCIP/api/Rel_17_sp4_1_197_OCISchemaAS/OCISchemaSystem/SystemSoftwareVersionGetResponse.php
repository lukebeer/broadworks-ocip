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
 * Response to the SystemSoftwareVersionGetRequest.
 */
class SystemSoftwareVersionGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSoftwareVersionGetResponse';
    protected $version;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSoftwareVersionGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setVersion($version = null)
    {
        $this->version = new PrimitiveType($version);
        $this->version->setElementName('version');
        return $this;
    }

    /**
     * 
     * @return string $version
     */
    public function getVersion()
    {
        return ($this->version)
            ? $this->version->getElementValue()
            : null;
    }
}

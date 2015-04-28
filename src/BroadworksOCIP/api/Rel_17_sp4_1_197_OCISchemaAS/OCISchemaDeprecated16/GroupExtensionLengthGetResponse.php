<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupExtensionLength;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupExtensionLengthGetRequest.
 */
class GroupExtensionLengthGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupExtensionLengthGetResponse';
    protected $extensionLength;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupExtensionLengthGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setExtensionLength($extensionLength = null)
    {
        $this->extensionLength = ($extensionLength InstanceOf GroupExtensionLength)
             ? $extensionLength
             : new GroupExtensionLength($extensionLength);
        $this->extensionLength->setElementName('extensionLength');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionLength $extensionLength
     */
    public function getExtensionLength()
    {
        return ($this->extensionLength)
            ? $this->extensionLength->getElementValue()
            : null;
    }
}

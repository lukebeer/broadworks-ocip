<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a static configuration tag.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDeviceManagementTagModifyRequest';
    protected $tagName;
    protected $tagValue;

    public function __construct(
         $tagName = '',
         $tagValue = null
    ) {
        $this->setTagName($tagName);
        $this->setTagValue($tagValue);
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
    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
        $this->tagName->setElementName('tagName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagName $tagName
     */
    public function getTagName()
    {
        return ($this->tagName)
            ? $this->tagName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTagValue($tagValue = null)
    {
        $this->tagValue = ($tagValue InstanceOf DeviceManagementTagValue)
             ? $tagValue
             : new DeviceManagementTagValue($tagValue);
        $this->tagValue->setElementName('tagValue');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagValue $tagValue
     */
    public function getTagValue()
    {
        return ($this->tagValue)
            ? $this->tagValue->getElementValue()
            : null;
    }
}

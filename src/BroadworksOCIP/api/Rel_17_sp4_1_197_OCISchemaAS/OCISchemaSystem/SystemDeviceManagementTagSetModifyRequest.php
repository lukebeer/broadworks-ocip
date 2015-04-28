<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagSetName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDeviceManagementTagSetModifyRequest';
    protected $tagSetName;
    protected $newTagSetName;

    public function __construct(
         $tagSetName = '',
         $newTagSetName = null
    ) {
        $this->setTagSetName($tagSetName);
        $this->setNewTagSetName($newTagSetName);
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
    public function setTagSetName($tagSetName = null)
    {
        $this->tagSetName = ($tagSetName InstanceOf DeviceManagementTagSetName)
             ? $tagSetName
             : new DeviceManagementTagSetName($tagSetName);
        $this->tagSetName->setElementName('tagSetName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagSetName $tagSetName
     */
    public function getTagSetName()
    {
        return ($this->tagSetName)
            ? $this->tagSetName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewTagSetName($newTagSetName = null)
    {
        $this->newTagSetName = ($newTagSetName InstanceOf DeviceManagementTagSetName)
             ? $newTagSetName
             : new DeviceManagementTagSetName($newTagSetName);
        $this->newTagSetName->setElementName('newTagSetName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagSetName $newTagSetName
     */
    public function getNewTagSetName()
    {
        return ($this->newTagSetName)
            ? $this->newTagSetName->getElementValue()
            : null;
    }
}

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
 * Response to SystemDeviceManagementTagSetGetListRequest.
 *         The response includes an array of tag set names defined in the system.
 *         The system default tag set name is not part of this response.
 */
class SystemDeviceManagementTagSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDeviceManagementTagSetGetListResponse';
    protected $tagSetName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDeviceManagementTagSetGetListResponse $response
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
}

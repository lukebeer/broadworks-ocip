<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDeviceManagementTagSetModifyRequest';
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
        $this->tagSetName->setName('tagSetName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagSetName $tagSetName
     */
    public function getTagSetName()
    {
        return ($this->tagSetName) ? $this->tagSetName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewTagSetName($newTagSetName = null)
    {
        $this->newTagSetName = ($newTagSetName InstanceOf DeviceManagementTagSetName)
             ? $newTagSetName
             : new DeviceManagementTagSetName($newTagSetName);
        $this->newTagSetName->setName('newTagSetName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagSetName $newTagSetName
     */
    public function getNewTagSetName()
    {
        return ($this->newTagSetName) ? $this->newTagSetName->getValue() : null;
    }
}

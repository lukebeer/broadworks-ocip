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
 * Request to delete a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagSetDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDeviceManagementTagSetDeleteRequest';
    protected $tagSetName;

    public function __construct(
         $tagSetName = ''
    ) {
        $this->setTagSetName($tagSetName);
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
}

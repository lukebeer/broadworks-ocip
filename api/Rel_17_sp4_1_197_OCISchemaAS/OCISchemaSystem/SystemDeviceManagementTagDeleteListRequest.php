<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete static configuration tags.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name    = 'SystemDeviceManagementTagDeleteListRequest';
    protected $tagName = null;

    public function __construct(
         $tagName = null
    ) {
        $this->setTagName($tagName);
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
        if (!$tagName) return $this;
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
        $this->tagName->setName('tagName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagName $tagName
     */
    public function getTagName()
    {
        return $this->tagName->getValue();
    }
}
